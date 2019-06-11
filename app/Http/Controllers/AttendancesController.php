<?php

namespace App\Http\Controllers;
use App\Attendance;
use App\Service;
use Illuminate\Http\Request;

class AttendancesController extends Controller
{
    /**
     * @var Attendance
     */
    private $attendance;
    /**
     * @var Service
     */
    private $service;

    public function __construct(Attendance $attendance,Service $service)
    {
        $this->attendance = $attendance;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendances = Attendance::orderBy('id','desc')->get();
        return view('admin.attendances.index',compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = $this->service->latest()->pluck('service_name','id');
        return view('admin.attendances.add',compact('service'));
    }
public function getData(Request $request){
        if($service = $this->service->where('id',$request->id)->first()){
            return response()->json([
               'attendance' =>$service->attendance,
               'speaker'=>$service->speaker
            ]);
        }
        return null;
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
            'name' => 'required',
            'date' => 'required',
            'service' => 'required|integer'
        ]);

        $data = $request->all();
    $attendance = new $this->attendance;
    $attendance->name = $request->name;
    $attendance->date = $request->date;
    $attendance->service_id = $request->service;
        $attendance->save();

        return redirect(route('admin.attendance.index'))->with('success','Attendance Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attendance = Attendance::findOrFail($id);
        return view('admin.attendances.view',compact('attendance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance['speaker'] = $attendance->service->speaker;
        $attendance['attendance'] = $attendance->service->attendance;
        $service = $this->service->latest()->pluck('service_name','id');
        return view('admin.attendances.edit',compact('attendance','service'));
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
            'name' => 'required',
            'speaker' => 'required',
            'attendance' => 'required'
        ]);

        $attendance = Attendance::findOrFail($id);

        $attendance->name = $request->name;
        $attendance->date = $request->date;
        $attendance->service = $request->service;
        $attendance->speaker = $request->speaker;
        $attendance->attendance = $request->attendance;



        $attendance->save();

        return redirect(route('admin.attendance.index'))->with('success','Attendance update Successful');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->delete();

        return redirect(route('admin.attendance.index'))->with('success','Attendance delete Successful');

    }
}
