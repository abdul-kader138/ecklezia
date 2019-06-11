<?php

namespace App\Http\Controllers;

use App\CheckActivity;
use App\Room;
use App\RoomCategory;
use App\Shepherd;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CheckActivityController extends Controller
{
    /**
     * @var CheckActivity
     */
    private $check_activity;
    /**
     * @var RoomCategory
     */
    private $roomCategory;
    /**
     * @var Room
     */
    private $room;
    /**
     * @var Shepherd
     */
    private $shepherd;

    public function __construct(CheckActivity $check_activity,RoomCategory $roomCategory,Room $room,Shepherd $shepherd)
    {
        $this->check_activity = $check_activity;
        $this->roomCategory = $roomCategory;
        $this->room = $room;
        $this->shepherd = $shepherd;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkins = $this->check_activity->whereNull('check_out_time')->latest()->get();
        return view('admin.checkin.index',compact('checkins'));
    }
    public function checkOut(){
        $check_outs = $this->check_activity->whereNotNull('check_out_time')->latest()->get();
        return view('admin.checkin.check_out',compact('check_outs'));
    }
    public function checkOutAction($id){
        $check_activity = $this->check_activity->findOrFail($id);
        if($check_activity->check_out_time)
            return back()->with('error','Already checkout!');
        $check_activity->check_out_time = Carbon::now();
        $check_activity->save();
        return redirect(route('admin.check-out.index'))->with('success','Check out Successful');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->ajax()){
            $room = $this->room->where('category_id',$request->id)->get()->map(function ($item,$key){
                $item['selected']='';
                return $item;
            });
            return response()->json($room);
        }
        $room_category = $this->roomCategory->pluck('name','id')->toArray();
        $shepard = $this->shepherd->pluck('first_name','id')->toArray();
        return view('admin.checkin.add',compact('room_category','shepard'));
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
            'first_name' => 'required'
        ]);

        $checkin = new $this->check_activity;

        $checkin->first_name = $request->first_name;
        $checkin->last_name = $request->last_name;
        $checkin->parent_guardian = $request->parent_guardian;
        $checkin->room_id = $request->room_id;
        $checkin->phone = $request->phone;
        $checkin->shepard_id = $request->shepard_id;
        $checkin->assistant = $request->assistant;
        $checkin->room_id = $request->room_id;

        $checkin->save();

        return back()->with('success','Save Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $checkin = $this->check_activity->find($id);
        return view('admin.checkin.view',compact('checkin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $checkin = $this->check_activity->find($id);
        $checkin['room_category'] = $checkin->room->category_id;
        $rooms = $checkin->room->category->room->map(function ($item,$key) use ($checkin){
            $item['selected']=$item->id===$checkin->room_id?'selected':'';
            return $item;
        });
        $room_category = $this->roomCategory->pluck('name','id')->toArray();
        $shepard = $this->shepherd->pluck('first_name','id')->toArray();
        return view('admin.checkin.edit',compact('checkin','room_category','shepard','rooms'));
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
        $checkin = $this->check_activity->find($id);

        $checkin->first_name = $request->first_name;
        $checkin->last_name = $request->last_name;
        $checkin->parent_guardian = $request->parent_guardian;
        $checkin->room_id = $request->room_id;
        $checkin->phone = $request->phone;
        $checkin->shepard_id = $request->shepard_id;
        $checkin->assistant = $request->assistant;
        $checkin->room_id = $request->room_id;

        $checkin->save();

        return back()->with('success','Update Successful');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $checkin = $this->check_activity->find($id);
        $checkin->delete();
        return redirect(route('admin.check-in.index'))->with('success','Delete Successful');
    }
}
