@extends('admin.layout.account_admin')

@section('content')
<style type="text/css">
.nav-tabs .nav-link.active  {
    background-color: #F9F9F9 !important;
    border-bottom: none !important;
}

.card {
    border:none !important;
}
.card i {
    font-size: 42px;
}

.nav-tabs {
    border-bottom: 0px !important;
}
</style>
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Accounting</h2>
                <div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- End Row -->
    <div class="row">
        <div class="col-xl-12">

            <ul class="nav nav-tabs nav-fill" role="tablist">
                <li class="nav-item">      
                    <a class="nav-link active show" id="just-tab-1" data-toggle="tab" href="#j-tab-1" role="tab" aria-controls="j-tab-1" aria-selected="true">
              <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                      <div class="align-self-center ml-5 mr-5">
                                    <i class="ion-arrow-graph-up-right text-facebook"></i>
                                </div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0 text-uppercase">Income</h6>
                                        <h2 class="m-t-0">${{ $totalSales }}</h2></div>
                                </div>
                            </div>
                        </div>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="just-tab-2" data-toggle="tab" href="#j-tab-2" role="tab" aria-controls="j-tab-2" aria-selected="false">
                      <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                              <div class="align-self-center ml-5 mr-5">
                                    <i class="ion-cash text-facebook"></i>
                                </div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0 text-uppercase">Total Expenses</h6>
                                        <h2 class="m-t-0">${{ $totalExpenses }}</h2></div>
                                </div>
                            </div>
                        </div>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="just-tab-3" data-toggle="tab" href="#j-tab-3" role="tab" aria-controls="j-tab-3" aria-selected="false">
                    <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                      <div class="align-self-center ml-5 mr-5">
                                    <i class="ion-filing text-facebook"></i>
                                </div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0 text-uppercase">Bank Statement</h6>
                                        <h2 class="m-t-0">${{ $bankBalance }}</h2></div>
                                </div>
                            </div>
                        </div>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="just-tab-4" data-toggle="tab" href="#j-tab-4" role="tab" aria-controls="j-tab-4" aria-selected="false">
                              <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                      <div class="align-self-center ml-5 mr-5">
                                    <i class="ion-document-text text-facebook"></i>
                                </div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0 text-uppercase">Monthly Budget</h6>
                                        <h2 class="m-t-0">${{ $mounthlyBudget }}</h2></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>

                <div class="widget-body no-padding">

                    <div class="tab-content pt-3">
                        <div class="tab-pane fade active show" id="j-tab-1" role="tabpanel" aria-labelledby="just-tab-1">
                           <div class="row">
                               <div class="col-xl-6">
                                   <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>New Transactions</h4>
                                    </div>
                             <div class="widget-body">
                    <div class="table-responsive">
                        <table  class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Account</th>
                                    <th>Amount</th>
                                    <th>Cathegry</th>
                                    <th>Deposit Ref.</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $sl = 1;?>
                            @foreach($Transactions as $transaction)
                                <tr>
                                    <td><span class="text-primary">{{ $sl++ }}</span></td>
                                    <td>{{ $transaction->date }}</td>
                                    <td>{{ $transaction->account_name }}</td>
                                    <td>{{ $transaction->transaction_amount }}</td>
                                    <td>{{ $transaction->method }}</td>
                                    <td>{{ $transaction->ref_no }}</td>
                                    
                                    <td class="td-actions">
                                        <a href="{{ url('/admin/accounting/transaction/view/'.$transaction->id) }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/accounting/transaction/edit/'.$transaction->id) }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/accounting/transaction/delete/'.$transaction->id) }}"><i class="la la-trash-o delete"></i></a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                                </div>
                               </div>
                               <div class="col-xl-6">
                                           <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>New Deposits</h4>
                                    </div>
                             <div class="widget-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Account</th>
                                    <th>Amount</th>
                                    <th>Cathegry</th>
                                    <th>Deposit Ref.</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $sl = 1;?>
                            @foreach($Deposits as $deposit)
                                <tr>
                                    <td><span class="text-primary">{{ $sl++ }}</span></td>
                                    <td>{{ $deposit->date }}</td>
                                    <td>{{ $deposit->account_name }}</td>
                                    <td>{{ $deposit->deposit_amount }}</td>
                                    <td>{{ $deposit->category }}</td>
                                    <td>{{ $deposit->ref_no }}</td>
                                    
                                    <td class="td-actions">
                                        <a href="{{ url('/admin/accounting/deposit/view/'.$deposit->id) }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/accounting/deposit-edit/'.$deposit->id) }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/accounting/deposit/delete/'.$deposit->id) }}"><i class="la la-trash-o delete"></i></a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                                </div>
                               </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="j-tab-2" role="tabpanel" aria-labelledby="just-tab-2">
                           <div class="row flex-row">
                            <div class="col-xl-7 col-md-6">
                                <!-- Begin Widget 10 -->
                                <div class="widget widget-10 has-shadow">

                                    <!-- Begin Widget Body -->
                                    <div class="widget-body no-padding">
                                        <h4 class="text-center bold pt-3 pb-3">Expenses Over Last 5 Years</h4>
                                            <div class="chart">
                                            <canvas id="line-chart-01"></canvas>
                                        </div>
                                    </div>
                                    <!-- End Widget Body -->
                                </div>
                                <!-- End Widget 10 -->
                            </div>
                            <div class="col-xl-5">
 <div class="widget widget-11 has-shadow">
                                    <!-- Begin Widget Header -->
                                    <div class="widget-header bordered d-flex align-items-center">
                                        <h2>Activity Log</h2>
                                        <div class="widget-options">
                                            <div class="dropdown">
                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                                    <i class="la la-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item"> 
                                                        <i class="la la-history"></i>History
                                                    </a>
                                                    <a href="#" class="dropdown-item"> 
                                                        <i class="la la-bell-slash"></i>Disable Alerts
                                                    </a>
                                                    <a href="#" class="dropdown-item"> 
                                                        <i class="la la-edit"></i>Edit Widget
                                                    </a>
                                                    <a href="#" class="dropdown-item faq"> 
                                                        <i class="la la-question-circle"></i>FAQ
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Widget Header -->
                                    <!-- Begin Widget Body -->
                                    <div class="widget-body p-0 widget-scroll" style="max-height: 450px; overflow: hidden; outline: none;" tabindex="3">
                                    <!-- Begin 01 -->
                                    @foreach($Activity as $activity)
                                    <div class="timeline violet">
                                        <div class="timeline-content d-flex align-items-center">
                                            <div class="user-image">
                                                @if($activity->type == 'add')
                                                <img class="rounded-circle" src="{{ asset('church') }}/img/add.png" alt="...">
                                                @elseif($activity->type == 'edit')
                                                <img class="rounded-circle" src="{{ asset('church') }}/img/edit.png" alt="...">
                                                @elseif($activity->type == 'delete')
                                                <img class="rounded-circle" src="{{ asset('church') }}/img/delete.png" alt="...">
                                                @else
                                                <img class="rounded-circle" src="{{ asset('church') }}/img/other.png" alt="...">
                                                @endif
                                            </div>
                                            <div class="d-flex flex-column mr-auto">
                                                <div class="title"><a href="{{ route($activity->t_name) }}">
                                                    <span class="username">{{ $activity->author_name }}</span>
                                                    {{ $activity->massage }}</a>
                                                </div>
                                                <div class="time">{{  date('d M', strtotime($activity->created_at)) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- End 07 -->
                                    </div>
                                    <!-- End Widget Body -->
                                </div>
                            </div>
                        </div>
                        </div>
                            <?php $toDay = \Carbon\Carbon::now(); ?>

                        <div class="tab-pane fade" id="j-tab-3" role="tabpanel" aria-labelledby="just-tab-3">
                            <div class="row">
                           <div class="col-xl-4">
                                <div class="widget widget-23 bg-gradient-02 d-flex justify-content-center align-items-center">
                                    <div class="widget-body text-center">
                                        <i class="ti ti-zip"></i>
                                        <div class="title"> Bank Statement of<br> {{ date('M-Y', strtotime($toDay)) }}</div>
                                        <div class="number">Download Statement</div>
                                        <div class="text-center mt-3 mb-3">
                                            <a href="{{ url('/admin/budget/downlod/0') }}"><button type="button" class="btn btn-outline-light">
                                                Download
                                            </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                   <div class="col-xl-4">
                                <div class="widget widget-23 bg-gradient-02 d-flex justify-content-center align-items-center">
                                    <div class="widget-body text-center">
                                        <i class="ti ti-zip"></i>
                                        <div class="title">Bank Statement of<br>{{ date('M-Y', strtotime($toDay->subMonth(1))) }}</div>
                                        <div class="number">Download Statement</div>
                                        <div class="text-center mt-3 mb-3">
                                            <a href="{{ url('/admin/budget/downlod/1') }}"><button type="button" class="btn btn-outline-light">
                                                Download
                                            </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                   <div class="col-xl-4">
                                <div class="widget widget-23 bg-gradient-02 d-flex justify-content-center align-items-center">
                                    <div class="widget-body text-center">
                                        <i class="ti ti-zip"></i>
                                        <div class="title">Bank Statement of<br> {{ date('M-Y', strtotime($toDay->subMonth(1))) }}</div>
                                        <div class="number">Download Statement</div>
                                        <div class="text-center mt-3 mb-3">
                                            <a href="{{ url('/admin/budget/downlod/2') }}"><button type="button" class="btn btn-outline-light">
                                                Download
                                            </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="j-tab-4" role="tabpanel" aria-labelledby="just-tab-4">
       <div class="row">
           <div class="col-xl-12">                            
                  <div class="widget has-shadow">
                                        <h2>Budget History</h2>
                    <div class="table-responsive">
                        <table id="sorting-table" class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Remaining</th>
                                    <th>Details</th>
                                    <th>Expand</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allBudget as $budget)
                                <tr>
                                    <td>{{ $budget->title }}</td>
                                    <td>${{ $budget->remaining }}</td>
                                    <td><a class="btn btn-sm btn-square btn-info" href="{{ url('/admin/accounting/budget/details/'.$budget->id) }}">Details</a></td>
                                    <td> @if($budget->overspend == 1)<a class="btn btn-sm btn-square btn-primary" href="{{ url('/admin/accounting/budget/expand/'.$budget->id) }}"> Expand</a> @else <a class="btn btn-sm btn-square btn-danger" href="#"> Desible</a> @endif</td>
                                    <td class="td-actions">

                                        <a href="{{ url('/admin/accounting/budget/edit/'.$budget->id) }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/accounting/budget/delete/'.$budget->id) }}"><i class="la la-trash-o delete"></i></a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
           </div>
       </div>
                        </div>
                    </div>
                </div>
      
        </div>
    </div>
    <!-- End Row -->
</div>
<!-- End Container -->
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
@endpush

