<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * @var Service
     */
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pt = 'Service List';
        $services = Service::orderBy('id','desc')->get();
        return view('admin.services.index',compact('services','pt'));
    }
    public function ongoing()
    {
        $pt = 'Ongoing Service List';
        $services = Service::orderBy('id','desc')->where('is_ongoing',1)->get();
        return view('admin.services.index',compact('services','pt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.add');
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
            'service_name' => 'required',
            'speaker' => 'required',
            'attendance' => 'required|numeric'
        ]);
$service = new $this->service;
$service->service_name = $request->service_name;
$service->speaker = $request->speaker;
$service->attendance = $request->attendance;
$service->is_ongoing = $request->is_ongoing?1:0;
$service->save();
        return redirect(route('admin.service.index'))->with('success','Save Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $service = Service::findOrFail($id);
        return view('admin.services.view',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit',compact('service'));
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
            'service_name' => 'required',
            'speaker' => 'required',
            'attendance' => 'required'
        ]);

        $service = Service::findOrFail($id);

        $service->service_name = $request->service_name;
        $service->speaker = $request->speaker;
        $service->attendance = $request->attendance;
        $service->is_ongoing = $request->is_ongoing?1:0;


        $service->save();

        return redirect(route('admin.service.index'))->with('success','Update Successful');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect(route('admin.service.index'))->with('success','Delete Successful');

    }
}
