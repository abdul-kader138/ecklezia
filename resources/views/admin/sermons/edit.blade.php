@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Sermons</h2>
                    <div>
                                                        <ul class="breadcrumb">
                       <li>
                        <a href="{{ url('/sermonplanners/create') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Sermons</a>
                    </li>
                    <li>
                        <a href="{{ url('/sermonplanners') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">View Sermons</a>
                    </li>

                </ul>
                                                                       
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- End Row -->
        <div class="row no-margin">
            <div class="col-xl-12">
                <!-- Begin Widget -->
                <div class="row widget has-shadow">
                    <!-- Start Widget Header -->
                    <div class="widget-header bordered d-flex align-items-center">
                        <h2>Update Sermons</h2>

                    </div>
                    <!-- End Widget Header -->

                    <div class="col-md-12">
                        <!-- Begin Widget Body -->
                        <div class="widget-body">
                            <!-- Begin Event -->
                            <div class="panel panel-primary">
                                <div class="panel-body" >
                                  
                                        <div class="col-md-12">
                                            {!! Form::model($sermon, ['route' => ['sermonplanners.update', $sermon->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                                            @include('admin.sermons.fields')

                                            {!! Form::close() !!}
                                        </div>
                                  
                                </div>
                            </div>
                            <!-- End Event -->
                        </div>
                        <!-- End Widget Body -->
                    </div>
                </div>
                <!-- End Widget -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->
@endsection