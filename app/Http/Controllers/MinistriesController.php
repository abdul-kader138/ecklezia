<?php

namespace App\Http\Controllers;

use App\Http\Helper\MimeCheckRules;
use App\Ministry;
use App\MinistryEvent;
use App\MinistryMember;
use App\MinistryNote;
use App\People;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;
class MinistriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ministries = Ministry::orderBy('id','desc')->get();
        $peoples = People::get();
        return view('admin.ministries.index',compact('ministries','peoples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ministries.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ministry' => 'required',
            'ministry_name' => 'required',
            'ministry_status' => 'required',
            'phone' => 'required',
            'image'=>[new MimeCheckRules(['jpg','png'])]
        ]);
        $ministry = new Ministry();
        $ministry->ministry = $request->ministry;
        $ministry->ministry_name = $request->ministry_name;
        $ministry->ministry_status = $request->ministry_status;
        $ministry->others_text = $request->others_text;
        $ministry->phone = $request->phone;
        $ministry->meeting_time = $request->meeting_time;
        $ministry->events = $request->events;
        if($request->hasFile('image')){
            $path = 'uploads/images/ministry/';
            $ministry->image = 'ministry_'.time().'.'.$request->image->getClientOriginalExtension();
            Image::make($request->image)->resize(100,100)->save($path.$ministry->image);
        }
        $ministry->save();

        return redirect()->route('admin.ministries.index')->with('success','Save Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ministry = Ministry::findOrFail($id);
        $peoples = People::get();

        return view('admin.ministries.view',compact('ministry','peoples'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ministry = Ministry::findOrFail($id);
        return view('admin.ministries.edit',compact('ministry'));
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
        $request->validate([
            'ministry' => 'required',
            'ministry_name' => 'required',
            'ministry_status' => 'required',
            'phone' => 'required',
            'image'=>[new MimeCheckRules(['jpg','png'])]
        ]);

        $ministry = Ministry::findOrFail($id);

        $ministry->ministry = $request->ministry;
        $ministry->ministry_name = $request->ministry_name;
        $ministry->ministry_status = $request->ministry_status;
        $ministry->others_text = $request->others_text;
        $ministry->phone = $request->phone;
        $ministry->meeting_time = $request->meeting_time;
        $ministry->events = $request->events;
        if($request->hasFile('image')){
            $path = 'uploads/images/ministry/';
            @unlink($path.$ministry->image);
            $ministry->image = 'ministry_'.time().'.'.$request->image->getClientOriginalExtension();
            Image::make($request->image)->resize(100,100)->save($path.$ministry->image);
        }
        $ministry->save();

        return redirect()->route('admin.ministries.index')->with('success','Update Successful');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ministry = Ministry::findOrFail($id);
        $ministry->delete();

        return redirect()->route('admin.ministries.index')->with('success','Delete Successful');

    }

    public function addMember(Request $request){
        $this->validate($request,[
            'people_id'=>'required|integer',
            'ministry_id'=>'required|integer'
        ]);
        if(MinistryMember::where([
            'people_id'=>$request->people_id,
            'ministry_id'=>$request->ministry_id,
        ])->first()){
            return back()->with('error','This Member Already Added');
        }
        $add_member = new MinistryMember();
        $add_member->people_id = $request->people_id;
        $add_member->ministry_id = $request->ministry_id;
        $add_member->save();
        return back()->with('success','Member Added Successful');

    }
    public function deleteMember($ministry_id,$id){
        $notes = Ministry::findOrFail($ministry_id)->member()->detach($id);
        return back()->with('success','Member Deleted Successful');
    }
    public function note(){
        $notes = MinistryNote::latest()->get();
        return view('admin.ministries.note.index',compact('notes'));
    }

    public function addNote(Request $request,$id){
        $this->validate($request,[
            'notes'=>'required',
        ]);
        $add_note = new MinistryNote();
        $add_note->ministry_id = $id;
        $add_note->note = $request->notes;
        $add_note->save();
        return back()->with('success','Note Added Successful');

    }
    public function viewNote($id){
        $ministry = Ministry::findOrFail($id);
        $peoples = People::get();
        return view('admin.ministries.note.view',compact('ministry','id','peoples'));

    }

    public function deleteNote($id){
        MinistryNote::findOrFail($id)->delete();
        return back()->with('success','Note Delete Successful');

    }
    public function event(){
        $events = MinistryEvent::latest()->get();
        return view('admin.ministries.event.index',compact('events'));
    }
    public function createEvent($id=null){
        $ministry = Ministry::get();
        return view('admin.ministries.event.add',compact('ministry','id'));

    }
    public function addEvent(Request $request,$id){
        $this->validate($request,[
                'ministry_id'=>'required|integer',
                'date'=>'required|date',
                'description'=>'nullable',
        ]);
        $event = new MinistryEvent();
        $event->ministry_id = $id;
        $event->date = Carbon::parse($request->date);
        $event->description = $request->description;
        $event->save();
        return back()->with('success','Event Added Successful');

    }
    public function viewEvent(Request $request,$id){
        $ministry = Ministry::findOrFail($id);
        $peoples = People::get();
        return view('admin.ministries.event.view',compact('ministry','id','peoples'));

    }

    public function deleteEvent($id){
        MinistryEvent::findOrFail($id)->delete();
        return back()->with('success','Event Delete Successful');

    }
    public function selectMember(Request $request){
        $data = People::where('id',$request->id)->first();
        return response()->json([
            'image'=>asset('uploads/images/people/'.$data->file),
            'email'=>$data->email,
            'phone'=>$data->cell_number,
        ]);
    }
}
