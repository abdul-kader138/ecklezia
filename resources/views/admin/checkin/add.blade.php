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
                        <li>
                            <a href="{{ route('admin.shepherd.create') }}" class="btn btn-info btn-square mr-1 mb-2">Add Shepherds</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.shepherd-setup.create') }}" class="btn btn-info btn-square mr-1 mb-2">Add Shepherds Set Up</a>
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
                            <h4>Add Check In Information</h4>
                        </div>

                        <div class="widget-options">
                          <a href="{{ route('admin.check-in.index') }}" class="btn btn-md btn-primary">Check In List</a>
                        </div>
                    </div>

                    <div class="widget-body">
                        <div class="col-md-12">
                            {!!Form::open(array('route'=>'admin.check-in.store','method'=>'POST', 'enctype'=>'multipart/form-data'))!!}

                            @include('admin.checkin.fields',['room_category'=>$room_category,'shepard'=>$shepard])

                            {!! Form::close() !!}
                        </div>
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

                          var option = '<option value="">Select Room</option>';
                          res.forEach(function (element) {
                              option += '<option value="'+element.id+'">'+element.name+'</option>';
                          });

                          $('#room_id').html(option);
                      }
                  });

               });
            });

        })(jQuery);
    </script>
@endpush


