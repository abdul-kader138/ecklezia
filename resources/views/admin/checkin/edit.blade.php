@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Check In</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/admin/home')}}"><i class="ti ti-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">App</a></li>
                            <li class="breadcrumb-item active">Check In</li>
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
                            <h4>Update Check In Information</h4>
                        </div>

                        <div class="widget-options">
                            <div class="dropdown">
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                    <i class="la la-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="{{ route('admin.check-in.create') }}" class="dropdown-item">
                                        Add Check In
                                    </a>
                                    <a href="{{ route('admin.check-in.index') }}" class="dropdown-item">
                                        View Check In
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget-body">
                        {!! Form::model($checkin, ['route' => ['admin.check-in.update', $checkin->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

{{--                        @include('admin.checkin.fields')--}}

                        @include('admin.checkin.fields',['room_category'=>$room_category,'shepard'=>$shepard])

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
        roomOption({!! json_encode($rooms) !!});
        function roomOption(res) {
            var option = '<option value="">Select Room</option>';
            res.forEach(function (element) {
                option += '<option value="'+element.id+'" '+element.selected+'>'+element.name+'</option>';
            });

            $('#room_id').html(option);
        }
        (function ($) {

            'use strict';

            $(function () {
                $(document).on('change','#room_category',function () {
                    $.ajax({
                        url:'{{route('admin.check-in.create')}}',
                        data:{
                            id:$(this).val()
                        },
                        success:function (res) {
                            roomOption(res);

                        }
                    });

                });
            });

        })(jQuery);
    </script>
@endpush


