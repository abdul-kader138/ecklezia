<?php

namespace App\Http\Controllers;

use App\RoomCategory;
use App\Service;
use App\Shepherd;
use Illuminate\Http\Request;

class ShepherdsController extends Controller
{
    /**
     * @var Shepherd
     */
    private $shepherd;
    /**
     * @var Service
     */
    private $service;
    /**
     * @var RoomCategory
     */
    private $roomCategory;

    public function __construct(Shepherd $shepherd,Service $service,RoomCategory $roomCategory)
    {
        $this->shepherd = $shepherd;
        $this->service = $service;
        $this->roomCategory = $roomCategory;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shepherds = Shepherd::orderBy('id','desc')->get();
        return view('admin.shepherds.index',compact('shepherds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shepherds.add');
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
            'first_name' => 'required',
            'email' => 'required|email|unique:shepherds',
            'username' => 'required',
            'password' => 'required',
        ]);

        $shepherd = new Shepherd();

        $shepherd->first_name = $request->first_name;
        $shepherd->last_name = $request->last_name;
        $shepherd->email = $request->email;
        $shepherd->username = $request->username;
        $shepherd->password = bcrypt($request->password);
        $shepherd->phone = $request->phone;
        $shepherd->save();

        return redirect()->route('admin.shepherd.index')->with('success','Save Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shepherd = Shepherd::with(['checkActivity'])->findOrFail($id);
        return view('admin.shepherds.view',compact('shepherd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function setupForm(){
        $shepherds = $this->shepherd->pluck('first_name','id')->toArray();
        $services = $this->service->pluck('service_name','id')->toArray();
        $room_category = $this->roomCategory->pluck('name','id')->toArray();
        return view('admin.shepherds.setup',compact('shepherds','services','room_category'));
    }
    public function setupStore(Request $request){
        $this->validate($request,[
           'shepard_id'=>'required|integer',
           'room_id'=>'required|integer',
//           'service_id'=>'required|integer',
        ]);
        $setup = $this->shepherd->findOrFail($request->shepard_id);
        $setup->room_id = $request->room_id;
        $setup->service_id = $request->service_id;
        $setup->save();
        return back()->with('success','Setup successful');
    }
}
