@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Service List</h2>
                    <div>
                        <ul class="breadcrumb">
                        <li>
                            <a href="{{ url('/admin/service/add') }}" class="btn btn-info btn-square mr-1 mb-2">Add Service</a>
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
                            <h4>Service List</h4>
                        </div>

                    </div>

                    <div class="widget-body">
                        <div class="table-responsive">
                            <table id="sorting-table" class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Service Name</th>
                                    <th>Speaker</th>
                                    <th>Attendance</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span class="text-primary">1</span></td>
                                    <td>Web Service</td>
                                    <td>Mazharul Islam</td>
                                    <td>50 </td>
                                    
                                    <td class="td-actions">
                                        <a href="{{ url('/admin/service/view') }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/service/edit') }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/service/delete') }}"><i class="la la-trash-o delete"></i></a>
                                       
                                    </td>
                                </tr>
                                                                <tr>
                                    <td><span class="text-primary">2</span></td>
                                    <td>Web Service</td>
                                    <td>Mazharul Islam</td>
                                    <td>500 </td>
                                    
                                    <td class="td-actions">
                                        <a href="{{ url('/admin/service/view') }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/service/edit') }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/service/delete') }}"><i class="la la-trash-o delete"></i></a>
                                       
                                    </td>
                                </tr>
                                                                <tr>
                                    <td><span class="text-primary">3</span></td>
                                    <td>Web Service</td>
                                    <td>Mazharul Islam</td>
                                    <td>5000 </td>
                                    
                                    <td class="td-actions">
                                        <a href="{{ url('/admin/service/view') }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/service/edit') }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/service/delete') }}"><i class="la la-trash-o delete"></i></a>
                                       
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

