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
                                <a href="{{ route('admin.attendance.create') }}" class="btn btn-info btn-square mr-1 mb-2">Add
                                    Attendance</a>
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

                                @foreach($attendances as $key => $row)
                                    <tr>
                                        <td><span class="text-primary">{{ ++$key }}</span></td>
                                        <td>{{ $row->date }}</td>
                                        <td>{{ $row->service->service_name }}</td>
                                        <td>{{ $row->service->speaker }}</td>
                                        <td>{{ $row->service->attendance }} <a class="btn btn-sm btn-danger" href="{{ url('/attendances') }}">Attended</a>
                                        </td>

                                        <td class="td-actions">
                                            {!! Form::open(['route' => ['admin.attendance.destroy', $row->id], 'method' => 'delete']) !!}
                                            <abbr title="View">
                                                <a href="{!! route('admin.attendance.show', [$row->id]) !!}"><i class="la la-eye view"></i></a>
                                            </abbr>
                                            <abbr title="Edit">
                                                <a href="{!! route('admin.attendance.edit', [$row->id]) !!}"><i class="la la-edit edit"></i></a>
                                            </abbr>
                                            <abbr title="Delete">
                                                {!! Form::button('<i class="la la-trash-o delete"></i>', ['type' => 'submit', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                            </abbr>
                                            {!! Form::close() !!}
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

