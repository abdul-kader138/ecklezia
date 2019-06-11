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
    <form action="{{ url('/admin/accounting/get-report/') }}" method="GET">
    <form action="{{ url('/admin/accounting/get-report/') }}" method="GET" name="findReport">
    <div class="row">
                <div class="form-group col-xl-3">
                    <label>Report For</label>
                    <select class="form-control" name="report_for" id="report_for" required>
                        <option value="activitys">Activity</option>
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
                    <input type="text" class="form-control" id="start_date"  name="start_date" required>
                </div>
                 <div class="form-group col-xl-3">
                    <label>End Date</label>
                    <input type="text" class="form-control" id="end_date" name="end_date" required>
                </div>
                 <div class="form-group col-xl-2">
                    <input type="submit" value="Search" class="form-control btn btn-gradient-04 pull-right" style="margin-top: 23px;">
                </div>
    </div>
    </form>
    </form>
    <!-- End Page Header -->
    <!-- End Row -->
<div class="row">
    <div class="col-xl-12">
        <!-- Start Sorting -->
        <div class="widget has-shadow">

            <div class="widget-header bordered d-flex align-items-center flex-space-between">
                    <div class="widget-title">
                        <h4>Show ing result for  <b>{{ $for }}</b> From <b>{{ date('m-d-y', strtotime($from)) }}</b> To <b>{{ date('m-d-y', strtotime($to)) }}</b></h4>
                    </div>
                </div>

                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Account Name</th>
                                    <th>Account No</th>
                                    <th>Branch Code</th>
                                    <th>Balance</th>
                                    <th>Bank Branch</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $sl = 1; ?>
                            @foreach($allAccounts as $account)
                                <tr>
                                    <td>{{ $sl++ }}</td>
                                    <td>{{ $account->account_name }}</td>
                                    <td>{{ $account->account_number }}</td>
                                    <td>{{ $account->branch_code }}</td>
                                    <td>${{ $account->initial_balance }}</td>
                                    <td>{{ $account->bank_branch }}</td>
                                    
                                    <td class="td-actions">

                                        <a href="{{ url('/admin/accounting/edit-account/'.$account->id) }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/accounting/delete/'.$account->id) }}"><i class="la la-trash-o delete"></i></a>

                                    </td>
                                </tr>
                            @endforeach                                
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
  function report(){
    //alert("hi");
    var report_for=$("#report_for").val();
    var start_date =$("#start_date").val();
    var end_date =$("#end_date").val();
    var type =$("#type").val();
     $.ajax({
          type:'get',
          url  : "{{URL::to('/reports')}}",
          data:{'report_for':report_for,'type':type}, 
         success:function(response, allAccount){
            alert(response);
            alert(allAccount)
            *$.each(response.allAccount, function () {
                
            }
           if (response.type == "accounts") {
            
          } else{  }          
        }, 
    error:function(response){ alert("hmm not its error"); }
    });
    }
</script>
@endpush

