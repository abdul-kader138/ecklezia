<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Account;
use App\DirectInvoice;
use App\CustomerInvoice;
use App\Quote;
use App\Expenditure;
use App\Depreciation;
use App\Deposit;
use App\BankTransaction;
use App\Purchase;
use App\Activity;
use PDF;
use DB;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Activity = Activity::take(40)->orderBy('id','desc')->get();
        return view('admin.pages.accounting.report.index',['Activity'=>$Activity]);
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
    public function show(Request $request)
    {
        $from = Carbon::parse($request->start_date)->startOfDay()->toDateTimeString();
        $to = Carbon::parse($request->end_date )->endOfDay()->toDateTimeString();
        
        if ($request->report_for == "activitys") {
            $Activity = Activity::whereBetween('created_at', [$from, $to])->get();
            return view('admin.pages.accounting.report.activitys',[
            'for'=>"Activity",'report_for'=>"activitys",'from'=>$from,'to'=>$to,
            'Activity'=>$Activity
        ]);
        }
        if ($request->report_for == "accounts") {
            $allAccounts = Account::whereBetween('created_at', [$from, $to])->get();
            return view('admin.pages.accounting.report.accounts',[
            'for'=>"Account",'from'=>$from,'to'=>$to,
            'allAccounts'=>$allAccounts
        ]);
        }

        if ($request->report_for == "direct_invoices") {
            $allInvoice = DirectInvoice::whereBetween('created_at', [$from, $to])->get();
            return view('admin.pages.accounting.report.direct_invoices',[
                'for'=>"Direct Invoice",'from'=>$from,'to'=>$to,
                'allInvoice'=>$allInvoice
            ]);
        }

        if ($request->report_for == "customer_invoices") {
            $allInvoice = CustomerInvoice::whereBetween('created_at', [$from, $to])->get();
            return view('admin.pages.accounting.report.direct_invoices',[
                'for'=>"Customer Invoice",'from'=>$from,'to'=>$to,
                'allInvoice'=>$allInvoice
            ]);
        }
        if ($request->report_for == "quotes") {
            $quotes = Quote::whereBetween('created_at', [$from, $to])->get();
            return view('admin.pages.accounting.report.quotes',['for'=>"Quote",'from'=>$from,'to'=>$to,'quotes'=>$quotes]);
        }
        if ($request->report_for == "purchases") {
            $allPurchase = Purchase::whereBetween('created_at', [$from, $to])->get();
            return view('admin.pages.accounting.report.purchases',[
                'for'=>"Purchase",'from'=>$from,'to'=>$to,
                'allPurchase'=>$allPurchase
            ]);
        }
        if ($request->report_for == "expenditures") {
            $allExpenditure = Expenditure::whereBetween('created_at', [$from, $to])->get();
            return view('admin.pages.accounting.report.expenditures',[
                'for'=>"Expenditure",'from'=>$from,'to'=>$to,
                'allExpenditure'=>$allExpenditure
            ]);
        }
        if ($request->report_for == "depreciations") {
            $depreciations = Depreciation::whereBetween('created_at', [$from, $to])->get();
            return view('admin.pages.accounting.report.depreciations',[
                'for'=>"Depreciation",'from'=>$from,'to'=>$to,
                'depreciations'=>$depreciations
            ]);
        }
        if ($request->report_for == "deposits") {
            $allDeposit = Deposit::whereBetween('created_at', [$from, $to])->get();
            return view('admin.pages.accounting.report.deposits',[
                'for'=>"Deposit",'from'=>$from,'to'=>$to,'from'=>$from,'to'=>$to,
                'allDeposit'=>$allDeposit
            ]);
        }
        if ($request->report_for == "bank_transactions") {
            $allTransaction = BankTransaction::whereBetween('created_at', [$from, $to])->get();
            return view('admin.pages.accounting.report.bank_transactions',[
                'for'=>"accounts",'from'=>$from,'to'=>$to,
                'allTransaction'=>$allTransaction
            ]);
        }
        if ($request->report_for == "select") {
            return back()->with('warning','Select Everything for Report');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_ajax(Request $request)
    {
        $from = Carbon::parse($request->start_date)->startOfDay()->toDateTimeString();
        $type = $request->report_for;
        $to = Carbon::parse($request->end_date )->endOfDay()->toDateTimeString();
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        if ($type == "activitys") {
            $result = Activity::whereBetween('created_at', [$from, $to])->get();            
        return response()->json(['type'=>"activitys",'for'=>"Activity",'start_date'=>$start_date,'end_date'=>$end_date,'result'=>$result]);
        }
        if ($type == "accounts") {
            $result = Account::whereBetween('created_at', [$from, $to])->get();
            return response()->json(['type'=>"accounts",'for'=>"Account",'start_date'=>$start_date,'end_date'=>$end_date,'result'=>$result]);
        }

        if ($type == "direct_invoices") {
            $result = DirectInvoice::whereBetween('created_at', [$from, $to])->get();

            return response()->json(['type'=>"direct_invoices",'for'=>"Direct Invoice",'start_date'=>$start_date,'end_date'=>$end_date,'result'=>$result]);
        }

        if ($type == "customer_invoices") {
            $result = CustomerInvoice::whereBetween('created_at', [$from, $to])->get();
            return response()->json(['type'=>"customer_invoices",'for'=>"Customer Invoice",'start_date'=>$start_date,'end_date'=>$end_date,'result'=>$result]);
        }
        if ($type == "quotes") {
            $result = Quote::whereBetween('created_at', [$from, $to])->get();
            return response()->json(['type'=>"quotes",'for'=>"Quote",'start_date'=>$start_date,'end_date'=>$end_date,'result'=>$result]);
        }
        if ($type == "purchases") {
            $result = Purchase::whereBetween('created_at', [$from, $to])->get();
            
            return response()->json(['type'=>"purchases",'for'=>"Purchase",'start_date'=>$start_date,'end_date'=>$end_date,'result'=>$result]);
        }
        if ($type == "expenditures") {
            $result = Expenditure::whereBetween('created_at', [$from, $to])->get();
           return response()->json(['type'=>"expenditures",'for'=>"Expenditure",'start_date'=>$start_date,'end_date'=>$end_date,'result'=>$result]);
        }
        if ($type == "depreciations") {
            $result = Depreciation::whereBetween('created_at', [$from, $to])->get();            
           return response()->json(['type'=>"depreciations",'for'=>"Depreciation",'start_date'=>$start_date,'end_date'=>$end_date,'result'=>$result]);
        }
        if ($type == "deposits") {
            $allDeposit = DB::table('deposits')
            ->join('accounts', 'accounts.id', '=', 'deposits.account_id')
            ->select('deposits.*', 'accounts.account_name')->get();

            $result = $allDeposit->whereBetween('created_at', [$from, $to]);
            return response()->json(['type'=>"deposits",'for'=>"Deposit",'start_date'=>$start_date,'end_date'=>$end_date,'result'=>$result]);
        }
        if ($type == "bank_transactions") {

            $allTransaction = DB::table('bank_transactions')
            ->join('accounts', 'accounts.id', '=', 'bank_transactions.receiver_id')
            ->select('bank_transactions.*', 'accounts.account_name')->get();

            $result = $allTransaction->whereBetween('created_at', [$from, $to]);
            return response()->json(['type'=>"bank_transactions",'for'=>"Bank Transaction",'start_date'=>$start_date,'end_date'=>$end_date,'result'=>$result]);
        }
        if ($type == "select") {
            return back()->with('warning','Select Everything for Report');
        }
        
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function report_download(Request $request)
    {
        $from = Carbon::parse($request->start_date)->startOfDay()->toDateTimeString();
        $to = Carbon::parse($request->end_date )->endOfDay()->toDateTimeString();

        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $type = $request->for;
        //return $request;

        if ($type == "activitys") {
        $result = Activity::whereBetween('created_at', [$from, $to])->get();
        $for= "Activity";

        }
        if ($type == "accounts") {
            $result = Account::whereBetween('created_at', [$from, $to])->get();
        $for= "Account";
        }

        if ($type == "direct_invoices") {
            $result = DirectInvoice::whereBetween('created_at', [$from, $to])->get();
        $for= "DirectInvoice";
        }

        if ($type == "customer_invoices") {
            $result = CustomerInvoice::whereBetween('created_at', [$from, $to])->get();
        $for= "Customer Invoice";
        }
        if ($type == "quotes") {
            $result = Quote::whereBetween('created_at', [$from, $to])->get();
        $for= "Quote";
        }
        if ($type == "purchases") {
            $result = Purchase::whereBetween('created_at', [$from, $to])->get();
            $for= "Purchase";
        }
        if ($type == "expenditures") {
            $result = Expenditure::whereBetween('created_at', [$from, $to])->get();
        $for= "Expenditure";
        }
        if ($type == "depreciations") {
            $result = Depreciation::whereBetween('created_at', [$from, $to])->get();
        $for= "Depreciation";
        }
        if ($type == "deposits") {            
            $allDeposit = DB::table('deposits')
            ->join('accounts', 'accounts.id', '=', 'deposits.account_id')
            ->select('deposits.*', 'accounts.account_name')->get();

            $result = $allDeposit->whereBetween('created_at', [$from, $to]);
            $for= "Deposit";
        }
        if ($type == "bank_transactions") {
            $allTransaction = DB::table('bank_transactions')
            ->join('accounts', 'accounts.id', '=', 'bank_transactions.receiver_id')
            ->select('bank_transactions.*', 'accounts.account_name')->get();
            $result = $allTransaction->whereBetween('created_at', [$from, $to]);
            $for= "Bank Transaction";
        }
            $pdf = PDF::loadView('admin.pages.accounting.pdf.'.$type,['type'=>$type,'for'=>$for,'from'=>$from,'to'=>$to,'result'=>$result]);
            return $pdf->stream('roport_of'.$from.'.pdf');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sales_report()
    {
        $directInvoice = DirectInvoice::all();
        $customerInvoice = CustomerInvoice::all();
        return view('admin.pages.accounting.sales.index',['directInvoice'=>$directInvoice,'customerInvoice'=>$customerInvoice]);
    }
}
