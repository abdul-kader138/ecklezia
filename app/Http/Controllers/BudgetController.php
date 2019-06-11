<?php

namespace App\Http\Controllers;

use App\Budget;
use App\People;
use App\Expand;
use App\Transaction;
use DB;
use Auth;
use PDF;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allBudget = Budget::get();
        return view('admin.pages.budget.index',['allBudget'=>$allBudget]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allPeople = People::select('id','first_name','last_name','file')->get();
        return view('admin.pages.budget.add',['allPeople'=>$allPeople]);
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
            'holder_id' => 'numeric|required',
            'title' => 'required',
            'total_amount' => 'required|numeric',
            'overspend' => 'required',
            'description' => 'required'
        ]);

        $newBudget = new Budget;
        $newBudget->holder_id = $request->holder_id;
        $newBudget->title = $request->title;
        $newBudget->total_amount = $request->total_amount;
        $newBudget->spent = 0;
        $newBudget->remaining = $request->total_amount;
        $newBudget->overspend = $request->overspend;
        $newBudget->description = $request->description;
        $newBudget->save();
        return redirect(route('budget'))->with('success','Budget added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $findBudgetById = DB::table('budgets')
            ->join('peoples', 'peoples.id', '=', 'budgets.holder_id')
            ->select('budgets.*', 'peoples.first_name','peoples.last_name','peoples.file')
            ->where('budgets.id', $id)->first();

        $transactions = DB::table('bank_transactions')
            ->join('users', 'users.id', '=', 'bank_transactions.author_id')
            ->select('bank_transactions.*', 'users.name')
            ->where('bank_transactions.budget_id', $id)
            ->get();
         $expantions = Expand::where('budget_id',$id)->get();      
        return view('admin.pages.budget.details',[
            'budget'=>$findBudgetById,
            'expantions'=>$expantions,
            'transactions'=>$transactions
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allPeople = People::select('id','first_name','last_name','file')->get();
        $findBudgetById = Budget::find($id);
        return view('admin.pages.budget.edit',['allPeople'=>$allPeople,'budget'=>$findBudgetById]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'holder_id' => 'numeric|required',
            'title' => 'required',
            'total_amount' => 'required|numeric',
            'overspend' => 'required',
            'description' => 'required'
        ]);

        $findBudgetById = Budget::find($id);
        $findBudgetById->holder_id = $request->holder_id;
        $findBudgetById->title = $request->title;
        $totalAmount = $findBudgetById->total_amount;
        if ($totalAmount != $request->total_amount) {
            if ($request->total_amount >= $findBudgetById->spent) {
                $findBudgetById->total_amount = $request->total_amount;
                $findBudgetById->remaining = $findBudgetById->total_amount - $findBudgetById->spent;
            }else{
                return back()->with('warning','Faild to update Budget');
            }
        }
        $findBudgetById->overspend = $request->overspend;
        $findBudgetById->description = $request->description;
        $findBudgetById->save();
        return redirect(route('budget'))->with('success','Budget updateed successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findBudgetById = Budget::find($id);
        $transactions = Transaction::where('transactions.budget_id', $id)->get();  
            foreach ($transactions as $transaction) {
                $transaction->delete();
            }
         $expantions = Expand::where('budget_id',$id)->get();  
         foreach ($expantions as $expantion) {
             $expantion->delete();
         }
         $findBudgetById->delete();
        return redirect(route('budget'))->with('success','Budget deleteed successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function expand($id)
    {
        $findBudgetById = Budget::find($id);
        return view('admin.pages.budget.expand',['budget'=>$findBudgetById]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function add_transaction()
    {
        $allBudget = Budget::select('id','title','remaining')->get();
        return view('admin.pages.budget.transaction',['allBudget'=>$allBudget]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */

    public function save_expand(Request $request ,$id)
    {
        $request->validate([
            'expansion_amount' => 'required|numeric',
            'note' => 'required'
        ]);

        $findBudgetById = Budget::find($id);
        $remainingAmount = $findBudgetById->remaining;
        if ($findBudgetById->overspend == 1) {

            $newExpansion = new Expand; 
            $newExpansion->budget_id = $findBudgetById->id;
            $newExpansion->expansion_amount = $request->expansion_amount;
            $newExpansion->note = $request->note;
            $newExpansion->save();

            $findBudgetById->total_amount = $newExpansion->expansion_amount + $findBudgetById->total_amount;
            $findBudgetById->remaining = $newExpansion->expansion_amount + $findBudgetById->remaining;
            $findBudgetById->save();
        return redirect(route('budget'))->with('success','Expansion added successfully');
        }
        return back()->with('warning','Faild to save Expansion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function save_transaction(Request $request)
    {
        $request->validate([
            'transaction_amount' => 'required|numeric',
            'transaction_title' => 'required',
            'date' => 'required',
            'note' => 'required'
        ]);
        $findBudgetById = Budget::find($request->budget_id);
        $remainingAmount = $findBudgetById->remaining;
        if ($findBudgetById->remaining >= $request->transaction_amount) {

            $newTranscation = new Transaction; 
            $newTranscation->budget_id = $findBudgetById->id;
            $newTranscation->transaction_title = $request->transaction_title;
            $newTranscation->transaction_amount = $request->transaction_amount;
            $newTranscation->date = $request->date;
            $newTranscation->note = $request->note;
            $newTranscation->author_id = Auth::id();
            $newTranscation->save();

            $findBudgetById->remaining = $findBudgetById->remaining - $newTranscation->transaction_amount;
            $findBudgetById->spent = $findBudgetById->spent + $newTranscation->transaction_amount;
            $findBudgetById->save();
        return redirect(route('budget'))->with('success','Transaction added successfully');
        }
        return back()->with('warning','Faild to make Transaction');
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function pdf($id)
    {
        $findBudgetById = DB::table('budgets')
            ->join('peoples', 'peoples.id', '=', 'budgets.holder_id')
            ->select('budgets.*', 'peoples.first_name','peoples.last_name','peoples.file')
            ->where('budgets.id', $id)
            ->first();
        $transactions = DB::table('transactions')
            ->join('users', 'users.id', '=', 'transactions.author_id')
            ->select('transactions.*', 'users.name')
            ->where('transactions.budget_id', $id)
            ->get();
         $expantions = Expand::where('budget_id',$id)->get();

         $pdf = PDF::loadView('admin.pages.budget.pdf',[
            'budget'=>$findBudgetById,
            'expantions'=>$expantions,
            'transactions'=>$transactions
        ]);
        return $pdf->stream('invoice.pdf');

        /*return view('admin.pages.budget.details',[
            'budget'=>$findBudgetById,
            'expantions'=>$expantions,
            'transactions'=>$transactions
        ]);*/
    }
}
