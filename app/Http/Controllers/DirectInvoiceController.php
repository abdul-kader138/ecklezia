<?php

namespace App\Http\Controllers;

use App\DirectInvoice;
use App\Activity;
use App\Item;
use Illuminate\Http\Request;
use Auth;

class DirectInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allInvoice = DirectInvoice::all();
        return view('admin.pages.accounting.sales.direct.index',['allInvoice'=>$allInvoice]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.accounting.sales.direct.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        $newInvoice = new DirectInvoice;
        $newInvoice->invoice_number = $request->invoice_number;
        $newInvoice->customer_name = $request->customer_name;
        $newInvoice->customer_email = $request->customer_email;
        $newInvoice->invoice_date = $request->invoice_date;
        $newInvoice->due_date = $request->due_date;
        $newInvoice->prefix = $request->prefix;
        //$newInvoice->sub = $request->sub;
        //$newInvoice->tax_total = $request->tax_total;
        //$newInvoice->discount_amount = $request->discount_amount;
        //$newInvoice->discount_figure = $request->discount_figure;
        //$newInvoice->grand_total = $request->grand_total;
        $newInvoice->invoice_note = $request->invoice_note;
        $newInvoice->save();

        for ($idx = 0; $idx < count($request->item); $idx++)
        {
            $newItem = new Item; 
            $newItem->type = 'direct_invoices'; 
            $newItem->invoice_id = $newInvoice->id; 
            $newItem->item = $request->item[$idx]; 
            $newItem->tax_type = $request->tax_type[$idx]; 
            //$newItem->tax_rate = $request->tax_rate[$idx]; 
            $newItem->qty = $request->qty[$idx]; 
            $newItem->unit_price = $request->unit_price[$idx]; 
            $newItem->sub_total = $request->unit_price[$idx]*$request->qty[$idx];
            $tax= $newItem->sub_total/100;
            $tax= $tax*$request->tax_rate[$idx];
            $newItem->total = $tax + $newItem->sub_total;
            $newItem->save();

            $newInvoice->sub = $newInvoice->sub + $newItem->total;
            $newInvoice->tax_total = $newInvoice->tax_total + $newItem->$tax;
            $newItem->save();
        }

        $newInvoice->discount_figure = $request->discount_figure;
        $newInvoice->discount_type = $request->discount_type;
        if ($request->discount_type == 1) {
            
            $newInvoice->discount_amount = $request->discount_figure;
        }else{

            $discount = $newInvoice->sub/100; 
            $discount = $discount*$request->discount_figure;
            $newInvoice->discount_amount = $discount; 
        }
        $newInvoice->grand_total = $newInvoice->tax_total + $newInvoice->sub - $newInvoice->discount_amount;
        $newInvoice->save();

        $newActivity = new Activity;
        $newActivity->t_name = 'direct_invoice';
        $newActivity->t_id = $newInvoice->id;
        $newActivity->author_name = Auth::user()->name;
        $newActivity->author_id = Auth::id();
        $newActivity->massage = 'added new Direct Invoice';
        $newActivity->type = 'add';
        $newActivity->save();
        return redirect(route('direct_invoice'))->with('success','Invoice added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DirectInvoice  $directInvoice
     * @return \Illuminate\Http\Response
     */
    public function show(DirectInvoice $directInvoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DirectInvoice  $directInvoice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = DirectInvoice::find($id);
        $items = Item::where('invoice_id',$id)->get();
        return view('admin.pages.accounting.sales.direct.edit',['invoice'=>$invoice,'items'=>$items]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomerInvoice  $customerInvoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $request;
        $findInvoice = DirectInvoice::find($id);
        $findInvoice->invoice_number = $request->invoice_number;
        $findInvoice->customer_name = $request->customer_name;
        $findInvoice->customer_email = $request->customer_email;
        $findInvoice->invoice_date = $request->invoice_date;
        $findInvoice->due_date = $request->due_date;
        $findInvoice->prefix = $request->prefix;
        //$findInvoice->sub = $request->sub;
        //$findInvoice->tax_total = $request->tax_total;
        //$findInvoice->discount_amount = $request->discount_amount;
        //$findInvoice->discount_figure = $request->discount_figure;
        //$findInvoice->grand_total = $request->grand_total;
        $findInvoice->invoice_note = $request->invoice_note;
        $findInvoice->save();
        $items = Item::where('invoice_id',$id)->get();
        foreach ($items as $item) {
            $item->delete();
        }

        for ($idx = 0; $idx < count($request->item); $idx++)
        {
            $newItem = new Item; 
            $newItem->type = 'customer_invoices'; 
            $newItem->invoice_id = $findInvoice->id; 
            $newItem->item = $request->item[$idx]; 
            $newItem->tax_type = $request->tax_type[$idx]; 
            //$newItem->tax_rate = $request->tax_rate[$idx]; 
            $newItem->qty = $request->qty[$idx]; 
            $newItem->unit_price = $request->unit_price[$idx]; 
            $newItem->sub_total = $request->unit_price[$idx]*$request->qty[$idx];
            $tax= $newItem->sub_total/100;
            $tax= $tax*$request->tax_rate[$idx];
            $newItem->total = $tax + $newItem->sub_total;
            $newItem->save();

            $findInvoice->sub = $findInvoice->sub + $newItem->total;
            $findInvoice->tax_total = $findInvoice->tax_total + $newItem->$tax;
            $newItem->save();
        }

        $findInvoice->discount_figure = $request->discount_figure;
        $findInvoice->discount_type = $request->discount_type;
        if ($request->discount_type =='1') {
            
            $findInvoice->discount_amount = $request->discount_figure;
        }else{

            $discount = $findInvoice->sub/100; 
            $discount = $discount*$request->discount_figure;
            $findInvoice->discount_amount = $discount; 
        }
        $findInvoice->grand_total = $findInvoice->tax_total + $findInvoice->sub - $findInvoice->discount_amount;
        $findInvoice->save();

        $newActivity = new Activity;
        $newActivity->t_name = 'direct_invoice';
        $newActivity->t_id = $findInvoice->id;
        $newActivity->author_name = Auth::user()->name;
        $newActivity->author_id = Auth::id();
        $newActivity->massage = 'edit a Direct Invoice';
        $newActivity->type = 'edit';
        $newActivity->save();
        return redirect(route('direct_invoice'))->with('success','Invoice updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DirectInvoice  $directInvoice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = DirectInvoice::find($id);
        if ($invoice) {
            $items = Item::where('invoice_id',$id)->get();
            foreach ($items as $itme) {
                $itme->delete();
            }
        }
        $invoice->delete();

        $newActivity = new Activity;
        $newActivity->t_name = 'direct_invoice';
        $newActivity->t_id = $id;
        $newActivity->author_name = Auth::user()->name;
        $newActivity->author_id = Auth::id();
        $newActivity->massage = 'deleted a Direct Invoice';
        $newActivity->type = 'delete';
        $newActivity->save();
        return redirect(route('direct_invoice'))->with('success','Invoice Deleted successfully');
    }
}
