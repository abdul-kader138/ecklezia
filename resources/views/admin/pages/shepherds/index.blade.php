@extends('admin.layout.admin')

@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Shepherds</h2>
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{ url('/admin/checkin/add') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Check In</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/shepherds/add') }}" class="btn btn-info btn-square mr-1 mb-2">Add Shepherds</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/shepherds/setup') }}" class="btn btn-info btn-square mr-1 mb-2">Add Shepherds Set Up</a>
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

                <div class="widget-header bordered no-actions d-flex align-items-center flex-space-between">
                    <div class="widget-title">
                        <h4>Shepherds List</h4>
                    </div>

                </div>

                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Room Name</th>
                                    <th>shepherds</th>

                                    <th>Telephone #</th>
                                    <th># Of Students</th>
                                    <th>Room Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ASD</td>
                                    <td>Something</td>

                                    <td>1670047320</td>
                                    <td>50</td>
                                    <td>First Class</td>
                                    <td class="td-actions">
                                        <a href="{{ url('/admin/shepherds/view') }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/shepherds/edit') }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/shepherds/delete') }}"><i class="la la-trash-o delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>EOF</td>
                                    <td>Something</td>
                                    <td>1670047320</td>
                                    <td>100</td>
                                    <td>Second Class</td>
                                    <td class="td-actions">
                                        <a href="{{ url('/admin/shepherds/view') }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/shepherds/edit') }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/shepherds/delete') }}"><i class="la la-trash-o delete"></i></a>
                                    </td>
                                </tr>
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

