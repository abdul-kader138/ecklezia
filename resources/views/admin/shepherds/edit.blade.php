@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Shepherds</h2>
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
                            <h4>Update Shepherds Information</h4>
                        </div>

                        <div class="widget-options">
                            <div class="dropdown">
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                    <i class="la la-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="{{ url('/admin/shepherds/add') }}" class="dropdown-item">
                                        Add Check In
                                    </a>
                                    <a href="{{ url('/admin/shepherds') }}" class="dropdown-item">
                                        View Check In
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget-body">
                        <form class="needs-validation" novalidate>

                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">First Name</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Enter your first name">
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Last Name</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Enter your last name">
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Username</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Enter your username">
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Password</label>
                                <div class="col-lg-5">
                                    <input type="password" class="form-control" placeholder="Enter your password">
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center mb-5">
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

                            <div class="form-group row d-flex align-items-center mb-5">
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


                            <div class="form-group row d-flex align-items-center mb-5">
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

                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Service Assignment</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Enter your room name">
                                </div>
                            </div>

                            <div class="text-center">
                                <button class="btn btn-gradient-01" type="submit">Update</button>
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


