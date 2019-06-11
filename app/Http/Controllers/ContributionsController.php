<?php

namespace App\Http\Controllers;

use App\Contribution;
use App\Giving;
use App\People;
use Illuminate\Http\Request;

class ContributionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contributions = Contribution::orderBy('id', 'desc')->get();
        $people = People::orderBy('id', 'desc')->get();

        return view('admin.contributions.index', compact('contributions','people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contributions.add');
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
            'date' => 'required|date',
            'giving_type' => 'required',
        ]);

        $contribution = new Contribution();

        $contribution->name = $request->name;
        $contribution->post_type = $request->post_type;
        $contribution->date = $request->date;
        $contribution->giving_type = $request->giving_type;
        $contribution->contribution_id = date('Ymd').'-'.time().'-'.rand(1111,9999);
        $contribution->financial_officer = $request->financial_officer;

        $contribution->save();

        return redirect(route('admin.contribution.index'))->with('success','Save successful');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contributions = Contribution::orderBy('id', 'desc')->get();
        $contribution = Contribution::findOrFail($id);
        $people = People::orderBy('id', 'desc')->get();

        return view('admin.contributions.view', compact('contribution','contributions','people'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contribution = Contribution::find($id);
        return view('admin.contributions.edit', compact('contribution'));
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
            'date' => 'required|date',
            'giving_type' => 'required',
        ]);
        $contribution = Contribution::find($id);

        $contribution->name = $request->name;
        $contribution->post_type = $request->post_type;
        $contribution->date = $request->date;
        $contribution->giving_type = $request->giving_type;
        $contribution->financial_officer = $request->financial_officer;
        $contribution->save();

        return redirect(route('admin.contribution.index'))->with('success','Update successful');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contribution = Contribution::find($id);
        $contribution->delete();

        return redirect(route('admin.contribution.index'))->with('success','Delete successful');

    }

    public function givingCreate(){
        $contributions = Contribution::orderBy('id', 'desc')->get();
        $people = People::orderBy('id', 'desc')->get();
        return view('admin.contributions.add_giving', compact('contributions','people'));
    }
    public function givingStore(Request $request){
        $request->validate([
            'contribution_id' => 'required|integer',
            'contributor_id' => 'required|integer',
            'giving_method' => 'required|max:191',
            'amount' => 'required|numeric',
            'account' => 'required',
        ]);
        $giving = new Giving();
        $giving->contribution_id = $request->contribution_id;
        $giving->contributor_id = $request->contributor_id;
        $giving->giving_method = $request->giving_method;
        $giving->amount = $request->amount;
        $giving->account = $request->account;
        $giving->save();
        return back()->with('success','Save successful');
     }

    public function givingShow($id){
        $contributions = Contribution::orderBy('id', 'desc')->get();
        $giving = Giving::findOrFail($id);
        $people = People::orderBy('id', 'desc')->get();
        return view('admin.contributions.view_giving', compact('giving','contributions','people'));
    }
    public function givingEdit($id){
        $contributions = Contribution::orderBy('id', 'desc')->get();
        $giving = Giving::findOrFail($id);
        $people = People::orderBy('id', 'desc')->get();
        return view('admin.contributions.edit_giving', compact('giving','contributions','people'));
    }
    public function givingUpdate(Request $request,$id){
        $request->validate([
            'contribution_id' => 'required|integer',
            'contributor_id' => 'required|integer',
            'giving_method' => 'required|max:191',
            'amount' => 'required|numeric',
            'account' => 'required',
        ]);
        $giving = Giving::findOrFail($id);
        $giving->contribution_id = $request->contribution_id;
        $giving->contributor_id = $request->contributor_id;
        $giving->giving_method = $request->giving_method;
        $giving->amount = $request->amount;
        $giving->account = $request->account;
        $giving->save();
        return redirect()->route('admin.contribution.show',$request->contribution_id)->with('success','Save successful');
    }

    public function givingDelete($id)
    {
        $giving = Giving::find($id);
        $giving->delete();

        return back()->with('success','Delete successful');

    }

    public function importExport(){
        $contributions = Giving::orderBy('id', 'desc')->get();
        return view('admin.contributions.import_export.index',compact('contributions'));
    }
    public function reportGenerate(){
        $contributions = Giving::orderBy('id', 'desc')->get();
        return view('admin.contributions.report_generation.index',compact('contributions'));
    }
}
