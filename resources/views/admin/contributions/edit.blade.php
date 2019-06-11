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
                            <li class="breadcrumb-item"><a href="{{url('/admin/home')}}"><i class="ti ti-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">App</a></li>
                            <li class="breadcrumb-item active">Contribution</li>
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
                            <h4>Update Contribution</h4>
                        </div>
                    </div>

                    <div class="widget-body">
                        {!! Form::model($contribution, ['route' => ['admin.contribution.update', $contribution->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

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


