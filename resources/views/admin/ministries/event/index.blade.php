@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Event List</h2>
                    <div>
                        <ul class="breadcrumb">
                        <li>
                            <a href="{{ route('admin.ministries.create') }}" class="btn btn-info btn-square mr-1 mb-2">Add Ministry</a>
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
                            <h4>Event List</h4>
                        </div>
                    </div>

                    <div class="widget-body">
                        <div class="table-responsive">
                            <table id="sorting-table" class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ministry Name</th>
                                    <th>Date</th>
                                    <th>Event</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($events as $key=>$event)
                                <tr>
                                    <td><span class="text-primary">{{$key+1}}</span></td>
                                    <td>{{$event->ministry->ministry}}</td>
                                    <td>{{\Carbon\Carbon::parse($event->date)->isoFormat('dddd,MMMM Do, YYYY')}}</td>
                                    <td>{{$event->description}}</td>
                                    <td class="td-actions">

                                        <form action="{{route('admin.ministries-delete-event',$event->id)}}" method="post" id="delete_form_{{$event->id}}">@csrf</form>
                                        <a href="#" onclick="confirm('are You sure delete?')?$('#delete_form_{{$event->id}}').submit():null"><i class="la la-trash-o delete"></i></a>

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

