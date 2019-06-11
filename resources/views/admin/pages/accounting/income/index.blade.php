@extends('admin.layout.account_admin')

@section('content')
<style>
.daterangepicker {
    z-index: 1200 !important;
}
.tox-notification {
display: none;
    }
</style>
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Transaction List</h2>
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="javascript:viod(0);" data-toggle="modal" data-target="#modal-large" class="btn btn-info btn-square mr-1 mb-2">New Deposit</a>
                        </li>
                        <li>
                            <a href="javascript:viod(0);" data-toggle="modal" data-target="#modal-transfer" class="btn btn-info btn-square mr-1 mb-2">Transfer</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- End Row -->
    <div class="row">
        <div class="col-xl-12">
            <!-- Start Sorting -->
            <div class="widget has-shadow">

                <div class="widget-header bordered d-flex align-items-center flex-space-between">
                    <div class="widget-title">
                        <h4>Deposit List</h4>
                    </div>

                </div>

                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table table-hover mb-0">
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
                            @foreach($allDeposit as $deposit)
                                <tr>
                                    <td><span class="text-primary">{{ $sl++ }}</span></td>
                                    <td>{{ $deposit->date }}</td>
                                    <td>{{ $deposit->account_name }}</td>
                                    <td>{{ $deposit->deposit_amount }}</td>
                                    <td>{{ $deposit->category }}</td>
                                    <td>{{ $deposit->ref_no }}</td>
                                    
                                    <td class="td-actions">
                                        <a href="javascript:viod(0);" data-toggle="modal" data-target="#modal-deposit{{ $deposit->id }}"><i class="la la-eye view"></i></a>
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
            <!-- End Sorting -->
        </div>
    </div>
    <!-- End Row -->
    <div class="row">
        <div class="col-xl-12">
            <!-- Start Sorting -->
            <div class="widget has-shadow">

                <div class="widget-header bordered d-flex align-items-center flex-space-between">
                    <div class="widget-title">
                        <h4>Transaction List</h4>
                    </div>

                </div>

                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Account</th>
                                    <th>Amount</th>
                                    <th>Cathegry</th>
                                    <th>Ref.</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $sl = 1;?>
                            @foreach($allTransaction as $transaction)
                                <tr>
                                    <td><span class="text-primary">{{ $sl++ }}</span></td>
                                    <td>{{ $transaction->date }}</td>
                                    <td>{{ $transaction->account_name }}</td>
                                    <td>{{ $transaction->transaction_amount }}</td>
                                    <td>{{ $transaction->method }}</td>
                                    <td>{{ $transaction->ref_no }}</td>
                                    
                                    <td class="td-actions">
                                        <a href="javascript:viod(0);" data-toggle="modal" data-target="#modal-transaction{{ $transaction->id }}"><i class="la la-eye view"></i></a>
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
            <!-- End Sorting -->
        </div>
    </div>
    <!-- End Row -->
</div>
<!-- End Container -->
<!-- Begin Centered Modal -->
<div id="modal-large" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Deposit</h4>
                <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
            </div>
            <div class="modal-body">
               <form action="{{ url('/admin/accounting/deposit-save') }}" method="POST" enctype="multipart/form-data"
               >
                    @csrf
                    <div class="row">
                     <div class="form-group col-xl-6">
                        <label>Account</label>
                        <select name="account_id" class="form-control"  required>
                        <option value=""> select</option>
                             @foreach($allAccounts as $account)
                                <option value="{{ $account->id }}" >{{ $account->account_name }}</option>
                             @endforeach
                        </select>
                    </div> 

                    <div class="form-group col-xl-6">
                         <label>Payer</label>
                            <input type="text" name="payer" class="form-control"  required>
                    </div>
                </div>

                <div class="row">
                  <div class="form-group col-xl-6">
                    <label>Amount</label>
                    <input type="text" class="form-control" placeholder="Amount" name="deposit_amount">
                </div>
                <div class="form-group col-xl-6">
                     <label>Date</label>
                    <input id="start_date" name="date" type="text" class="form-control">
                </div>
            </div>
                            <div class="row">
                  <div class="form-group col-xl-6">
                    <label>Category</label>                    
                    <input id="start_date" name="category" type="text" class="form-control">
                </div>
                <div class="form-group col-xl-6">
                    <label>Payment Method</label>
                      <select class="form-control show-menu-arrow" data-live-search="true" name="method" required>
                            <option>Online Banking</option>
                            <option>Mobile Banking</option>
                            <option selected>Bank Transfer</option>
                        </select>
                </div>
            </div>
                <div class="row">
                <div class="form-group col-xl-6">
                     <label>Reff No.</label>
                    <input type="text" class="form-control" placeholder="Reff No." name="ref_no" required>
                </div>
            </div>
            <div class="row">
                  <div class="form-group col-xl-12">
                    <label>Description</label>
                    <textarea class="form-control" id="basic-example" name="description"></textarea>
                </div>
                
            </div>
                <div class="row">
                  <div class="form-group col-xl-12">
                    <label>Attach File</label>
                    <input type="file" class="form-control"  name="file">
                </div>
                
            </div>
     
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
       </form>
</div>
</div>
</div>
<!-- End Centered Modal -->

<!-- Begin Centered Modal -->
<div id="modal-transfer" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Transfer</h4>
                <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/admin/accounting/transaction-save') }}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="form-group col-xl-6">
                        <label>From Account</label>
                          <select name="sender_id" class="form-control"  required>
                            <option value=""> select</option>
                                 @foreach($allAccounts as $account)
                                    <option value="{{ $account->id }}" >{{ $account->account_name }}</option>
                                 @endforeach
                            </select>
                    </div>
                    <div class="form-group col-xl-6">
                         <label>To Account</label>
                          <select name="receiver_id" class="form-control"  required>
                            <option value=""> select</option>
                                @foreach($allAccounts as $account)
                                    <option value="{{ $account->id }}" >{{ $account->account_name }}</option>
                                 @endforeach
                            </select>
                    </div>
            </div>

            <div class="row">
                <div class="form-group col-xl-6">
                    <label>Amount</label>
                    <input type="text" class="form-control" placeholder="Amount" name="transaction_amount">
                </div>
                <div class="form-group col-xl-6">
                     <label>Date</label>
                    <input id="end_date" name="date" type="text" class="form-control">
                </div>
            </div>
         <div class="row">
                  <div class="form-group col-xl-6">
                    <label>Payment Method</label>
                      <select class="form-control" data-live-search="true" name="method">
                            <option>Online Banking</option>
                            <option>Mobile Banking</option>
                            <option selected>Bank Transfer</option>
                        </select>
                </div>
                <div class="form-group col-xl-6">
                     <label>Reff No.</label>
                    <input type="text" class="form-control" placeholder="Reff No." name="ref_no">
                </div>
            </div>
                <div class="row">
                  <div class="form-group col-xl-12">
                    <label>Description</label>
                    <textarea class="form-control" id="basic-example" name="description"></textarea>
                </div>
                
            </div>

     
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>

</div>
</div>
</div>
<!-- End Centered Modal -->


@foreach($allDeposit as $deposit)
<!-- Begin Deposit Modal -->
<div id="modal-deposit{{ $deposit->id }}" class="modal fade">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Deposit Details</h4>
                <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
            </div>
            <div class="modal-body">
         <form>
                    <div class="row">
                     <div class="form-group col-xl-6">
                        <label>Account</label>
                        <select name="account_id" class="form-control" disabled>
                        <option value=""> select</option>
                             @foreach($allAccounts as $account)
                                <option value="{{ $account->id }}" @if($account->id  ==  $deposit->account_id) selected @endif >{{ $account->account_name }}</option>
                             @endforeach
                        </select>
                    </div> 

                    <div class="form-group col-xl-6">
                         <label>Payer</label>
                            <input type="text" name="payer" value="{{ $deposit->payer }}" class="form-control"  disabled>
                    </div>
                </div>

                <div class="row">
                  <div class="form-group col-xl-6">
                    <label>Amount</label>
                    <input type="text" class="form-control" placeholder="Amount" name="deposit_amount" value="{{ $deposit->deposit_amount }}" disabled>
                </div>
                <div class="form-group col-xl-6">
                     <label>Date</label>
                    <input id="start_date" name="date" type="text" class="form-control" value="{{ $deposit->date }}" disabled>
                </div>
            </div>
                            <div class="row">
                  <div class="form-group col-xl-6">
                    <label>Category</label>

                    <input id="start_date" name="category" type="text" class="form-control" value="{{ $deposit->category }}" disabled>
                </div>
                <div class="form-group col-xl-6">
                    <label>Payment Method </label>
                      <select class="form-control show-menu-arrow" data-live-search="true" name="method" disabled>
                            <option >selecte</option>                            
                            <option @if($deposit->method == "Online Banking") selected @endif value="Online Banking">Online Banking</option>
                            <option  @if($deposit->method == "Mobile Banking") selected @endif value="Mobile Banking">Mobile Banking</option>
                            <option  @if($deposit->method == "Online Banking") selected @endif value="Online Banking">Bank Transfer</option>
                        </select>
                        </select>
                </div>
            </div>
                <div class="row">
                <div class="form-group col-xl-6">
                     <label>Reff No.</label>
                    <input type="text" class="form-control" placeholder="Reff No." name="ref_no"  value="{{ $deposit->ref_no }}" disabled>
                </div>
            </div>
            <div class="row">
                  <div class="form-group col-xl-12">
                    <label>Description</label><p><?php echo $deposit->description; ?></p>
                </div>
                
            </div>
                <!-- <div class="row">
                  <div class="form-group col-xl-12">
                    <label class="col-xl-12">Attach File</label>
                    <img src="{{ asset('uploads/images/files/'.$deposit->file) }}" height="45" width="45" alt=""> <p>{{ $deposit->file }}</p>
                    <input type="file" class="form-control"  name="file" disabled>
                </div> -->
                
            </div>
     
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
    </div>
       </form>
</div>
</div>
</div>
<!-- End Centered Modal -->
@endforeach


@foreach($allTransaction as $transaction)
<!-- Begin Deposit Modal -->
<div id="modal-transaction{{ $transaction->id }}" class="modal fade">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Transaction Details</h4>
                <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
            </div>
            <div class="modal-body">
         <form>
                    <div class="row">   
                      <div class="form-group col-xl-6">
                        <label>From Account</label>
                          <select name="sender_id" class="form-control"  disabled>
                            <option value=""> select</option>
                                 @foreach($allAccounts as $account)
                                    <option value="{{ $account->id }}" @if($transaction->sender_id == $account->id) selected @endif >{{ $account->account_name }}</option>
                                 @endforeach
                            </select>
                    </div>
                    <div class="form-group col-xl-6">
                         <label>To Account</label>
                          <select name="receiver_id" class="form-control"  disabled>
                            <option value=""> select</option>
                                @foreach($allAccounts as $account)
                                    <option value="{{ $account->id }}" @if($transaction->receiver_id == $account->id) selected @endif >{{ $account->account_name }}</option>
                                 @endforeach
                            </select>
                    </div>
            </div>

            <div class="row">
                <div class="form-group col-xl-6">
                    <label>Amount</label>
                    <input type="text" class="form-control" placeholder="Amount" name="transaction_amount" value="{{ $transaction->transaction_amount }}" disabled>
                </div>
                <div class="form-group col-xl-6">
                     <label>Date</label>
                    <input id="start_date" name="date" value="{{ $transaction->date }}" type="text" class="form-control" disabled>
                </div>
            </div>
         <div class="row">
                  <div class="form-group col-xl-6">
                    <label>Payment Method</label>
                      <select class="form-control" data-live-search="true" name="method" disabled>
                            <option @if($transaction->method == "Online Banking") selected @endif value="Online Banking">Online Banking</option>
                            <option  @if($transaction->method == "Mobile Banking") selected @endif value="Mobile Banking">Mobile Banking</option>
                            <option  @if($transaction->method == "Online Banking") selected @endif value="Online Banking">Bank Transfer</option>
                        </select>
                </div>
                <div class="form-group col-xl-6">
                     <label>Reff No.</label>
                    <input type="text" class="form-control" placeholder="Reff No." name="ref_no" value="{{ $transaction->ref_no }}" disabled>
                </div>
            </div>
                <div class="row">
                  <div class="form-group col-xl-12">
                    <label>Description</label><p><?php echo $transaction->description; ?></p>
                </div>
                
            </div>

     
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
    </div>
       </form>
</div>
</div>
</div>
<!-- End Centered Modal -->
@endforeach

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

