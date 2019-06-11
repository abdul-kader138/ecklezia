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
                            <h4>View Shepherds Setup</h4>
                        </div>
                    </div>

                    <div class="widget-body">
                        <div class="table-responsive">
                            <table id="sorting-table" class="table table-striped mb-0">
                                <tbody>
                                <tr>
                                    <td>Name:</td>
                                    <td>{{ $shepherdsetup->name}}</td>
                                </tr>
                                <tr>
                                    <td>Room Category:</td>
                                    <td>{{ $shepherdsetup->room_category }}</td>
                                </tr>
                                <tr>
                                    <td>Class Guide:</td>
                                    <td>{{ $shepherdsetup->class_guide }}</td>
                                </tr>
                                <tr>
                                    <td>Service Assignment:</td>
                                    <td>{{ $shepherdsetup->service_assignment }}</td>
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


