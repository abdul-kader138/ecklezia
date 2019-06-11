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
                            <a href="{{ url('/admin/shepherds/add') }}" class="btn btn-info btn-square mr-1 mb-2">Add Shepherds</a>
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
        <div class="row">
            <div class="col-xl-12">
                <!-- Start Sorting -->
                <div class="widget has-shadow">

                    <div class="widget-header bordered no-actions d-flex align-items-center flex-space-between">
                        <div class="widget-title">
                            <h4>View Check In</h4>
                        </div>
                    </div>

                    <div class="widget-body">
                                            <div class="col-12 table-header-bg">
                        <div class="section-title mb-3">
                            <h4 class="pt-3 pb-3">Check In Details</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-6">
                            <label class="form-control-label">First Name</label>
                            <p> David Green</p> 
                        </div>
                        <div class="col-xl-6">
                            <label class="form-control-label">Last Name</label>
                            <p>Mazhar</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-6">
                            <label class="form-control-label">Phone</label>
                            <p> +1923894988</p> 
                        </div>
                        <div class="col-xl-6">
                            <label class="form-control-label">Email</label>
                            <p>mazhar@yahoo.com</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-6">
                            <label class="form-control-label">Check In</label>
                            <p>9:55 AM</p> 
                        </div>
                        <div class="col-xl-6">
                            <label class="form-control-label">Check Out</label>
                            <p>5:55 PM</p> 
                        </div>
                        
                    </div>
                                        <div class="form-group row">
                        <div class="col-xl-6">
                            <label class="form-control-label">Status</label>
                            <p><span style="width:100px;"><span class="badge-text badge-text-small danger">Check Out</span></span></p> 
                        </div>
                        <div class="col-xl-6">
                            <label class="form-control-label">Parent/Guardian</label>
                            <p>Mazharul Islam</p> 
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-6">
                            <label class="form-control-label">Mobile Number of The Guardian/Parent</label>
                            <p>09123812378</p> 
                        </div>
                        <div class="col-xl-6">
                            <label class="form-control-label">Shepard Name</label>
                            <p>Mazharul Islam</p> 
                        </div>
                        
                    </div>

                   
                    <div class="em-separator separator-dashed"></div>

                    </div>
                </div>
                <!-- End Sorting -->
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->
@endsection


