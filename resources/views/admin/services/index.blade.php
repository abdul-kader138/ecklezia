@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">{{$pt}}</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{ route('admin.service.create') }}" class="btn btn-info btn-square mr-1 mb-2">Add
                                    Service</a>
                            </li>
                            @if(request()->route()->getName()!=='admin.service.ongoing')
                             <li>
                                <a href="{{route('admin.service.ongoing')}}" class="btn btn-info btn-square mr-1 mb-2">Ongoing
                                    Service</a>
                            </li>
                                @endif
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

                                @foreach($services as $key => $row)
                                    <tr>
                                        <td><span class="text-primary">{{ ++$key }}</span></td>
                                        <td>{{ $row->service_name }}</td>
                                        <td>{{ $row->speaker }}</td>
                                        <td>{{ $row->attendance }}</td>

                                        <td class="td-actions">
                                            {!! Form::open(['route' => ['admin.service.destroy', $row->id], 'method' => 'delete']) !!}
                                            <abbr title="View">
                                                <a href="{!! route('admin.service.show', [$row->id]) !!}"><i class="la la-eye view"></i></a>
                                            </abbr>
                                            <abbr title="Edit">
                                                <a href="{!! route('admin.service.edit', [$row->id]) !!}"><i class="la la-edit edit"></i></a>
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

