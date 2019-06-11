@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Confidential Notes</h2>
                    <div>
                              <ul class="breadcrumb">
                        <li>
                            <a href="{{ url('/admin/confidential/add') }}" class="btn btn-md btn-info btn-square mr-1 mb-2"> Add Confidential</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/confidential') }}" class="btn btn-info btn-square mr-1 mb-2">  View Confidential</a>
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
                            <h4>Confidential List</h4>
                        </div>
                    </div>

                    <div class="widget-body">
                        <div class="table-responsive">
                            <table id="sorting-table" class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Purpose</th>
                                    <th>Category</th>
                                    <th>Phone Number</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span class="text-primary">1</span></td>
                                    <td>Yuli Riddle</td>
                                    <td>Sit quibusdam</td>
                                    <td>Visitor</td>
                                    <td>+882-69-9669829</td>
                                    <td class="td-actions">
                                        <a href="{{ url('/admin/confidential/view') }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/confidential/edit') }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/confidential/delete') }}"><i class="la la-trash-o delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-primary">2</span></td>
                                    <td>Ishmael Roach</td>
                                    <td>Quia similique qui soluta consectetur velit mollit ullamco ullam veritatis quos et architecto</td>
                                    <td>Volunteer</td>
                                    <td>+531-31-5185370</td>
                                    <td class="td-actions">
                                        <a href="{{ url('/admin/confidential/view') }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/confidential/edit') }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/confidential/delete') }}"><i class="la la-trash-o delete"></i></a>
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

