<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\Account;
use App\Activity;
use Illuminate\Http\Request;
use DB;
use Image;
use Carbon\Carbon;
use Auth;

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'account_id' => 'required|required',
            'payer' => 'required',
            'deposit_amount' => 'required|required|min:1',
            'category' => 'required',
            'method' => 'required',
            'ref_no' => 'required|required',
            'date' => 'required'
        ]);

        $newDeposit = new Deposit;
        $newDeposit->account_id = $request->account_id;
        $newDeposit->payer = $request->payer;
        $newDeposit->deposit_amount = $request->deposit_amount;
        $newDeposit->category = $request->category;
        $newDeposit->method = $request->method;
        $newDeposit->ref_no = $request->ref_no;
        $newDeposit->date = $request->date;
        if($request->has('file')){
            $path = 'uploads/images/files/';
            $newDeposit->file = 'deposit'.time().'.'.$request->file->getClientOriginalExtension();
            Image::make($request->file)->save($path.$newDeposit->file);
        }
        $newDeposit->description = $request->description;
        $newDeposit->save();

        $sender = Account::find($newDeposit->account_id);
        $sender->initial_balance = $sender->initial_balance + $newDeposit->deposit_amount;
        $sender->save();

        $newActivity = new Activity;
        $newActivity->t_name = 'income';
        $newActivity->t_id = $newDeposit->id;
        $newActivity->author_name = Auth::user()->name;
        $newActivity->author_id = Auth::id();
        $newActivity->massage = 'added new Deposit';
        $newActivity->type = 'add';
        $newActivity->save();

        return redirect(route('income'))->with('success','successfull Deposited');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function show(Deposit $deposit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $findDeposit = Deposit::find($id);
       $allAccounts = DB::table('accounts')
            ->join('peoples', 'peoples.id', '=', 'accounts.holder_id')
            ->select('accounts.*', 'peoples.first_name','peoples.last_name')->get();


        return view('admin.pages.accounting.income.edit',[
            'allAccounts'=>$allAccounts,
            'deposit' => $findDeposit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'account_id'=> 'required',
            'payer' => 'required',
            'deposit_amount' => 'required',
            'category' => 'required',
            'deposit_amount' => 'required|numeric|min:1',
            'method' => 'required',
            'ref_no' => 'required',
            'date' => 'required'
        ]);        

        $findDeposit = Deposit::find($id);
        $sender = Account::find($findDeposit->account_id);
        $newSander = Account::find($request->account_id);

        if ($sender->id == $newSander->id) {
            $sender->initial_balance = $sender->initial_balance - $findDeposit->deposit_amount;
            $sender->initial_balance = $sender->initial_balance + $request->deposit_amount;
            $sender->save();
        }else{
            $sender->initial_balance = $sender->initial_balance - $findDeposit->deposit_amount;
            $sender->save();

            $newSander->initial_balance = $newSander->initial_balance + $request->deposit_amount;
            $newSander->save();
        }

        $findDeposit->account_id = $request->account_id;
        $findDeposit->payer = $request->payer;
        $findDeposit->deposit_amount = $request->deposit_amount;
        $findDeposit->category = $request->category;
        $findDeposit->method = $request->method;
        $findDeposit->ref_no = $request->ref_no;
        $findDeposit->date = $request->date;
        if($request->has('file')){
            $path = 'uploads/images/files/';
            unlink($path.$findDeposit->file);
            $newDeposit->file = 'deposit'.time().'.'.$request->file->getClientOriginalExtension();
            Image::make($request->file)->save($path.$findDeposit->file);
        }
        $findDeposit->description = $request->description;
        $findDeposit->save();

        $newActivity = new Activity;
        $newActivity->t_name = 'income';
        $newActivity->t_id = $findDeposit->id;
        $newActivity->author_name = Auth::user()->name;
        $newActivity->author_id = Auth::id();
        $newActivity->massage = 'edited a Deposit';
        $newActivity->type = 'edit';
        $newActivity->save();
        return redirect(route('income'))->with('success','Deposit Updated successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findDeposit = Deposit::find($id);
        $findDeposit->delete();

        $newActivity = new Activity;
        $newActivity->t_name = 'income';
        $newActivity->t_id = $id;
        $newActivity->author_name = Auth::user()->name;
        $newActivity->author_id = Auth::id();
        $newActivity->massage = 'deleted a Deposit';
        $newActivity->type = 'delete';
        $newActivity->save();

        return redirect(route('income'))->with('success','Deposit deleted successfull');
    }
}
