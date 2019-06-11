<?php

namespace App\Http\Controllers;

use App\FamilyGroup;
use App\FamilyMember;
use App\People;
use App\PeopleAddress;
use Illuminate\Http\Request;
use Image;
class PeoplesController extends Controller
{
    /**
     * @var People
     */
    private $people;

    public function __construct(People $people)
    {
        $this->people = $people;
    }

    public function index($type)
    {
        $family = new FamilyGroup($this->people);
        $type = str_replace('-','_',$type);
        if(!in_array($type,['all','church_member','visitor','volunteer']))
            abort(401);
        $peoples = $this->people;
        if($type!=='all'){
            $peoples=$peoples->where('member_category',$type);
        }

        $peoples=$peoples->orderBy('id','desc')->get();
        return view('admin.peoples.index',compact('peoples','type'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($parent=null)
    {
        if(null !== $parent){
            $parent = $this->people->findOrFail($parent);
            $default_field = new $this->people;
            $default_field['last_name']=$parent->last_name;
            $default_field['member_category']=$parent->member_category;
            $default_field['home_phone_number']=$parent->home_phone_number;
            $default_field['address']=$parent->defaultAddress->address;
            $default_field['country']=$parent->defaultAddress->country;
            $default_field['city']=$parent->defaultAddress->city;
            $default_field['state']=$parent->defaultAddress->state;
            $default_field['zip']=$parent->defaultAddress->zip;
            $default_field['mailing_address']=$parent->mailingAddress->address;
            $default_field['mailing_country']=$parent->mailingAddress->country;
            $default_field['mailing_city']=$parent->mailingAddress->city;
            $default_field['mailing_state']=$parent->mailingAddress->state;
            $default_field['mailing_zip']=$parent->mailingAddress->zip;
            return view('admin.peoples.add_family',compact('parent','default_field'));
        }
        return view('admin.peoples.add',compact('parent'));
    }
    private function makeUniqueUsername($username,$count=0){
        $add_str =$count?$count:'';
        $make_user = $username.''.$add_str;
        if($people = $this->people->where('user_name',$make_user)->first()){
            $count =  $this->makeUniqueUsername($username,$count+1);
        }
        return $count;
    }

    private function makeUniqueId($id,$count=0){
        $make_id = $id+$count;
        if($people = $this->people->where('membership_unique_id',date('Ymd').'-'.$make_id)->first()){
            $count =  $this->makeUniqueId($make_id,$count+1);
        }
        return $count;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$parent=null)
    {
        if(null !== $parent){
            $parent = $this->people->findOrFail($parent);
            $rules['family_status']= 'required';
        }
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'nullable|email|max:191',
            'member_category' => 'required',
            'home_phone_number' => 'required',
            'cell_number' => 'required|alpha_num|min:5',
            'gender' => 'required',
            'household_status' => 'required',
            'people_category' => 'required',
            'baptized_date' => 'nullable|date',
            'baptized' => 'required'
        ];
        $request->validate($rules);
        $people =  new People();
        $people->first_name = $request->first_name;
        $people->last_name = $request->last_name;
        $people->email = $request->email;
        $people->member_category = $request->member_category;
        $people->cell_number = $request->cell_number;
        $people->home_phone_number = $request->home_phone_number;
        $people->same_as_address = $request->same_as_address?1:0;
        $user_name = substr($request->first_name, 0,1).''.$request->last_name;
        $count = $this->makeUniqueUsername($user_name)?$this->makeUniqueUsername($user_name):'';
        $people->user_name =$user_name.$count;
//        dd($people->user_name);
        $people->password = bcrypt(123456);
        $people->gender = $request->gender;
        $people->household_status = $request->household_status;

        $people->people_category = $request->people_category;
        $people->dob = json_encode($request->dob);
        $people->baptized_date = $request->baptized_date;
        $people->baptized = $request->baptized;
        $people->admin_access = $request->admin_access;
        $id = substr($people->cell_number, -4);
        $people->membership_unique_id = date('Ymd').'-'.($id+$this->makeUniqueId($id));
        if($request->has('file')){
            $path = 'uploads/images/people/';
            $people->file = 'associate_minister_'.time().'.'.$request->file->getClientOriginalExtension();
            Image::make($request->file)->save($path.$people->file);
        }
        $people->save();
        if(null !== $parent){
            $family =new FamilyMember();
            $family->people_id = $parent->id;
            $family->family_member_id = $people->id;
            $family->family_status = $request->family_status;
            $family->save();
        }
        $address = new PeopleAddress();
        $address->people_id = $people->id;
        $address->type = 'default';
        $address->address = $request->address;
        $address->country = $request->country;
        $address->city = $request->city;
        $address->state = $request->state;
        $address->zip = $request->zip;
        $address->save();
        $address = new PeopleAddress();
        $address->people_id = $people->id;
        $address->type = 'mailing';
        $address->address = $people->same_as_address?$request->address:$request->mailing_address;
        $address->country = $people->same_as_address?$request->country:$request->mailing_country;
        $address->city = $people->same_as_address?$request->city:$request->mailing_city;
        $address->state = $people->same_as_address?$request->state:$request->mailing_state;
        $address->zip = $people->same_as_address?$request->zip:$request->mailing_zip;
        $address->save();
        return redirect(route('admin.people.index','all'))->with('success','Save successful');
    }
    public function existFamilyStore(Request $request,$people_id){
        $this->validate($request,[
            'family_member_id'=>'required|integer',
            'status'=>'required|string',
        ]);
        $family =new FamilyMember();
        $family->people_id = $people_id;
        $family->family_member_id = $request->family_member_id;
        $family->family_status = $request->status;
        $family->save();
        return redirect(route('admin.people.show',$people_id))->with('success','Save successful');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $people = People::with('familyMember')->findOrFail($id);

        $abort_people = $people->familyMembers->pluck('family_member_id')->toArray();
        $abort_people[] = (int) $id;
        $all_people = People::whereNotIn('id',$abort_people)->get()

            ->map(function ($item,$key){
                return [
                    'id'=>$item->id,
                    'text'=>$item->membership_unique_id.' ( '.$item->full_name.' ) '
                ];
            })->pluck('text','id')->toArray();
//        dd($all_people);
        return view('admin.peoples.view',compact('people','all_people'));
    }
    public function imageCropPost(Request $request,$id)
    {
        $data = $request->image;


        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);
        $people = People::findOrFail($id);
        $data = base64_decode($data);
        $path = 'uploads/images/people/';
        $people->file = 'associate_minister_'.time().'.png';
        Image::make($data)->save($path.$people->file);
        $people->save();
        /*
          $image_name= time().'.png';
          $path = 'uploads/images/people/'. $image_name;


          file_put_contents($path, $data);*/


        return response()->json(['success'=>'done']);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $people = People::findOrFail($id);
        $people['dob']=json_decode($people->dob,true);
        $people['address']=$people->defaultAddress->address;
        $people['country']=$people->defaultAddress->country;
        $people['city']=$people->defaultAddress->city;
        $people['state']=$people->defaultAddress->state;
        $people['zip']=$people->defaultAddress->zip;
        $people['mailing_address']=$people->mailingAddress->address;
        $people['mailing_country']=$people->mailingAddress->country;
        $people['mailing_city']=$people->mailingAddress->city;
        $people['mailing_state']=$people->mailingAddress->state;
        $people['mailing_zip']=$people->mailingAddress->zip;
        $people['password']='';
//        dd($people);
        return view('admin.peoples.edit',compact('people'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $people = People::findOrFail($id);

        if($people->family_member_id !== null){
            $rules['family_status']= 'required';
        }
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'nullable|email|max:191',
            'member_category' => 'required',
            'home_phone_number' => 'required',
            'cell_number' => 'required',
            'gender' => 'required',
            'household_status' => 'required',
            'people_category' => 'required',
            'baptized_date' => 'nullable|date',
            'baptized' => 'required',
        ];
        $request->validate($rules);
        if($people->family_member_id !== null){
            $people->family_status = $request->family_status;
        }
        $people->first_name = $request->first_name;
        $people->last_name = $request->last_name;
        $people->email = $request->email;
        $people->member_category = $request->member_category;
        $people->cell_number = $request->cell_number;
        $people->home_phone_number = $request->home_phone_number;
        $people->same_as_address = $request->same_as_address?1:0;
        $people->gender = $request->gender;
        $people->household_status = $request->household_status;

        $people->people_category = $request->people_category;
        $people->dob = json_encode($request->dob);
        $people->baptized_date = $request->baptized_date;
        $people->baptized = $request->baptized;
        $people->admin_access = $request->admin_access;
        if($request->has('file')){
            $path = 'uploads/images/people/';
            @unlink($path.$people->file);
            $people->file = 'associate_minister_'.time().'.'.$request->file->getClientOriginalExtension();
            Image::make($request->file)->save($path.$people->file);
        }
        $people->save();
        $address = $people->defaultAddress;
        $address->address = $request->address;
        $address->country = $request->country;
        $address->city = $request->city;
        $address->state = $request->state;
        $address->zip = $request->zip;
        $address->save();

        $address = $people->MailingAddress;
        $address->address = $people->same_as_address?$request->address:$request->mailing_address;
        $address->country = $people->same_as_address?$request->country:$request->mailing_country;
        $address->city = $people->same_as_address?$request->city:$request->mailing_city;
        $address->state = $people->same_as_address?$request->state:$request->mailing_state;
        $address->zip = $people->same_as_address?$request->zip:$request->mailing_zip;
        $address->save();

        return redirect(route('admin.people.index','all'))->with('success','update successful');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $people = People::findOrFail($id);
        $people->delete();

        return redirect(route('admin.people.index','all'))->with('success','Delete successful');

    }

}
