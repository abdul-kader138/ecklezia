@extends('admin.layout.admin')
@push('css-head')
<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.dataTables.min.css">
@endpush
@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Peoples <small class="border-left pl-2">{{ucfirst(str_replace('_',' ',$type))}}</small></h2>
                          <div>
                    <ul class="breadcrumb">

                       <li>
                        <a href="{{ route('admin.people.create') }}?member_category=church_member" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Church Member</a>
                    </li>
                       <li>
                        <a href="{{ route('admin.people.create') }}?member_category=visitor" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Visitor</a>
                    </li>
                       <li>
                        <a href="{{ route('admin.people.create') }}?member_category=volunteer" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Volunteer</a>
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

                <div class="widget-header no-action bordered d-flex align-items-center flex-space-between">
                    <div class="widget-title">
                        <h4>People List</h4>
                    </div>

                </div>

                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table table-hover mb-0 display">
                            <thead>
                                <tr>
                                    <th>#</th>

                                    <th>Photo</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Mobile Phone</th>
                                    {{--<th>Family Status</th>--}}
                                    <th>Category</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($peoples as $key => $row)
                                    <tr>
                                        <td><span class="text-primary">{{ ++$key }}</span></td>

                                        <td>
                                            @if($row->file)
                                                <img width="40" height="40" src="{{ asset('uploads/images/people/'.$row->file) }}" alt="..." class=" mx-auto">
                                            @else
                                                <img width="40" height="40"  src="{{asset('church/img/avatar/avatar-02.jpg')}}" alt="..." class=" mx-auto">

                                            @endif
                                        </td>
                                        <td style="text-align: left;">{{ $row->first_name }}</td>
                                        <td style="text-align: left;">{{ $row->last_name }}</td>
                                        <td style="text-align: left;">{{ $row->email }}</td>
                                        <td style="text-align: left;">{{ $row->cell_number }}</td>
                                        {{--<td style="text-align: left;">{{ $row->family_status }}</td>--}}
                                        <td style="text-align: left;">{{ ucfirst(str_replace('_',' ',$row->member_category)) }}</td>
                                        <td class="td-actions" style="width: 130px">
                                            {!! Form::open(['route' => ['admin.people.destroy', $row->id], 'method' => 'delete']) !!}
                                            <abbr title="View">
                                                <a href="{!! route('admin.people.show', [$row->id]) !!}"><i class="la la-eye view"></i></a>
                                            </abbr>
                                            <abbr title="Edit">
                                                <a href="{!! route('admin.people.edit', [$row->id]) !!}"><i class="la la-edit edit"></i></a>
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
<script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
<script src="{{ asset('church/vendors/js/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/datatables/vfs_fonts.js') }}"></script>


<script>
    (function ($) {

        'use strict';

        $(function () {
            $('#sorting-table').DataTable({
                scrollY:        "50vh",
                // scrollCollapse: true,
                // paging:         false,
                "lengthMenu": [
                [10, 15, 20, -1],
                [10, 15, 20, "All"]
                ],
                "order": [
                // [3, "desc"]
                ]
            });
        });

    })(jQuery);
</script>
@endpush

