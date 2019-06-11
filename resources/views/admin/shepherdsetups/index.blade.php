@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Shepherds Setup</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{ url('/checkins/create') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Check In</a>
                            </li>
                            <li>
                                <a href="{{ url('/shepherds/create') }}" class="btn btn-info btn-square mr-1 mb-2">Add Shepherds</a>
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
                            <h4>Shepherds Setup List</h4>
                        </div>
                    </div>

                    <div class="widget-body">
                        <div class="table-responsive">
                            <table id="sorting-table" class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Shepherd Name</th>
                                    <th>Room Category</th>
                                    <th>Class Guide</th>
                                    <th>Service Assignment</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($shepherdsetups as $key => $row)
                                    <tr>
                                        <td><span class="text-primary">{{ ++$key }}</span></td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->room_category }}</td>
                                        <td>{{ $row->class_guide }}</td>
                                        <td>{{ $row->service_assignment }}</td>

                                        <td class="td-actions">
                                            {!! Form::open(['route' => ['shepherdsetups.destroy', $row->id], 'method' => 'delete']) !!}
                                            <abbr title="View">
                                                <a href="{!! route('shepherdsetups.show', [$row->id]) !!}"><i class="la la-eye view"></i></a>
                                            </abbr>
                                            <abbr title="edit">
                                                <a href="{!! route('shepherdsetups.edit', [$row->id]) !!}"><i class="la la-edit edit"></i></a>
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




