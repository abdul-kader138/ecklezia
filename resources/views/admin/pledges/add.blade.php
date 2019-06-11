@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Pledge</h2>
                    <div>
                        <ul class="breadcrumb">
                             <li>
                            <a href="{{ route('admin.pledge.create') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Pledge</a>
                        </li>
                            <li>
                                <a href="{{ route('admin.pledge.index') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Pledge List</a>

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
                            <h4>Add Pledge</h4>
                        </div>
                    </div>

                    <div class="widget-body">
                        {!!Form::open(array('route'=>'admin.pledge.store','method'=>'POST', 'enctype'=>'multipart/form-data'))!!}

                        @include('admin.pledges.fields')

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


