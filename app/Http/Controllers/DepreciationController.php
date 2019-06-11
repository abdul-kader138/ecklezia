<?php

namespace App\Http\Controllers;

use App\Depreciation;
use App\Activity;
use Illuminate\Http\Request;
use Auth;

class DepreciationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allDepreciation = Depreciation::all();
        return view('admin.pages.accounting.depreciation.index',['depreciations'=>$allDepreciation]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'asset_name' => 'required',
            'purchase_year' => 'required',
            'asset_name' => 'required',
            'cost' => 'required',
            'lifespan' => 'required',
            'salvage_value' => 'required'
        ]);
        $newAsset = new Depreciation;
        $newAsset->asset_name = $request->asset_name;
        $newAsset->purchase_year = $request->purchase_year;
        $newAsset->cost = $request->cost;
        $newAsset->lifespan = $request->lifespan;
        $newAsset->salvage_value = $request->salvage_value;
        $newAsset->description = $request->description;
        $newAsset->save();

        $newActivity = new Activity;
        $newActivity->t_name = 'depreciation';
        $newActivity->t_id = $newAsset->id;
        $newActivity->author_name = Auth::user()->name;
        $newActivity->author_id = Auth::id();
        $newActivity->massage = 'added new Depreciation';
        $newActivity->type = 'add';
        $newActivity->save();
        return redirect(route('depreciation'))->with('success','Asset saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Depreciation  $depreciation
     * @return \Illuminate\Http\Response
     */
    public function show(Depreciation $depreciation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Depreciation  $depreciation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $findAsset = Depreciation::find($id);
        return view('admin.pages.accounting.depreciation.edit',['asset'=>$findAsset]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Depreciation  $depreciation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'asset_name' => 'required',
            'purchase_year' => 'required',
            'asset_name' => 'required',
            'cost' => 'required',
            'lifespan' => 'required',
            'salvage_value' => 'required'
        ]);
        
        $findAsset = Depreciation::find($id);
        $findAsset->asset_name = $request->asset_name;
        $findAsset->purchase_year = $request->purchase_year;
        $findAsset->cost = $request->cost;
        $findAsset->lifespan = $request->lifespan;
        $findAsset->salvage_value = $request->salvage_value;
        $findAsset->description = $request->description;
        $findAsset->save();

        $newActivity = new Activity;
        $newActivity->t_name = 'depreciation';
        $newActivity->t_id = $findAsset->id;
        $newActivity->author_name = Auth::user()->name;
        $newActivity->author_id = Auth::id();
        $newActivity->massage = 'edited a Depreciation';
        $newActivity->type = 'edit';
        $newActivity->save();

        return redirect(route('depreciation'))->with('success','Asset updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Depreciation  $depreciation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findAsset = Depreciation::find($id);
        $findAsset->delete();

        $newActivity = new Activity;
        $newActivity->t_name = 'depreciation';
        $newActivity->t_id = $id;
        $newActivity->author_name = Auth::user()->name;
        $newActivity->author_id = Auth::id();
        $newActivity->massage = 'deleted a Depreciation';
        $newActivity->type = 'delete';
        $newActivity->save();

        return redirect(route('depreciation'))->with('success','Asset deleted successfully');
    }
}
