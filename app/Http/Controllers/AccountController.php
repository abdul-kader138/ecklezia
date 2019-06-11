<?php

namespace App\Http\Controllers;

use App\Account;
use App\People;
use App\Activity;
use Illuminate\Http\Request;
use DB;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPeople = People::select('id','first_name','last_name','file')->get();
        $allAccounts = DB::table('accounts')
            ->join('peoples', 'peoples.id', '=', 'accounts.holder_id')
            ->select('accounts.*', 'peoples.first_name','peoples.last_name')->get();

        return view('admin.pages.accounting.banking.index',[
            'allPeople'=>$allPeople,
            'allAccounts'=>$allAccounts
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
            'holder_id' => 'numeric|required',
            'account_name' => 'required',
            'initial_balance' => 'required|numeric',
            'account_number' 
            => 'required|digits_between:6,12|unique:accounts,account_number',
            'branch_code' => 'required|digits_between:4,12',
            'bank_branch' => 'required'
        ]);

        $newAccount = new Account;
        $newAccount->holder_id = $request->holder_id;
        $newAccount->account_name = $request->account_name;
        $newAccount->initial_balance = $request->initial_balance;
        $newAccount->account_number = $request->account_number;
        $newAccount->branch_code = $request->branch_code;
        $newAccount->bank_branch = $request->bank_branch;
        $newAccount->save();

        $newActivity = new Activity;
        $newActivity->t_name = 'banking';
        $newActivity->t_id = $newAccount->id;
        $newActivity->author_name = Auth::user()->name;
        $newActivity->author_id = Auth::id();
        $newActivity->massage = 'added new Account';
        $newActivity->type = 'add';
        $newActivity->save();

        return redirect(route('banking'))->with('success','Account added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $allPeople = People::select('id','first_name','last_name','file')->get();
        $allAccounts = DB::table('accounts')
            ->join('peoples', 'peoples.id', '=', 'accounts.holder_id')
            ->select('accounts.*', 'peoples.first_name','peoples.last_name')->get();

        return view('admin.pages.accounting.banking.balance_index',[
            'allPeople'=>$allPeople,
            'allAccounts'=>$allAccounts
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accountById = Account::find($id);
        $allPeople = People::select('id','first_name','last_name','file')->get();
        return view('admin.pages.accounting.banking.account_edit',[
            'account'=>$accountById,
            'allPeople'=>$allPeople
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'holder_id' => 'numeric|required',
            'account_name' => 'required',
            'initial_balance' => 'required|numeric',
            'account_number' => 'required',
            'branch_code' => 'required',
            'bank_branch' => 'required'
        ]);

        $accountById = Account::find($id);
        $accountById->holder_id = $request->holder_id;
        $accountById->account_name = $request->account_name;
        $accountById->initial_balance = $request->initial_balance;
        $accountById->account_number = $request->account_number;
        $accountById->branch_code = $request->branch_code;
        $accountById->bank_branch = $request->bank_branch;
        $accountById->save();

        $newActivity = new Activity;
        $newActivity->t_name = 'banking';
        $newActivity->t_id = $accountById->id;
        $newActivity->author_name = Auth::user()->name;
        $newActivity->author_id = Auth::id();
        $newActivity->massage = 'edited a Account';
        $newActivity->type = 'edit';
        $newActivity->save();
        return redirect(route('banking'))->with('success','Account updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accountById = Account::find($id);
        $accountById->delete();

        $newActivity = new Activity;
        $newActivity->t_name = 'banking';
        $newActivity->t_id = $id;
        $newActivity->author_name = Auth::user()->name;
        $newActivity->author_id = Auth::id();
        $newActivity->massage = 'deleted a Account';
        $newActivity->type = 'delete';
        $newActivity->save();

        return redirect(route('banking'))->with('success','Account deleted successfully');
    }
}
