<?php

namespace App\Http\Controllers;

use App\Quote;
use App\Item;
use App\Activity;
use Illuminate\Http\Request;
use Auth;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotes = Quote::all();
        return view('admin.pages.accounting.sales.quote.index',['quotes'=>$quotes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.accounting.sales.quote.add');
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
        $newQuote = new Quote;
        $newQuote->quote_number = $request->quote_number;
        $newQuote->name = $request->name;
        $newQuote->quote_date = $request->quote_date;
        $newQuote->due_date = $request->due_date;
        $newQuote->prefix = $request->prefix;
        $newQuote->quote_note = $request->quote_note;
        $newQuote->save();

        for ($idx = 0; $idx < count($request->item); $idx++)
        {
            $newItem = new Item; 
            $newItem->type = 'quotes'; 
            $newItem->invoice_id = $newQuote->id; 
            $newItem->item = $request->item[$idx]; 
            $newItem->tax_type = $request->tax_type[$idx]; 
            $newItem->tax_rate = $request->tax_rate[$idx]; 
            $newItem->qty = $request->qty[$idx]; 
            $newItem->unit_price = $request->unit_price[$idx]; 
            $newItem->sub_total = $request->unit_price[$idx]*$request->qty[$idx];
            $tax= $newItem->sub_total/100;
            $tax= $tax*$request->tax_rate[$idx];
            $newItem->total = $tax + $newItem->sub_total;
            $newItem->save();

            $newQuote->sub = $newQuote->sub + $newItem->total;
            $newQuote->tax_total = $newQuote->tax_total + $newItem->$tax;
            $newItem->save();
        }

        $newQuote->discount_figure = $request->discount_figure;
        $newQuote->discount_type = $request->discount_type;
        if ($newQuote->discount_type == 1) {
            
            $newQuote->discount_amount = $newQuote->discount_figure;
        }else{
            
            $discount = $newQuote->sub/100; 
            $discount = $discount*$newQuote->discount_figure;
            $newQuote->discount_amount = $discount; 
        }
        $newQuote->grand_total = $newQuote->tax_total + $newQuote->sub - $newQuote->discount_amount;
        $newQuote->save();

            $newActivity = new Activity;
            $newActivity->t_name = 'quots';
            $newActivity->t_id = $newQuote->id;
            $newActivity->author_name = Auth::user()->name;
            $newActivity->author_id = Auth::id();
            $newActivity->massage = 'added a Quote';
            $newActivity->type = 'add';
            $newActivity->save();
        return redirect(route('quots'))->with('success','Quote added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quotes = Quote::find($id);
        $items = Item::where('invoice_id',$id)->get();
        return view('admin.pages.accounting.sales.quote.edit',[
            'quote'=>$quotes,
            'items'=>$items
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $findQueat = Quote::find($id);
        $findQueat->quote_number = $request->quote_number;
        $findQueat->name = $request->name;
        $findQueat->quote_date = $request->quote_date;
        $findQueat->due_date = $request->due_date;
        $findQueat->prefix = $request->prefix;
        //$findQueat->sub = $request->sub;
        //$findQueat->tax_total = $request->tax_total;
        //$findQueat->discount_amount = $request->discount_amount;
        //$findQueat->discount_figure = $request->discount_figure;
        //$findQueat->grand_total = $request->grand_total;
        $findQueat->quote_note = $request->quote_note;
        $findQueat->save();
        $items = Item::where('invoice_id',$findQueat->id);
        foreach ($items as $item) { $item->delete(); }

        for ($idx = 0; $idx < count($request->item); $idx++)
        {
            $newItem = new Item; 
            $newItem->type = 'quotes'; 
            $newItem->invoice_id = $findQueat->id; 
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

            $findQueat->sub = $findQueat->sub + $newItem->total;
            $findQueat->tax_findQueat-$findQueat->tax_total + $newItem->$tax;
            $newItem->save();
        }

        $findQueat->discount_figure = $request->discount_figure;
        $findQueat->discount_type = $request->discount_type;
        if ($findQueat->discount_type == 1) {
            
            $findQueat->discount_amount = $findQueat->discount_figure;
        }else{
            
            $discount = $findQueat->sub/100; 
            $discount = $discount*$findQueat->discount_figure;
            $findQueat->discount_amount = $discount; 
        }
        $findQueat->grand_total = $findQueat->tax_total + $findQueat->sub - $findQueat->discount_amount;
        $findQueat->save();

            $newActivity = new Activity;
            $newActivity->t_name = 'quots';
            $newActivity->t_id = $findQueat->id;
            $newActivity->author_name = Auth::user()->name;
            $newActivity->author_id = Auth::id();
            $newActivity->massage = 'edited a Quote';
            $newActivity->type = 'edit';
            $newActivity->save();

        return redirect(route('quots'))->with('success','Quote added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = Quote::find($id);
        if ($invoice) {
            $items = Item::where('invoice_id',$id)->get();
            foreach ($items as $itme) {
                $itme->delete();
            }
        }
        $invoice->delete();

            $newActivity = new Activity;
            $newActivity->t_name = 'quots';
            $newActivity->t_id = $id;
            $newActivity->author_name = Auth::user()->name;
            $newActivity->author_id = Auth::id();
            $newActivity->massage = 'deleted a Quote';
            $newActivity->type = 'delete';
            $newActivity->save();
        return redirect(route('direct_invoice'))->with('success','Quote Deleted successfully');
    }
}
