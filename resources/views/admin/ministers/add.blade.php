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
                        <a href="{{ url('/associateministers') }}" class="btn btn-md btn-info btn-square mr-1 mb-2"> View Pastors</a>
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
                            <h4>Add Personal Information</h4>
                        </div>
                    </div>

                    <div class="widget-body">
                     
                            
                                    {!!Form::open(array('route'=>'admin.associate-ministers.store','method'=>'POST', 'enctype'=>'multipart/form-data'))!!}


                                    @include('admin.ministers.fields')
                       
                            
                            
                                {!! Form::close() !!}
                   
                </div>
                <!-- End Sorting -->
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->
@endsection

