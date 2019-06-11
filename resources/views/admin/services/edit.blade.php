@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Add Service</h2>
                                   <div>
                                <ul class="breadcrumb">
                       <li>
                        <a href="{{ route('admin.service.index') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Service List</a>
                    </li>
                    <li>
                        <a href="" class="btn btn-md btn-info btn-square mr-1 mb-2"> Ongoing Service</a>
                    </li>

                </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- End Row -->
        <div class="row flex-row">
            <div class="col-xl-12">
                <!-- Form -->
                <div class="widget has-shadow">
                    <div class="widget-header bordered no-actions d-flex align-items-center flex-space-between">
                        <div class="widget-title">
                            <h4>Update Service</h4>
                        </div>

                        <div class="widget-options">
                            <a href="{{ route('admin.service.index') }}" class="btn btn-md btn-primary">Service List</a>
                        </div>
                    </div>

                    <div class="widget-body">
                        {!! Form::model($service, ['route' => ['admin.service.update', $service->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                        @include('admin.services.fields')

                        {!! Form::close() !!}
                    </div>
                </div>
                <!-- End Form -->
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->
@endsection


