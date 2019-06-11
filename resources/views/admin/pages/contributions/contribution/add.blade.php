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
                            <h4>Add Contribution</h4>
                        </div>
                    </div>

                    <div class="widget-body">
                        <form class="needs-validation" novalidate>

                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"> Name</label>
                                <div class="col-lg-5">
                                    <input type="text" name="contributor_name" class="form-control" placeholder="Enter Your Name">
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Posted/Unposted</label>
                                <div class="col-lg-5">
                                 <div class="select">
                                        <select name="post_type" class="custom-select form-control" required>
                                            <option value="">Select an option</option>
                                            <option>Posted</option>
                                            <option>Unposted</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select an option
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Date</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" name="date" id="date" placeholder="Select value">
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Giving Type</label>
                                <div class="col-lg-5">
                                 <div class="select">
                                        <select name="giving_type" class="custom-select form-control" required>
                                            <option value="">Select an option</option>
                                            <option>Tithes</option>
                                            <option>Offerings</option>
                                            <option>Tithes & Offerings</option>
                                            <option>Pledge</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select an option
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"> Contribution Id</label>
                                <div class="col-lg-5">
                                    <input type="text" name="contributor_id" class="form-control" placeholder="Enter Contribution Id">
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"> Financial Officer</label>
                                <div class="col-lg-5">
                                    <input type="text" name="financial_officer" class="form-control" placeholder="Enter Financial Officer">
                                </div>
                            </div>

                            <div class="text-center">
                                <button class="btn btn-gradient-04" type="submit">Save</button>
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


