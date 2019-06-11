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
                            <a href="{{ url('/admin/checkin/add') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Check In</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/shepherds/add') }}" class="btn btn-info btn-square mr-1 mb-2">Add Shepherds</a>
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
                                    {!! Form::select('shepard_id',$shepherds, null, ['placeholder' => "Select Shepard", 'class' => 'form-control', 'tabindex' => "6"]) !!}
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Room Category</label>
                                <div class="col-lg-5">
                                    <div class="select">
                                        <select name="account" class="custom-select form-control" required>
                                            <option value="">Select an option</option>
                                            <option>Babies</option>
                                            <option>Toddlers 2-4 Years</option>
                                            <option>Children 5-7 Years</option>
                                            <option>Preteens 8-12 Years</option>
                                            <option>Teenagers 13-17 Years</option>
                                            <option>Young Adult 18-21 Years</option>
                                            <option>Adults 24+ Years</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select an option
                                        </div>
                                    </div>
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
                                    <input type="text" class="form-control" placeholder="Enter your room name">
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




