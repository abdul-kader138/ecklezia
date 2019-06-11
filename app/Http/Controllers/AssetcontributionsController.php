<?php

namespace App\Http\Controllers;

use App\Assetcontribution;
use Illuminate\Http\Request;

class AssetcontributionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assetcontributions = Assetcontribution::orderBy('id','desc')->get();
        return view('admin.assetcontributions.index',compact('assetcontributions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.assetcontributions.add');
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
            'email' => 'required',
            'first_name' => 'required',
            'estimated_amount' => 'required'
        ]);

        $data = $request->all();

        Assetcontribution::create($data);

        return redirect(route('admin.asset-contribution.index'))->with('success','save successful');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assetcontribution = Assetcontribution::findOrFail($id);
        return view('admin.assetcontributions.view',compact('assetcontribution'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assetcontribution = Assetcontribution::findOrFail($id);
        return view('admin.assetcontributions.edit',compact('assetcontribution'));
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
            'email' => 'required',
            'first_name' => 'required',
            'estimated_amount' => 'required'
        ]);

        $assetcontribution = Assetcontribution::findOrFail($id);

        $assetcontribution->name = $request->name;
        $assetcontribution->email = $request->email;
        $assetcontribution->phone = $request->phone;
        $assetcontribution->occupation = $request->occupation;
        $assetcontribution->address = $request->address;
        $assetcontribution->country = $request->country;
        $assetcontribution->city = $request->city;
        $assetcontribution->state = $request->state;
        $assetcontribution->zip = $request->zip;
        $assetcontribution->first_name = $request->first_name;
        $assetcontribution->last_name = $request->last_name;
        $assetcontribution->description = $request->description;
        $assetcontribution->estimated_amount = $request->estimated_amount;

        $assetcontribution->save();

        return redirect(route('admin.asset-contribution.index'))->with('success','Update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assetcontribution = Assetcontribution::findOrFail($id);
        $assetcontribution->delete();

        return redirect(route('admin.asset-contribution.index'))->with('success','Delete successful');

    }
}
