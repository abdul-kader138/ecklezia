@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Service</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{ route('admin.service.create') }}" class="btn btn-info btn-square mr-1 mb-2">Add
                                    Service</a>
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
                            <h4>View Service</h4>
                        </div>
                    </div>

                    <div class="widget-body">
                        <div class="col-12 table-header-bg">
                            <div class="section-title mb-3">
                                <h4 class="pt-3 pb-3">Service Details</h4>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xl-6">
                                <label class="form-control-label">Service Name</label>
                                <p>{{ $service->service_name }}</p>
                            </div>
                            <div class="col-xl-6">
                                <label class="form-control-label">Speaker Name</label>
                                <p>{{ $service->speaker }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xl-6">
                                <label class="form-control-label">Attendance</label>
                                <p>{{ $service->attendance }}</p>
                            </div>

                        </div>


                        <div class="em-separator separator-dashed"></div>

                    </div>
                </div>
                <!-- End Sorting -->
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->
@endsection


