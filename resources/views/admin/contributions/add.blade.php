@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Contribution</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.contribution.index') }}" class="btn btn-info btn-square mr-1 mb-2">Contribution List</a>

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
                            <h4>Add Contribution</h4>
                        </div>
                    </div>

                    <div class="widget-body">
                        {!!Form::open(array('route'=>'admin.contribution.store','method'=>'POST', 'enctype'=>'multipart/form-data'))!!}

                        @include('admin.contributions.fields')

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
@push('alljs')
    <script>

        $(function () {

            $('#date').daterangepicker({
                singleDatePicker: true
            });

        });
    </script>
@endpush


