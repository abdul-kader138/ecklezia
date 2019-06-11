<?php

namespace App\Http\Controllers;

use App\Shepherdsetup;
use Illuminate\Http\Request;

class ShepherdSetupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shepherdsetups = Shepherdsetup::orderBy('id', 'desc')->get();
        return view('admin.shepherdsetups.index', compact('shepherdsetups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shepherdsetups.add');
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
            'room_category' => 'required'
        ]);

        $shepherdsetup = new Shepherdsetup();

        $shepherdsetup->name = $request->name;
        $shepherdsetup->room_category = $request->room_category;
        $shepherdsetup->class_guide = $request->class_guide;
        $shepherdsetup->service_assignment = $request->service_assignment;

        $shepherdsetup->save();

        return redirect(route('shepherdsetups.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shepherdsetup = Shepherdsetup::find($id);
        return view('admin.shepherdsetups.view', compact('shepherdsetup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shepherdsetup = Shepherdsetup::find($id);
        return view('admin.shepherdsetups.edit', compact('shepherdsetup'));
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
        $shepherdsetup = Shepherdsetup::find($id);

        $shepherdsetup->name = $request->name;
        $shepherdsetup->room_category = $request->room_category;
        $shepherdsetup->class_guide = $request->class_guide;
        $shepherdsetup->service_assignment = $request->service_assignment;

        $shepherdsetup->save();

        return redirect(route('shepherdsetups.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shepherdsetup = Shepherdsetup::find($id);
        $shepherdsetup->delete();

        return redirect(route('shepherdsetups.index'));
    }
}
