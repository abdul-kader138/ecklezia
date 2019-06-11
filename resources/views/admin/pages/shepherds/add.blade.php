@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Shepherds</h2>
                    <div>
                        <ul class="breadcrumb">
                                                    <li>
                            <a href="{{ url('/admin/checkin/add') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Check In</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/shepherds/setup') }}" class="btn btn-info btn-square mr-1 mb-2">Add Shepherds Set Up</a>
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
                            <h4>Add Shepherds Information</h4>
                        </div>
 <div class="widget-options">
                          <a href="{{ url('/admin/shepherds') }}" class="btn btn-md btn-primary">Shepherds List</a>
                        </div>
                    </div>

                    <div class="widget-body">
                        <form class="needs-validation" novalidate>

                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">First Name</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Enter your first name">
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Last Name</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Enter your last name">
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Email</label>
                                <div class="col-lg-5">
                                    <input type="email" class="form-control" placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Username</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Enter your username">
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Password</label>
                                <div class="col-lg-5">
                                    <input type="password" class="form-control" placeholder="Enter your password">
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Phone Number</label>
                                <div class="col-lg-5">
                                    <div class="input-group">
                                                        <span class="input-group-addon addon-primary">
                                                            <i class="la la-phone"></i>
                                                        </span>
                                        <input type="text" class="form-control" placeholder="Phone number">
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button class="btn btn-gradient-04" type="submit">Submit Form</button>
                                <button class="btn btn-shadow" type="reset">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Form -->
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->
@endsection
