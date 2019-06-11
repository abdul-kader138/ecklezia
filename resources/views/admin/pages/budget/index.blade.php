@extends('admin.layout.admin')

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
                <h2 class="page-header-title">Budgets</h2>
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{ url('/admin/accounting/transaction/add') }}" class="btn btn-info btn-square mr-1 mb-2">Add Transaction</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/accounting/budget/add') }}" class="btn btn-info btn-square mr-1 mb-2">Add Budget</a>
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
                        <h4>Budgets</h4>
                    </div>

                </div>

                <div class="widget-body">
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
            <!-- End Sorting -->
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

