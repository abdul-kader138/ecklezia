@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Single Asset Contribution</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/admin/home')}}"><i class="ti ti-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">App</a></li>
                            <li class="breadcrumb-item active">Asset Contribution</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- Start Profile Row -->
    <div class="row flex-row">


        <div class="col-xl-12">
            <div class="widget has-shadow">
                <div class="widget-header bordered d-flex align-items-center">
                    <h4>Asset Contribution</h4>
                </div>
                <div class="widget-body">
                    <div class="col-12 table-header-bg">
                        <div class="section-title mb-3">
                            <h4 class="pt-3 pb-3">Personal Informations</h4>
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


                    <div class="col-12 table-header-bg">
                        <div class="section-title mb-3">
                            <h4 class="pt-3 pb-3">Address Informations</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-6">
                            <label class="form-control-label">Address</label>
                            <p> USA</p> 
                        </div>
                        <div class="col-xl-6">
                            <label class="form-control-label">City</label>
                            <p>USA</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-6">
                            <label class="form-control-label">State</label>
                            <p> USA</p> 
                        </div>
                        <div class="col-xl-6">
                            <label class="form-control-label">Zip Code</label>
                            <p>24345</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-6">
                            <label class="form-control-label">Country</label>
                            <p> USA</p> 
                        </div>
                        
                    </div>

                    <div class="col-12 table-header-bg">
                        <div class="section-title mb-3">
                            <h4 class="pt-3 pb-3">Financial Officer</h4>
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
                        <div class="col-xl-12">
                            <label class="form-control-label">Description</label>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p> 
                        </div>
                    </div>
                       <div class="form-group row">
                        <div class="col-xl-6">
                            <label class="form-control-label">Estimates Amount</label>
                            <p>$145</p>
                        </div>
                    </div>

                    <div class="em-separator separator-dashed"></div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Profile Row -->
    </div>
    <!-- End Container -->
@endsection


