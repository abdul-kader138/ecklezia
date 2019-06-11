<?php

namespace App\Http\Controllers;
use DB;
use App\BankTransaction;
use App\Account;
use App\Deposit;
use App\Activity;
use Illuminate\Http\Request;
use Auth;

class BankTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allAccounts = DB::table('accounts')
            ->join('peoples', 'peoples.id', '=', 'accounts.holder_id')
            ->select('accounts.*', 'peoples.first_name','peoples.last_name')->get();

        $allDeposit = DB::table('deposits')
            ->join('accounts', 'accounts.id', '=', 'deposits.account_id')
            ->select('deposits.*', 'accounts.account_name')->get();

        $allTransaction = DB::table('bank_transactions')
            ->join('accounts', 'accounts.id', '=', 'bank_transactions.receiver_id')
            ->select('bank_transactions.*', 'accounts.account_name')->get();
        //$allTransaction = BankTransaction::all();
        //$allDeposit = Deposit::all();

       return view('admin.pages.accounting.income.index',[
        'allAccounts'=>$allAccounts,
        'allTransaction'=>$allTransaction,
        'allDeposit'=>$allDeposit
    ]);
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
            'sender_id' => 'numeric|required',
            'receiver_id' => 'required',
            'transaction_amount' => 'required|numeric|min:1',
            'method' => 'required',
            'ref_no' => 'required|numeric',
            'date' => 'required'
        ]);
        $transactionAmount = $request->transaction_amount;
        $sender = Account::find($request->sender_id);
        $reciver = Account::find($request->receiver_id);
        if ($sender->id != $reciver->id) {
            if ($sender->initial_balance >= $transactionAmount) {

                $sender->initial_balance = $sender->initial_balance - $request->transaction_amount;
                $sender->save();

                $reciver->initial_balance = $reciver->initial_balance + $request->transaction_amount;
                $reciver->save();

                $newTransaction = new BankTransaction;
                $newTransaction->sender_id = $request->sender_id;
                $newTransaction->receiver_id = $request->receiver_id;
                $newTransaction->transaction_amount = $request->transaction_amount;
                $newTransaction->method = $request->method;
                $newTransaction->ref_no = $request->ref_no;
                $newTransaction->date = $request->date;
                $newTransaction->description = $request->description;
                $newTransaction->save();

        $newActivity = new Activity;
        $newActivity->t_name = 'income';
        $newActivity->t_id = $newTransaction->id;
        $newActivity->author_name = Auth::user()->name;
        $newActivity->author_id = Auth::id();
        $newActivity->massage = 'made new Transaction';
        $newActivity->type = 'add';
        $newActivity->save();
                return redirect(route('income'))->with('success','successfull Transaction');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BankTransaction  $bankTransaction
     * @return \Illuminate\Http\Response
     */
    public function show(BankTransaction $bankTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BankTransaction  $bankTransaction
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $findTransaction = BankTransaction::find($id);

       $allAccounts = DB::table('accounts')
            ->join('peoples', 'peoples.id', '=', 'accounts.holder_id')
            ->select('accounts.*', 'peoples.first_name','peoples.last_name')->get();


        return view('admin.pages.accounting.income.edit-transaction',[
            'allAccounts'=>$allAccounts,
            'transaction' => $findTransaction
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BankTransaction  $bankTransaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'sender_id' => 'numeric|required',
            'receiver_id' => 'required',
            'transaction_amount' => 'required|numeric|min:1',
            'method' => 'required',
            'ref_no' => 'required|numeric',
            'date' => 'required'
        ]);
        $findTransaction = BankTransaction::find($id);
        $sender = Account::find($findTransaction->sender_id);
        $reciver = Account::find($findTransaction->receiver_id);
        $newSander = Account::find($request->sender_id);
        $newReciveer = Account::find($request->receiver_id);

        if ($sender->id == $newSander->id) {
            $sender->initial_balance = $sender->initial_balance + $findTransaction->transaction_amount;
            $sender->initial_balance = $sender->initial_balance - $request->transaction_amount;
            $sender->save();
        }else{
            $sender->initial_balance = $sender->initial_balance + $findTransaction->transaction_amount;
            $sender->save();

            $newSander->initial_balance = $newSander->initial_balance - $request->transaction_amount;
            $newSander->save();
        }

        if ($reciver->id == $newReciveer->id) {
            $reciver->initial_balance = $reciver->initial_balance - $findTransaction->transaction_amount;
            $reciver->initial_balance = $reciver->initial_balance + $request->transaction_amount;
            $reciver->save();
        }else{
            $reciver->initial_balance = $reciver->initial_balance - $findTransaction->transaction_amount;
            $reciver->save(); 
            $newReciveer->initial_balance = $newReciveer->initial_balance + $request->transaction_amount;
            $newReciveer->save();            
        }
            $findTransaction->sender_id = $request->sender_id;
            $findTransaction->receiver_id = $request->receiver_id;
            $findTransaction->transaction_amount = $request->transaction_amount;
            $findTransaction->method = $request->method;
            $findTransaction->ref_no = $request->ref_no;
            $findTransaction->date = $request->date;
            $findTransaction->description = $request->description;
            $findTransaction->save();

            $newActivity = new Activity;
            $newActivity->t_name = 'income';
            $newActivity->t_id = $findTransaction->id;
            $newActivity->author_name = Auth::user()->name;
            $newActivity->author_id = Auth::id();
            $newActivity->massage = 'edited a Transaction';
            $newActivity->type = 'edit';
            $newActivity->save();
            return redirect(route('income'))->with('success','Transaction updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BankTransaction  $bankTransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findTransaction = BankTransaction::find($id);
        $findTransaction->delete();
        

        $newActivity = new  Activity;
        $newActivity->t_name = 'income';
        $newActivity->t_id = $id;
        $newActivity->author_name = Auth::user()->name;
        $newActivity->author_id = Auth::id();
        $newActivity->massage = 'deleted a Transaction';
        $newActivity->type = 'edit';
        $newActivity->save();
    }
}
