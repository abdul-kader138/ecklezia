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
        <div class="row flex-row">
            <div class="col-xl-12">
                <!-- Form -->
                <div class="widget has-shadow">
                    <div class="widget-header bordered no-actions d-flex align-items-center flex-space-between">
                        <div class="widget-title">
                            <h4>Add Shepherds Information</h4>
                        </div>
                        <div class="widget-options">
                            <a href="{{ url('/shepherdsetups') }}" class="btn btn-md btn-primary">Shepherd Setups List</a>
                        </div>
                    </div>

                    <div class="widget-body">
                        {!! Form::model($shepherdsetup, ['route' => ['shepherdsetups.update', $shepherdsetup->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                        @include('admin.shepherdsetups.fields')

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
