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
                <h2 class="page-header-title">List All Banking</h2>
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="javascript:viod(0);" data-toggle="modal" data-target="#modal-large" class="btn btn-info btn-square mr-1 mb-2"  >Add New Account</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/accounting/banking_balance') }}" class="btn btn-info btn-square mr-1 mb-2">Account Balances</a>
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
                        <h4>List All Banking</h4>
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
</div>
<!-- End Container -->

<!-- Begin Centered Modal -->
<div id="modal-large" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Account</h4>
                <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/admin/accounting/save-account') }}" method="POST">
                    @csrf

           <div class="row">
                <div class="form-group col-xl-6">
                    <label>Holder Name</label>
                    <select name="holder_id" class="selectpicker form-control"  required>
                        <option value=""> select</option>
                         @foreach($allPeople as $people)
                            <option value="{{ $people->id }}" data-content='<img src="{{ asset('uploads/images/people/'.$people->file) }}" width="20" height="20">' >{{ $people->first_name.' '.$people->last_name }}</option>
                         @endforeach
                    </select>
                </div>
                <div class="form-group col-xl-6">
                    <label>Account Name</label>
                    <input type="text" class="form-control" placeholder="Account Name" name="account_name" required>
                </div>
                <div class="form-group col-xl-6">
                    <label>Initial Balance</label>
                    <input type="text" class="form-control" placeholder="Initial Balance" name="initial_balance" required>
                </div>
            </div>

             <div class="row">
                  <div class="form-group col-xl-6">
                    <label>Account Number</label>
                    <input type="text" class="form-control" placeholder="Account Number" name="account_number" required>
                </div>
                <div class="form-group col-xl-6">
                     <label>Branch Code</label>
                    <input type="text" class="form-control" name="branch_code" placeholder="Branch Code" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xl-12">
                     <label>Bank Branch</label>
                    <input type="text" class="form-control" placeholder="Bank Branch" name="bank_branch" required>
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

