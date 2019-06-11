<?php

namespace App\Http\Controllers;

use App\Purchase;
use App\Activity;
use Illuminate\Http\Request;
use Image;
use Input;
use Auth;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPurchase = Purchase::all();
        return view('admin.pages.accounting.purchase.index',['allPurchase'=>$allPurchase]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.accounting.purchase.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->has('file')){
            $path = 'uploads/images/files/';
            $file = 'deposit'.time().'.'.$request->file->getClientOriginalExtension();
            Image::make($request->file)->save($path.$file);
        }
            for ($idx = 0; $idx < count($request->category); $idx++)
            {
                $newPurchase = new Purchase;
                $newPurchase->category = $request->category[$idx];
                $newPurchase->product = $request->product[$idx];
                $newPurchase->price = $request->price[$idx];
                $newPurchase->qty = $request->qty[$idx];
                $newPurchase->total_amount = $request->qty[$idx] * $request->price[$idx];
                $newPurchase->date = $request->date[$idx];
                $newPurchase->file   = $file;
                $newPurchase->description = $request->description[$idx];
                $newPurchase->save();
            }

            $newActivity = new Activity;
            $newActivity->t_name = 'purchase';
            $newActivity->t_id = $newPurchase->id;
            $newActivity->author_name = Auth::user()->name;
            $newActivity->author_id = Auth::id();
            $newActivity->massage = 'added new Purchase';
            $newActivity->type = 'add';
            $newActivity->save();
        return redirect(route('purchase'))->with('success','Purchase added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $findPurchase = Purchase::find($id);
        return view('admin.pages.accounting.purchase.edit',['purchase'=>$findPurchase]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $findPurchase = Purchase::find($id);
        $findPurchase->category = $request->category;
        $findPurchase->product = $request->product;
        $findPurchase->price = $request->price;
        $findPurchase->qty = $request->qty;
        $findPurchase->total_amount = $request->qty * $request->price;
        $findPurchase->date = $request->date;
        if($request->has('file')){
            $path = 'uploads/images/files/';
            unlink($path.$findPurchase->file);
            $findPurchase->file = 'deposit'.time().'.'.$request->file->getClientOriginalExtension();
            Image::make($request->file)->save($path.$findPurchase->file);
        }
        $findPurchase->description = $request->description;
        $findPurchase->save();

            $newActivity = new Activity;
            $newActivity->t_name = 'purchase';
            $newActivity->t_id = $findPurchase->id;
            $newActivity->author_name = Auth::user()->name;
            $newActivity->author_id = Auth::id();
            $newActivity->massage = 'edited a Purchase';
            $newActivity->type = 'edit';
            $newActivity->save();
        return redirect(route('purchase'))->with('success','Purchase update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findPurchase = Purchase::find($id);
            $path = 'uploads/images/files/';
            unlink($path.$findPurchase->file);
        $findPurchase->delete();

            $newActivity = new Activity;
            $newActivity->t_name = 'purchase';
            $newActivity->t_id = $id;
            $newActivity->author_name = Auth::user()->name;
            $newActivity->author_id = Auth::id();
            $newActivity->massage = 'deleted a Purchase';
            $newActivity->type = 'delete';
            $newActivity->save();

        return redirect(route('purchase'))->with('success','Purchase deleted successfully');
    }
}
