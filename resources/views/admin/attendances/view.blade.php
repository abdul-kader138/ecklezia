@extends('admin.layout.admin')

@section('content')
<div class="container-fluid">

    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Attendance Info</h2>
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{ url('/attendances/create') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Attendance</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- Start Profile Row -->
    <div class="row flex-row">

        <div class="col-xl-3">
            <!-- Begin Widget -->
            <div class="widget has-shadow">
                <div class="widget-body">
                    <div class="mt-5">
                        <img src="{{ asset('church/img/avatar/avatar-01.jpg') }}" alt="..." style="width: 120px;" class="avatar rounded-circle d-block mx-auto">
                    </div>
                    <div class="em-separator separator-dashed"></div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="javascript:void(0)">Service</a>
                            <p>
                                {{ $attendance->service->service_name }}
                            </p>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)">Date</a>
                            <p>
                                {{ $attendance->date }}
                            </p>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)">Speaker</a>
                            <p>
                                {{ $attendance->service->speaker }}
                            </p>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)">Service Time</a>
                            <p>
                                Sunday Service
                            </p>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)">Membership Count</a>
                            <p>
                                14
                            </p>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)">Visitor Count</a>
                            <p>
                                14
                            </p>
                        </li>

                        <li class="nav-item">
                            <a href="javascript:void(0)">Total Attendance</a>
                            <p>
                                {{ $attendance->attendance }}
                            </p>
                        </li>


                    </ul>
                </div>
            </div>
            <!-- End Widget -->
        </div>

        <div class="col-xl-9">
            <div class="widget has-shadow">

                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Something</td>
                                    <td>1345678345</td>
                                    <td>FFH</td>
                                    <td class="td-actions">
                                        <a href="{{ url('/admin/student/view') }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/student/edit') }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/student/delete') }}"><i class="la la-trash-o delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Something</td>
                                    <td>1345678345</td>
                                    <td>FFH</td>
                                    <td class="td-actions">
                                        <a href="{{ url('/admin/student/view') }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/student/edit') }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/student/delete') }}"><i class="la la-trash-o delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Something</td>
                                    <td>1345678345</td>
                                    <td>FFH</td>
                                    <td class="td-actions">
                                        <a href="{{ url('/admin/student/view') }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/student/edit') }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/student/delete') }}"><i class="la la-trash-o delete"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Profile Row -->
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