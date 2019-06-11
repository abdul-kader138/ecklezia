<?php

namespace App\Http\Controllers;

use App\SermonPlanner;
use Illuminate\Http\Request;

class SermonPlanners extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sermons = SermonPlanner::orderBy('id','desc')->get();
        return view('admin.sermons.index',compact('sermons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sermons.add');
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
            'title' => 'required'
        ]);

        $sermon = new SermonPlanner();

        $sermon->title = $request->title;
        $sermon->purpose = $request->purpose;
        $sermon->opening_scripture = $request->opening_scripture;
        $sermon->created_date = $request->created_date;
        $sermon->preaching_date = $request->preaching_date;
        $sermon->main_scripture = $request->main_scripture;
        $sermon->sermon = $request->sermon;
        $sermon->conclusion = $request->conclusion;

        $sermon->save();

        return redirect()->route('admin.sermon-planners.index')->with('success','Save successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sermon = SermonPlanner::find($id);
        return view('admin.sermons.view',compact('sermon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sermon = SermonPlanner::find($id);
        return view('admin.sermons.edit',compact('sermon'));
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
            'title' => 'required'
        ]);
        $sermon = SermonPlanner::find($id);
        $sermon->title = $request->title;
        $sermon->purpose = $request->purpose;
        $sermon->opening_scripture = $request->opening_scripture;
        $sermon->created_date = $request->created_date;
        $sermon->preaching_date = $request->preaching_date;
        $sermon->main_scripture = $request->main_scripture;
        $sermon->sermon = $request->sermon;
        $sermon->conclusion = $request->conclusion;

        $sermon->save();
        return redirect()->route('admin.sermon-planners.index')->with('success','Update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sermon = SermonPlanner::find($id);
        $sermon->delete();
        return redirect()->route('admin.sermon-planners.index')->with('success','Delete successful');
    }
}
