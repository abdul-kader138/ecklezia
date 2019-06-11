<?php

namespace App\Http\Controllers;

use App\Expenditure;
use App\Activity;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class ExpenditureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allExpenditure = Expenditure::all();
        return view('admin.pages.accounting.expenditure.index',['allExpenditure'=>$allExpenditure]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('admin.pages.accounting.expenditure.add');
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
            'category' => 'required',
            'product' => 'required',
            'price' => 'required|numeric|min:1',
            'qty' => 'required|numeric|min:1',
            'exp_date' => 'required'
        ]);
        $newExpenditure = new Expenditure;
        $newExpenditure->category = $request->category;
        $newExpenditure->product = $request->product;
        $newExpenditure->price = $request->price;
        $newExpenditure->qty = $request->qty;
        $newExpenditure->total_amount = $request->qty * $request->price;
        $newExpenditure->exp_date = $request->exp_date;
        $newExpenditure->description = $request->description;
        $newExpenditure->save();

        $newActivity = new Activity;
        $newActivity->t_name = 'expenditure';
        $newActivity->t_id = $newExpenditure->id;
        $newActivity->author_name = Auth::user()->name;
        $newActivity->author_id = Auth::id();
        $newActivity->massage = 'added new Expenditure';
        $newActivity->type = 'add';
        $newActivity->save();
        return redirect(route('expenditure'))->with('success','Expenditure added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expenditure  $expenditure
     * @return \Illuminate\Http\Response
     */
    public function show(Expenditure $expenditure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expenditure  $expenditure
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $findExpenditure = Expenditure::find($id);
        return view('admin.pages.accounting.expenditure.edit',['expenditur'=>$findExpenditure]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expenditure  $expenditure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'category' => 'required',
            'product' => 'required',
            'price' => 'required|numeric|min:1',
            'qty' => 'required|numeric|min:1',
            'exp_date' => 'required'
        ]);
        
        $findExpenditure = Expenditure::find($id);
        $findExpenditure->category = $request->category;
        $findExpenditure->product = $request->product;
        $findExpenditure->price = $request->price;
        $findExpenditure->qty = $request->qty;
        $findExpenditure->total_amount = $request->qty * $request->price;
        $findExpenditure->exp_date = $request->exp_date;
        $findExpenditure->description = $request->description;
        $findExpenditure->save();

        $newActivity = new Activity;
        $newActivity->t_name = 'expenditure';
        $newActivity->t_id = $findExpenditure->id;
        $newActivity->author_name = Auth::user()->name;
        $newActivity->author_id = Auth::id();
        $newActivity->massage = 'updated new Expenditure';        
        $newActivity->type = 'edit';
        $newActivity->save();

        return redirect(route('expenditure'))->with('success','Expenditure Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expenditure  $expenditure
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findExpenditure = Expenditure::find($id);
        $findExpenditure->delete();

        $newActivity = new Activity;
        $newActivity->t_name = 'expenditure';
        $newActivity->t_id = $id;
        $newActivity->author_name = Auth::user()->name;
        $newActivity->author_id = Auth::id();
        $newActivity->type = 'delete';
        $newActivity->massage = 'deleted a Expenditure';
        $newActivity->save();

        return redirect(route('expenditure'))->with('success','Expenditure deleted successfully');
    }
}
