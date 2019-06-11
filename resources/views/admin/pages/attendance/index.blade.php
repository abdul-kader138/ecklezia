@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Attendance List</h2>
                    <div>
                        <ul class="breadcrumb">
                        <li>
                            <a href="{{ route('admin.attendance.create') }}" class="btn btn-info btn-square mr-1 mb-2">Add Attendance</a>
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
                            <h4>Attendance List</h4>
                        </div>

                    </div>

                    <div class="widget-body">
                        <div class="table-responsive">
                            <table id="sorting-table" class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Services</th>
                                    <th>Speaker</th>
                                    <th>Attendance</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span class="text-primary">1</span></td>
                                    <td>Sunday,February 12th,2019</td>
                                    <td>Web Service</td>
                                    <td>Mazharul Islam</td>
                                    <td>50 <a class="btn btn-sm btn-danger" href="{{ url('/admin/attendance') }}">Attended</a></td>
                                    
                                    <td class="td-actions">
                                        <a href="{{ route('admin.attendance.show',1) }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/attendance/edit') }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/attendance/delete') }}"><i class="la la-trash-o delete"></i></a>
                                       
                                    </td>
                                </tr>
                                                                <tr>
                                    <td><span class="text-primary">2</span></td>
                                    <td>Sunday,February 12th,2019</td>
                                    <td>Web Service</td>
                                    <td>Mazharul Islam</td>
                                    <td>500 <a class="btn btn-sm btn-danger" href="{{ url('/admin/attendance') }}">Attended</a></td>
                                    
                                    <td class="td-actions">
                                        <a href="{{ url('/admin/attendance/view') }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/attendance/edit') }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/attendance/delete') }}"><i class="la la-trash-o delete"></i></a>
                                       
                                    </td>
                                </tr>
                                                                <tr>
                                    <td><span class="text-primary">3</span></td>
                                    <td>Sunday,February 12th,2019</td>
                                    <td>Web Service</td>
                                    <td>Mazharul Islam</td>
                                    <td>5000 <a class="btn btn-sm btn-danger" href="{{ url('/admin/attendance') }}">Attended</a></td>
                                    
                                    <td class="td-actions">
                                        <a href="{{ url('/admin/attendance/view') }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/attendance/edit') }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/attendance/delete') }}"><i class="la la-trash-o delete"></i></a>
                                       
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

