@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Note List</h2>
                    <div>
                        <ul class="breadcrumb">
                        <li>
                            <a href="{{ url('/admin/ministry/add') }}" class="btn btn-info btn-square mr-1 mb-2">Add Ministry</a>
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
                            <h4>Note List</h4>
                        </div>
                        <div class="widget-options">
                            <div class="col-xl-12">
                                <label class="form-control-label">Ministry Name</label>
                                <select name="country" class="custom-select form-control">
                                    <option value="">Select</option>
                                    <option value="babies">Option 1</option>
                                    <option value="babies">Option 1</option>
                                    <option value="babies">Option 1</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="widget-body">
                        <div class="table-responsive">
                            <table id="sorting-table" class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ministry Name</th>
                                    <th>Note</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span class="text-primary">1</span></td>
                                    <td>Youth Ministry</td>
                                    <td>This is a big big note from the admin.</td>
                                    <td class="td-actions">
                                        <a href="{{ url('/admin/ministry/note/view') }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/ministry/note/edit') }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/ministry/note/delete') }}"><i class="la la-trash-o delete"></i></a>
                                       
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-primary">1</span></td>
                                    <td>Youth Ministry</td>
                                    <td>This is a big big note from the admin.</td>
                                    <td class="td-actions">
                                        <a href="{{ url('/admin/ministry/note/view') }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/ministry/note/edit') }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/ministry/note/delete') }}"><i class="la la-trash-o delete"></i></a>
                                       
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

