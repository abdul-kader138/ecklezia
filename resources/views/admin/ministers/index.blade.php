@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Associate Pastors</h2>
                    <div>
                                <ul class="breadcrumb">
                       <li>
                        <a href="{{ route('admin.associate-ministers.create') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Pastors</a>
                    </li>
                    <li>
                        <a href="{{ url('admin.associateministers') }}" class="btn btn-md btn-info btn-square mr-1 mb-2"> View Pastors</a>
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
                            <h4>Pastors List</h4>
                        </div>

                    </div>

                    <div class="widget-body">
                        <div class="table-responsive">
                            <table id="sorting-table" class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Photo</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <!-- <th>Created At</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($associateministers as $key => $row)
                                    <tr>
                                    <td><span class="text-primary">{{++$key}}</span></td>
                                        <td>
                                            <img src="{{asset('uploads/images/associate_minister/'.$row->file)}}" alt="Image" class="table_image">
                                        </td>
                                        <td>{{ $row->first_name}}</td>
                                        <td>{{ $row->last_name}}</td>
                                         <td>{{ $row->middle_name}}</td>
                                        <td>{{ $row->email}}</td>
                                      <!-- {{ $row->created_at}} -->

                                        <td class="td-actions">
                                            {!! Form::open(['route' => ['admin.associate-ministers.destroy', $row->id], 'method' => 'delete']) !!}
                                            <a href="{!! route('admin.associate-ministers.show', [$row->id]) !!}"><i class="la la-eye view"></i></a>
                                            <a href="{!! route('admin.associate-ministers.edit', [$row->id]) !!}"><i class="la la-edit edit"></i></a>
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

