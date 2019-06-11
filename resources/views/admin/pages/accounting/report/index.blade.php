@extends('admin.layout.account_admin')

@section('content')
<style>
.daterangepicker {
    z-index: 1200 !important;
}
</style>
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Report</h2>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Begin Page Header-->
    <form action="{{ url('/admin/accounting/get-report/') }}" method="GET" name="findReport">
    <div class="row">
                <div class="form-group col-xl-3">
                    <label>Report For</label>
                    <select class="form-control" name="report_for" id="report_for" onchange="report()" required>
                       <!--  <option value="activitys">Activity</option> -->
                        <option value="quotes" >Quote</option>
                        <option value="direct_invoices">Direct invoice</option>
                        <option value="customer_invoices">Customer invoice</option>
                        <option value="purchases">Purchase</option>
                        <option value="expenditures">Expenditure</option>
                        <option value="depreciations">Depreciation</option>
                        <option value="deposits">Deposit</option>
                        <option value="bank_transactions">Bank_transaction</option>
                        <option value="accounts">Account</option>
                    </select>
                </div>
                  <div class="form-group col-xl-3">
                    <label>Start Date</label>
                    <input type="text" class="form-control" id="start_date" onchange="report()"  name="start_date" required>
                </div>
                 <div class="form-group col-xl-3">
                    <label>End Date</label>
                    <input type="text" class="form-control" id="end_date" onchange="report()" name="end_date" required>
                </div>
                 <div class="form-group col-xl-2">
                    <a href="#" class="form-control btn btn-gradient-04 pull-right" style="margin-top: 23px;" onclick="report()">Search</a>
                    <!-- <input type="submit" value="Search" class="form-control btn btn-gradient-04 pull-right" style="margin-top: 23px;"> -->
                </div>
    </div>
    </form>

    <!-- End Page Header -->
    <!-- End Row -->
    <div class="row">
        <div class="col-xl-12">
            <!-- Start Sorting -->
            <div class="widget has-shadow">

               <div class="widget-header bordered d-flex align-items-center flex-space-between">
                    <div class="widget-title">
                        <h4 id="h4">Search something For report</h4>
                    </div>
                    <div id="pdf">
                    </div>

                </div>

                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table table-hover mb-0">
                            <thead id="thead">
                            </thead>
                            <tbody id="tbody">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Sorting -->
        </div>
    </div>
    <!-- End Row -->
    <!-- End Row -->
    <!-- End Row -->
</div>
<!-- End Container -->
<!-- Begin Centered Modal -->
</div>
</div>
<!-- End Centered Modal -->

<!-- Begin Centered Modal -->

<!-- End Centered Modal -->
@endsection

@push('alljs')
<script src="{{ asset('church/vendors/js/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/datatables/vfs_fonts.js') }}"></script>

<script>
    (function ($) {

        'use strict';

        $(function () {
            $('#sorting-table').DataTable({
                "lengthMenu": [
                [10, 15, 20, -1],
                [10, 15, 20, "All"]
                ],
                "order": [
                [3, "desc"]
                ]
            });
        });

    })(jQuery);
</script>
<script src="{{ asset('js/jquery.min.js') }}"></script> 
<script type="text/javascript">
  function report(){
    var report_for=$("#report_for").val();
    var start_date =$("#start_date").val();
    var end_date =$("#end_date").val();
   // var type =$("#type").val();
   if (report_for == 'activitys') {
     $.ajax({
          type:'get',
          url  : "{{URL::to('/reports')}}",
          data:{'report_for':report_for,'start_date':start_date,'end_date':end_date}, 
         success:function(data){
              $('#thead').empty();
              $('#tbody').empty();
              $('#h4').empty();
              $('#pdf').empty();
              $('#pdf').append('<ul class="breadcrumb"><li><form action="{{ url('/downloadRreport') }}" method="GET"><input type="hidden" name="for" value="'+data.type+'"><input type="hidden" name="start_date" value="'+data.start_date+'"><input type="hidden" name="end_date" value="'+data.end_date+'"><input type="submit" value="Download PDF" href="javascript:viod(0);" data-toggle="modal" data-target="#modal-large" class="btn btn-info btn-square mr-1 mb-2"></form></li></ul>');

              $('#h4').append('Show ing result for<b>'+data.for+'</b> From <b>'+data.start_date+'</b> To <b>'+data.end_date+'</b>');

              $('#thead').append('<tr><th>#</th><th>Date</th><th>Account</th><th>Amount</th><th>Cathegry</th><th>Deposit Ref.</th><th>Action</th></tr>');

              $.each(data.result, function(index, regenciesObj){               
              $('#tbody').append('<tr><td><span class="text-primary">'+regenciesObj.id+'</span></td><td>'+regenciesObj.date+'</td><td>'+regenciesObj.account_name+'</td><td>'+regenciesObj.transaction_amount+'</td><td>'+regenciesObj.method+'</td><td>'+regenciesObj.ref_no+'</td><td class="td-actions"><a href="{{ url('/admin/accounting/transaction/edit/') }}"/'+regenciesObj.id+'><i class="la la-edit edit"></i></a><a href="{{ url('/admin/accounting/transaction/delete') }}/'+regenciesObj.id+'"><i class="la la-trash-o delete"></i></a></td></tr>');
              })
            }, 
    error:function(response){ alert("hmm not its error"); }
    });
}
   if (report_for == 'quotes') {
     $.ajax({
          type:'get',
          url  : "{{URL::to('/reports')}}",
          data:{'report_for':report_for,'start_date':start_date,'end_date':end_date}, 
         success:function(data){
              $('#thead').empty();
              $('#tbody').empty();
              $('#h4').empty();
              $('#pdf').empty();
              $('#pdf').append('<ul class="breadcrumb"><li><form action="{{ url('/downloadRreport') }}" method="GET"><input type="hidden" name="for" value="'+data.type+'"><input type="hidden" name="start_date" value="'+data.start_date+'"><input type="hidden" name="end_date" value="'+data.end_date+'"><input type="submit" value="Download PDF" href="javascript:viod(0);" data-toggle="modal" data-target="#modal-large" class="btn btn-info btn-square mr-1 mb-2"></form></li></ul>');

              $('#h4').append('Show ing result for<b>'+data.for+'</b> From <b>'+data.start_date+'</b> To <b>'+data.end_date+'</b>');

              $('#thead').append('<tr><th>Quote#</th><th>Customer</th><th>Total</th><th>Invoice Date</th><th>Due Date</th><th>Status</th><th>Action</th></tr>');

              $.each(data.result, function(index, regenciesObj){               
              $('#tbody').append('<tr><td>#'+regenciesObj.quote_number+'</td><td>'+regenciesObj.name+'</td><td>'+regenciesObj.grand_total+'</td><td>'+regenciesObj.quote_date+'</td><td>'+regenciesObj.due_date+'</td><td>'+regenciesObj.status +'</td><td class="td-actions"><a href="{{ url('/admin/accounting/quotes/edit') }}/'+regenciesObj.id+'"><i class="la la-edit edit"></i></a><a href="{{ url('/admin/accounting/quotes/delete') }}/'+regenciesObj.id+'"><i class="la la-trash-o delete"></i></a></td></tr>');
              })
            }, 
    error:function(response){ alert("hmm not its error"); }
    });
}
   if (report_for == 'direct_invoices') {
     $.ajax({
          type:'get',
          url  : "{{URL::to('/reports')}}",
          data:{'report_for':report_for,'start_date':start_date,'end_date':end_date}, 
         success:function(data){
              $('#thead').empty();
              $('#tbody').empty();
              $('#h4').empty();
              $('#pdf').empty();
              $('#pdf').append('<ul class="breadcrumb"><li><form action="{{ url('/downloadRreport') }}" method="GET"><input type="hidden" name="for" value="'+data.type+'"><input type="hidden" name="start_date" value="'+data.start_date+'"><input type="hidden" name="end_date" value="'+data.end_date+'"><input type="submit" value="Download PDF" href="javascript:viod(0);" data-toggle="modal" data-target="#modal-large" class="btn btn-info btn-square mr-1 mb-2"></form></li></ul>');

              $('#h4').append('Show ing result for<b>'+data.for+'</b> From <b>'+data.start_date+'</b> To <b>'+data.end_date+'</b>');

              $('#thead').append('<th>Invoice No</th><th>Customer</th><th>Total</th><th>Invoice Date</th><th>Due Date</th><th>Status</th><th>Action</th>');

              $.each(data.result, function(index, regenciesObj){               
              $('#tbody').append('<tr><td>#'+regenciesObj.invoice_number+'</td><td>'+regenciesObj.customer_name+'</td><td>'+regenciesObj.grand_total+'</td><td>'+regenciesObj.invoice_date+'</td><td>'+regenciesObj.due_date+' </td><td>'+regenciesObj.status+'</td><td class="td-actions"><a href="{{ url('/admin/accounting/customer_invoice/edit') }}/'+regenciesObj.id+'"><i class="la la-edit edit"></i></a><a href="{{ url('/admin/accounting/customer_invoice/delete') }}/'+regenciesObj.id+'"><i class="la la-trash-o delete"></i></a></td></tr>');
              })
            }, 
    error:function(response){ alert("hmm not its error"); }
    });
}
   if (report_for == 'customer_invoices') {
     $.ajax({
          type:'get',
          url  : "{{URL::to('/reports')}}",
          data:{'report_for':report_for,'start_date':start_date,'end_date':end_date}, 
         success:function(data){
              $('#thead').empty();
              $('#tbody').empty();
              $('#h4').empty();
              $('#pdf').empty();
              $('#pdf').append('<ul class="breadcrumb"><li><form action="{{ url('/downloadRreport') }}" method="GET"><input type="hidden" name="for" value="'+data.type+'"><input type="hidden" name="start_date" value="'+data.start_date+'"><input type="hidden" name="end_date" value="'+data.end_date+'"><input type="submit" value="Download PDF" href="javascript:viod(0);" data-toggle="modal" data-target="#modal-large" class="btn btn-info btn-square mr-1 mb-2"></form></li></ul>');

              $('#h4').append('Show ing result for<b>'+data.for+'</b> From <b>'+data.start_date+'</b> To <b>'+data.end_date+'</b>');

              $('#thead').append('<th>Invoice No</th><th>Customer</th><th>Total</th><th>Invoice Date</th><th>Due Date</th><th>Status</th><th>Action</th>');

              $.each(data.result, function(index, regenciesObj){               
              $('#tbody').append('<tr><td>#'+regenciesObj.invoice_number+'</td><td>'+regenciesObj.customer_name+'</td><td>'+regenciesObj.grand_total+'</td><td>'+regenciesObj.invoice_date+'</td><td>'+regenciesObj.due_date+' </td><td>'+regenciesObj.status+'</td><td class="td-actions"><a href="{{ url('/admin/accounting/customer_invoice/edit') }}/'+regenciesObj.id+'"><i class="la la-edit edit"></i></a><a href="{{ url('/admin/accounting/customer_invoice/delete') }}/'+regenciesObj.id+'"><i class="la la-trash-o delete"></i></a></td></tr>');
              })
            }, 
    error:function(response){ alert("hmm not its error"); }
    });
}
   if (report_for == 'purchases') {
     $.ajax({
          type:'get',
          url  : "{{URL::to('/reports')}}",
          data:{'report_for':report_for,'start_date':start_date,'end_date':end_date}, 
         success:function(data){
              $('#thead').empty();
              $('#tbody').empty();
              $('#h4').empty();
              $('#pdf').empty();
              $('#pdf').append('<ul class="breadcrumb"><li><form action="{{ url('/downloadRreport') }}" method="GET"><input type="hidden" name="for" value="'+data.type+'"><input type="hidden" name="start_date" value="'+data.start_date+'"><input type="hidden" name="end_date" value="'+data.end_date+'"><input type="submit" value="Download PDF" href="javascript:viod(0);" data-toggle="modal" data-target="#modal-large" class="btn btn-info btn-square mr-1 mb-2"></form></li></ul>');

              $('#h4').append('Show ing result for<b>'+data.for+'</b> From <b>'+data.start_date+'</b> To <b>'+data.end_date+'</b>');

              $('#thead').append('<tr><th>Category</th><th>Product</th><th>Price</th><th>Quantity</th><th>Total</th><th>Date</th><th>Action</th></tr>');

              $.each(data.result, function(index, regenciesObj){               
              $('#tbody').append('<tr><td>'+regenciesObj.category+'</td><td>'+regenciesObj.product+'</td><td>'+regenciesObj.price+'</td><td>'+regenciesObj.qty+'</td><td>'+regenciesObj.total_amount+'</td><td>'+regenciesObj.date+'}</td><td class="td-actions"><a href="{{ url('/admin/accounting/purchase/edit') }}/'+regenciesObj.id+'"><i class="la la-edit edit"></i></a><a href="{{ url('/admin/accounting/purchase/delete') }}/'+regenciesObj.id+'"><i class="la la-trash-o delete"></i></a></td></tr>');
              })
            }, 
    error:function(response){ alert("hmm not its error"); }
    });
}
   if (report_for == 'expenditures') {
     $.ajax({
          type:'get',
          url  : "{{URL::to('/reports')}}",
          data:{'report_for':report_for,'start_date':start_date,'end_date':end_date}, 
         success:function(data){
              $('#thead').empty();
              $('#tbody').empty();
              $('#h4').empty();
              $('#pdf').empty();
              $('#pdf').append('<ul class="breadcrumb"><li><form action="{{ url('/downloadRreport') }}" method="GET"><input type="hidden" name="for" value="'+data.type+'"><input type="hidden" name="start_date" value="'+data.start_date+'"><input type="hidden" name="end_date" value="'+data.end_date+'"><input type="submit" value="Download PDF" href="javascript:viod(0);" data-toggle="modal" data-target="#modal-large" class="btn btn-info btn-square mr-1 mb-2"></form></li></ul>');

              $('#h4').append('Show ing result for<b>'+data.for+'</b> From <b>'+data.start_date+'</b> To <b>'+data.end_date+'</b>');

              $('#thead').append('<th>ID</th><th>Category</th><th>Product</th><th>Quantity</th><th>Price</th><th>Total Amount</th><th>Date</th><th>Action</th>');

              $.each(data.result, function(index, regenciesObj){               
              $('#tbody').append('<tr><td>'+regenciesObj.id+'</td><td>'+regenciesObj.category+'</td><td>'+regenciesObj.product+'</td><td>'+regenciesObj.qty+'</td><td>'+regenciesObj.price+'</td><td>'+regenciesObj.price*regenciesObj.qty+'</td><td>'+regenciesObj.exp_date+'</td><td class="td-actions"><a href="{{ url('/admin/accounting/expenditure/edit') }}/'+regenciesObj.id+'"><i class="la la-edit edit"></i></a><a href="{{ url('/admin/accounting/expenditure/delete') }}/'+regenciesObj.id+'"><i class="la la-trash-o delete"></i></a></td></tr>');
              })
            }, 
    error:function(response){ alert("hmm not its error"); }
    });
}
   if (report_for == 'depreciations') {
     $.ajax({
          type:'get',
          url  : "{{URL::to('/reports')}}",
          data:{'report_for':report_for,'start_date':start_date,'end_date':end_date}, 
         success:function(data){
              $('#thead').empty();
              $('#tbody').empty();
              $('#h4').empty();
              $('#pdf').empty();
              $('#pdf').append('<ul class="breadcrumb"><li><form action="{{ url('/downloadRreport') }}" method="GET"><input type="hidden" name="for" value="'+data.type+'"><input type="hidden" name="start_date" value="'+data.start_date+'"><input type="hidden" name="end_date" value="'+data.end_date+'"><input type="submit" value="Download PDF" href="javascript:viod(0);" data-toggle="modal" data-target="#modal-large" class="btn btn-info btn-square mr-1 mb-2"></form></li></ul>');

              $('#h4').append('Show ing result for<b>'+data.for+'</b> From <b>'+data.start_date+'</b> To <b>'+data.end_date+'</b>');

              $('#thead').append('<tr><th>Name</th><th>Purchase Year</th><th>Cost</th><th>Lifespan</th><th>Salvage Value</th><th>Action</th></tr>');

              $.each(data.result, function(index, regenciesObj){               
              $('#tbody').append('<tr><td>'+regenciesObj.asset_name+'</td><td>'+regenciesObj.purchase_year+'</td><td>'+regenciesObj.cost+'</td><td>'+regenciesObj.lifespan+'</td><td>'+regenciesObj.salvage_value+'</td><td class="td-actions"><a href="{{ url('/admin/depreciation/edit') }}/'+regenciesObj.id+'"><i class="la la-edit edit"></i></a><a href="{{ url('/admin/depreciation/delete') }}/'+regenciesObj.id+'"><i class="la la-trash-o delete"></i></a></td></tr>');
              })
            }, 
    error:function(response){ alert("hmm not its error"); }
    });
}
   if (report_for == 'deposits') {
     $.ajax({
          type:'get',
          url  : "{{URL::to('/reports')}}",
          data:{'report_for':report_for,'start_date':start_date,'end_date':end_date}, 
         success:function(data){
              $('#thead').empty();
              $('#tbody').empty();
              $('#h4').empty();
              $('#pdf').empty();
              $('#pdf').append('<ul class="breadcrumb"><li><form action="{{ url('/downloadRreport') }}" method="GET"><input type="hidden" name="for" value="'+data.type+'"><input type="hidden" name="start_date" value="'+data.start_date+'"><input type="hidden" name="end_date" value="'+data.end_date+'"><input type="submit" value="Download PDF" href="javascript:viod(0);" data-toggle="modal" data-target="#modal-large" class="btn btn-info btn-square mr-1 mb-2"></form></li></ul>');

              $('#h4').append('Show ing result for<b>'+data.for+'</b> From <b>'+data.start_date+'</b> To <b>'+data.end_date+'</b>');

              $('#thead').append('<tr><th>ID</th><th>Date</th><th>Account</th><th>Amount</th><th>Cathegry</th><th>Deposit Ref.</th><th>Action</th></tr>');

              $.each(data.result, function(index, regenciesObj){               
              $('#tbody').append('<tr><td><span class="text-primary">'+regenciesObj.id+'</span></td><td>'+regenciesObj.date+'</td><td>'+regenciesObj.account_name+'</td><td>'+regenciesObj.deposit_amount+'</td><td>'+regenciesObj.category+'</td><td>'+regenciesObj.ref_no+'</td><td class="td-actions"><a href="{{ url('/admin/accounting/deposit-edit') }}/'+regenciesObj.id+'"><i class="la la-edit edit"></i></a><a href="{{ url('/admin/accounting/deposit/delete') }}/'+regenciesObj.id+'"><i class="la la-trash-o delete"></i></a></td></tr>');
              })
            }, 
    error:function(response){ alert("hmm not its error"); }
    });
}
   if (report_for == 'bank_transactions') {
     $.ajax({
          type:'get',
          url  : "{{URL::to('/reports')}}",
          data:{'report_for':report_for,'start_date':start_date,'end_date':end_date}, 
         success:function(data){
              $('#thead').empty();
              $('#tbody').empty();
              $('#h4').empty();
              $('#pdf').empty();
              $('#pdf').append('<ul class="breadcrumb"><li><form action="{{ url('/downloadRreport') }}" method="GET"><input type="hidden" name="for" value="'+data.type+'"><input type="hidden" name="start_date" value="'+data.start_date+'"><input type="hidden" name="end_date" value="'+data.end_date+'"><input type="submit" value="Download PDF" href="javascript:viod(0);" data-toggle="modal" data-target="#modal-large" class="btn btn-info btn-square mr-1 mb-2"></form></li></ul>');

              $('#h4').append('Show ing result for<b>'+data.for+'</b> From <b>'+data.start_date+'</b> To <b>'+data.end_date+'</b>');

              $('#thead').append('<tr><th>Id</th><th>Date</th><th>Account</th><th>Amount</th><th>Cathegry</th><th>Deposit Ref.</th><th>Action</th></tr>');

              $.each(data.result, function(index, regenciesObj){               
              $('#tbody').append('<tr><td><span class="text-primary">'+regenciesObj.id+'</span></td><td>'+regenciesObj.date+'</td><td>'+regenciesObj.account_name+'</td><td>'+regenciesObj.transaction_amount+'</td><td>'+regenciesObj.method+'</td><td>'+regenciesObj.ref_no+'</td><td class="td-actions"><a href="{{ url('/admin/accounting/transaction/edit') }}/'+regenciesObj.id+'"><i class="la la-edit edit"></i></a><a href="{{ url('/admin/accounting/transaction/delete') }}/'+regenciesObj.id+'"><i class="la la-trash-o delete"></i></a></td></tr>');
              })
            }, 
    error:function(response){ alert("hmm not its error"); }
    });
}
   if (report_for == 'accounts') {
     $.ajax({
          type:'get',
          url  : "{{URL::to('/reports')}}",
          data:{'report_for':report_for,'start_date':start_date,'end_date':end_date}, 
         success:function(data){
              $('#thead').empty();
              $('#tbody').empty();
              $('#h4').empty();
              $('#pdf').empty();
              $('#pdf').append('<ul class="breadcrumb"><li><form action="{{ url('/downloadRreport') }}" method="GET"><input type="hidden" name="for" value="'+data.type+'"><input type="hidden" name="start_date" value="'+data.start_date+'"><input type="hidden" name="end_date" value="'+data.end_date+'"><input type="submit" value="Download PDF" href="javascript:viod(0);" data-toggle="modal" data-target="#modal-large" class="btn btn-info btn-square mr-1 mb-2"></form></li></ul>');

              $('#h4').append('Show ing result for<b>'+data.for+'</b> From <b>'+data.start_date+'</b> To <b>'+data.end_date+'</b>');

              $('#thead').append('<tr><th>#</th><th>Account Name</th><th>Account No</th><th>Branch Code</th><th>Balance</th><th>Bank Branch</th><th>Action</th></tr>');

              $.each(data.result, function(index, regenciesObj){               
              $('#tbody').append('<tr><td>'+regenciesObj.id+'</td><td>'+regenciesObj.account_name+'</td><td>'+regenciesObj.account_number+'</td><td>'+regenciesObj.branch_code+'</td><td>$'+regenciesObj.initial_balance+'</td><td>'+regenciesObj.bank_branch+'</td><td class="td-actions"><a href="{{ url('/admin/accounting/edit-account') }}/'+regenciesObj.id+'"><i class="la la-edit edit"></i></a><a href="{{ url('/admin/accounting/delete') }}/'+regenciesObj.id+'"><i class="la la-trash-o delete"></i></a></td></tr>');
              })
            }, 
    error:function(response){ alert("hmm not its error"); }
    });
}
    }
</script>
@endpush

