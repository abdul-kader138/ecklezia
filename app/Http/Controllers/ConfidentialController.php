<?php

namespace App\Http\Controllers;

use App\Confidential;
use Illuminate\Http\Request;

class ConfidentialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $confidentials = Confidential::orderBy('id','desc')->get();
        return view('admin.confidential.index',compact('confidentials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.confidential.add');
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
            'purpose' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'category' => 'required',
            'parties_involve' => 'required',
        ]);

        $confidential = new Confidential;
        $confidential->first_name = $request->first_name;
        $confidential->last_name = $request->last_name;
        $confidential->purpose = $request->purpose;
        $confidential->date = $request->date;
        $confidential->category = $request->category;
        $confidential->phone = $request->phone;
        $confidential->parties_involve = $request->parties_involve;
        $confidential->notes = $request->notes;
        $confidential->conclusion = $request->conclusion;

        $confidential->save();

        return redirect()->route('admin.confidential.index')->with('success','Save Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $confidential = Confidential::find($id);
        return view('admin.confidential.view',compact('confidential'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $confidential = Confidential::find($id);
        return view('admin.confidential.edit',compact('confidential'));
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
            'first_name' => 'required',
            'purpose' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'category' => 'required',
            'parties_involve' => 'required',
        ]);
        $confidential = Confidential::find($id);

        $confidential->first_name = $request->first_name;
        $confidential->last_name = $request->last_name;
        $confidential->purpose = $request->purpose;
        $confidential->date = $request->date;
        $confidential->category = $request->category;
        $confidential->phone = $request->phone;
        $confidential->parties_involve = $request->parties_involve;
        $confidential->notes = $request->notes;
        $confidential->conclusion = $request->conclusion;

        $confidential->save();

        return redirect()->route('admin.confidential.index')->with('success','Update Successful');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $confidential = Confidential::find($id);
        $confidential->delete();
        return redirect()->route('admin.confidential.index')->with('success','Delete Successful');

    }
}
