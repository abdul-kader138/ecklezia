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
                            <a href="{{ route('admin.confidential.create') }}" class="btn btn-md btn-info btn-square mr-1 mb-2"> Add Confidential</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.confidential.index') }}" class="btn btn-info btn-square mr-1 mb-2">  View Confidential</a>
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
                                @foreach($confidentials as $key => $row)
                                    <tr>
                                        <td><span class="text-primary">{{ ++$key }}</span></td>
                                        <td>{{ $row->first_name }}</td>
                                        <td>{{ $row->purpose }}</td>
                                        <td>{{ $row->category }}</td>
                                        <td>{{ $row->phone }}</td>

                                        <td class="td-actions">
                                            {!! Form::open(['route' => ['admin.confidential.destroy', $row->id], 'method' => 'delete']) !!}
                                            <a href="{!! route('admin.confidential.show', [$row->id]) !!}"><i class="la la-eye view"></i></a>
                                            <a href="{!! route('admin.confidential.edit', [$row->id]) !!}"><i class="la la-edit edit"></i></a>
                                            {!! Form::button('<i class="la la-trash-o delete"></i>', ['type' => 'submit', 'onclick' => "return confirm('Are you sure?')"]) !!}
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

