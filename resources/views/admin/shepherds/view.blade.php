@extends('admin.layout.admin')

@section('content')
<div class="container-fluid">

    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Shepherd Info</h2>
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{ route('admin.check-in.create') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Check In</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.shepherd.create') }}" class="btn btn-info btn-square mr-1 mb-2">Add Shepherds</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.shepherd-setup.create') }}" class="btn btn-info btn-square mr-1 mb-2">Add Shepherds Set Up</a>
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
                    <h4 class="text-center mt-3 mb-1">{{$shepherd->first_name}} {{$shepherd->last_name}}</h4>
                    <div class="em-separator separator-dashed"></div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <p class="nav-link">
                                <i class="la la-phone la-2x align-middle pr-2"></i>
                                <a href="javascript:void(0)">{{$shepherd->phone}}</a>
                            </p>
                        </li>
                        <li class="nav-item">
                            <p class="nav-link">
                                <i class="la la-envelope la-2x align-middle pr-2"></i>
                                <a href="javascript:void(0)" >{{$shepherd->email}}</a>
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
                                    <th>ID</th>
                                    <th>First&Last Name</th>
                                    <th>Check In</th>
                                    <th>Check Out</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($shepherd->checkActivity as $key=>$value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->first_name}} {{$value->last_name}}</td>
                                    <td>{{$value->created_at }}</td>
                                    <td>
                                        @if(null !== $value->check_out_time)
                                            {{$value->check_out_time}}
                                        @else
                                        <a class="btn btn-sm btn-danger" href="{{ route('admin.check-out.action',$value->id) }}">Checkout</a>
                                        @endif
                                    </td>
                                    <td class="td-actions">
                                        {!! Form::open(['route' => ['admin.check-in.destroy', $value->id], 'method' => 'delete']) !!}
                                        <a href="{!! route('admin.check-in.show', [$value->id]) !!}"><i class="la la-eye view"></i></a>
                                        <a href="{!! route('admin.check-in.edit', [$value->id]) !!}"><i class="la la-edit edit"></i></a>
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