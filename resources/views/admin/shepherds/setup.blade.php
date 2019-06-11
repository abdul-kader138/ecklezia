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
                            <a href="{{ route('admin.check-in.create') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Check In</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.shepherd.create') }}" class="btn btn-info btn-square mr-1 mb-2">Add Shepherds</a>
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
                            <h4>Shepherds Setup</h4>
                        </div>

                    </div>

                    <div class="widget-body">
                        {!!Form::open(array('route'=>'admin.shepherd-setup.store','method'=>'POST', 'enctype'=>'multipart/form-data'))!!}
                        <div class="form-group row d-flex align-items-center">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Shepherd Name</label>
                            <div class="col-lg-5">
                                {!! Form::select('shepard_id',$shepherds, null, ['placeholder' => "Select Shepard", 'class' => 'custom-select form-control', 'tabindex' => "6"]) !!}
                            </div>
                        </div>

                        <div class="form-group row d-flex align-items-center">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Room Category</label>
                            <div class="col-lg-5">
                                {!! Form::select('room_category',$room_category, null, ['placeholder' => "Select Room Category", 'class' => 'custom-select form-control', 'tabindex' => "4",'id'=>'room_category']) !!}
                            </div>
                        </div>
                        <div class="form-group row d-flex align-items-center">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Select Room</label>
                            <div class="col-lg-5">
                                {!! Form::select('room_id',[], null, ['placeholder' => "Select Room", 'class' => 'custom-select form-control', 'tabindex' => "4" ,'id'=>'room_id']) !!}
                            </div>
                        </div>


                        <div class="form-group row d-flex align-items-center">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Class Guide</label>
                            <div class="col-lg-5">
                                <div class="select">
                                    <select name="account" class="custom-select form-control" required>
                                        <option value="">Select an option</option>
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                        <option>option 6</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select an option
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row d-flex align-items-center">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Service Assignment</label>
                            <div class="col-lg-5">
                                {!! Form::select('service_id',$services, null, ['placeholder' => "Select Service", 'class' => 'custom-select form-control', 'tabindex' => "6"]) !!}
                            </div>
                        </div>


                        <div class="text-center">
                            <button class="btn btn-gradient-04" type="submit">Submit Form</button>
                            <button class="btn btn-shadow" type="reset">Reset</button>
                        </div>

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



