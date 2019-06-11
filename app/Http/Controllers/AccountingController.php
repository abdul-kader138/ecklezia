<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BankTransaction;
use App\Deposit;
use App\Account;
use App\Purchase;
use App\Depreciation;
use App\CustomerInvoice;
use App\DirectInvoice;
use App\Budget;
use App\Item;
use App\Quote;
use App\Expenditure;
use App\Activity;
use Carbon\Carbon;
use DB;
use PDF;

class AccountingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allAccount = Account::all();
        $bankBalance = 0;
        foreach ($allAccount as $account) {
            $bankBalance = $bankBalance+$account->initial_balance;
        }
        $totalSales = 0;
        $allItem = Item::all();
        foreach ($allItem as $itme) {
            $totalSales = $totalSales + $itme->sub_total;
        }
        $totalExpenses = 0;
        $allPurchase = Purchase::all();
        foreach ($allPurchase as $purchase) {
            $totalExpenses= $totalExpenses + $purchase->total_amount;
        }
        $allExpenditure = Expenditure::all();
            foreach ($allExpenditure as $expenditure) {
            $totalExpenses = $totalExpenses + $expenditure->total_amount;
        }
        $totalBudget = 0;
        $allBudget = Budget::all();
        $firstBudgetDate = $allBudget->first()->created_at;
        $lastBudgetDate = $allBudget->last()->updated_at;
        $months_diff = $firstBudgetDate->diffInMonths($lastBudgetDate);
        foreach ($allBudget as $budget) {
         $totalBudget = $totalBudget + $budget->total_amount;
        }
        $mounthlyBudget = $totalBudget/$months_diff;
        $lastBudgetDate2 = $lastBudgetDate->copy()->subMonth();
        $lastBudgetDate3 = $lastBudgetDate->copy()->subMonth();
        $Activity = Activity::take(40)->orderBy('id','desc')->get();

        $Deposits = DB::table('deposits')
            ->join('accounts', 'accounts.id', '=', 'deposits.account_id')
            ->select('deposits.*', 'accounts.account_name')->take(8)->get();

        $Transactions = DB::table('bank_transactions')
            ->join('accounts', 'accounts.id', '=', 'bank_transactions.receiver_id')
            ->select('bank_transactions.*', 'accounts.account_name')->take(8)->get();
         $allBudget = Budget::take(8)->get();
        return view('admin.pages.accounting.dashboard.index',['bankBalance'=>$bankBalance,'totalExpenses'=>$totalExpenses,'totalSales'=>$totalSales,'mounthlyBudget'=>$mounthlyBudget,'Activity'=>$Activity,'Deposits'=>$Deposits,'Transactions'=>$Transactions,'allBudget'=>$allBudget]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function downlod_budget($id)
    {
        $now = Carbon::now();
        $time = $now->subMonth($id);
        $from = $time->startOfMonth()->toDateTimeString();
        $to = $time->endOfMonth()->toDateTimeString();
                 //return [$from,$to];
        //$allTransaction = BankTransaction::whereBetween('created_at', [$from, $to])->get();

        $allDeposit = DB::table('deposits')
            ->join('accounts', 'accounts.id', '=', 'deposits.account_id')
            ->select('deposits.*', 'accounts.account_name')->get();

        $allTransaction = DB::table('bank_transactions')
            ->join('accounts', 'accounts.id', '=', 'bank_transactions.receiver_id')
            ->select('bank_transactions.*', 'accounts.account_name')
            ->get();
        $transactions = $allTransaction->whereBetween('created_at', [$from, $to]);
        $deposits = $allDeposit->whereBetween('created_at', [$from, $to]);

        $pdf = PDF::loadView('admin.pages.accounting.dashboard.pdf',[
            'deposits'=>$deposits,
            'transactions'=>$transactions,
            'from'=>$from,
            'to'=>$to]
        );
        return $pdf->stream('BankStateMent_'.$from.'.pdf');

        return $deposits;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
