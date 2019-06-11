@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Add Events</h2>
                                <div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{ route('admin.calendar.add_event') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Event</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.calendar.external') }}" class="btn btn-md btn-info btn-square mr-1 mb-2"> External Events</a>
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
                        <h2>Add Events</h2>

                    </div>
                    <!-- End Widget Header -->

                    <div class="col-md-12">
                        <!-- Begin Widget Body -->
                        <div class="widget-body">
                            <!-- Begin Event -->
                            <div class="panel panel-primary">
                                <div class="panel-body" >
                                    <div class="row">
                                        <div class="col-md-12">
                                            {!!Form::open(array('route'=>['admin.calendar.store_event'],'method'=>'POST', 'enctype'=>'multipart/form-data'))!!}

                                            @include('admin.calendar.fields')

                                            {!! Form::close() !!}

                                        </div>
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
@push('alljs')
    <script>
        (function ($) {
            var date_option = {
                singleDatePicker: true,
                locale: {
                    format: 'D/M/Y'
                }

            };
            $('#end_time').daterangepicker(date_option);
            $('#start_time').daterangepicker(date_option);
        })(jQuery);
    </script>
@endpush