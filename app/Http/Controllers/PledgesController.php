<?php

namespace App\Http\Controllers;

use App\Pledge;
use Illuminate\Http\Request;

class PledgesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pledges = Pledge::orderBy('id','desc')->get();
        return view('admin.pledges.index',compact('pledges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pledges.add');
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
            'estimated_amount' => 'required',
            'payment_status' => 'required',
        ]);

        $pledge = new Pledge();

        $pledge->first_name = $request->first_name;
        $pledge->last_name = $request->last_name;
        $pledge->phone = $request->phone;
        $pledge->date = $request->date;
        $pledge->pledge_id = $request->pledge_id;
        $pledge->estimated_amount = $request->estimated_amount;
        $pledge->payment_status = $request->payment_status;
        $pledge->financial_officer = $request->financial_officer;

        $pledge->save();

        return redirect(route('admin.pledge.index'))->with('success','Save Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pledge = Pledge::find($id);
        return view('admin.pledges.view', compact('pledge'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pledge = Pledge::find($id);
        return view('admin.pledges.edit', compact('pledge'));
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
        $pledge = Pledge::find($id);

        $pledge->first_name = $request->first_name;
        $pledge->last_name = $request->last_name;
        $pledge->phone = $request->phone;
        $pledge->date = $request->date;
        $pledge->pledge_id = $request->pledge_id;
        $pledge->estimated_amount = $request->estimated_amount;
        $pledge->payment_status = $request->payment_status;
        $pledge->financial_officer = $request->financial_officer;

        $pledge->save();

        return redirect(route('admin.pledge.index'))->with('success','Update Successful');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pledge = Pledge::find($id);
        $pledge->delete();
        return redirect(route('admin.pledge.index'))->with('success','Delete Successful');

    }
}
