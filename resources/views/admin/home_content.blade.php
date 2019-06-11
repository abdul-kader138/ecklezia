@extends('admin.layout.admin')

@section('content')
<div class="container-fluid">

    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Church Info</h2>
                <div>
                <ul class="breadcrumb">
                       <li>
                        <a href="{{ route('admin.associate-ministers.index') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Associate Pastors</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.sermon-planners.index') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Sermon Planner</a>
                    </li> 
                    <li>
                        <a href="{{ route('admin.confidential.index') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Confidential Notes</a>
                    </li>

                </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- Start Profile Row -->
    <div class="row flex-row">

        <div class="col-xl-4">
            <!-- Begin Widget -->
            <div class="widget has-shadow">
                <div class="widget-body">
                    <div class="mt-5">
                        <img src="{{ asset('church/img/avatar/avatar-01.jpg') }}" alt="..." style="width: 120px;" class="avatar rounded-circle d-block mx-auto">
                    </div>
                    <h4 class="text-center mt-3 mb-1">Mazharul Islam</h4>
                    <div class="em-separator separator-dashed"></div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <p class="nav-link">
                                <i class="la la-phone la-2x align-middle pr-2"></i>
                                <a href="javascript:void(0)">+253-34-1350697</a>
                            </p>
                        </li>

                        <li class="nav-item">
                            <p class="nav-link">
                                <i class="la la-fax la-2x align-middle pr-2"></i>
                                <a href="javascript:void(0)">+496-96-1406718</a>
                            </p>
                        </li>
                        <li class="nav-item">
                            <p class="nav-link">
                                <i class="la la-globe la-2x align-middle pr-2"></i>
                                <a href="http://www.syse.me" target="_blank" >http://www.syse.me</a>
                            </p>
                        </li>

                        <li class="nav-item">
                            <p class="nav-link">
                                <i class="la la-envelope la-2x align-middle pr-2"></i>
                                <a href="javascript:void(0)" >zafoxe@mailinator.com</a>
                            </p>
                        </li>

                        <li class="nav-item">
                            <p class="nav-link"><i class="la la-user la-2x align-middle pr-2"></i> Senior Pastor</p>
                        </li>

                        <li class="nav-item">
                            <p class="nav-link"><i class="la la-users la-2x align-middle pr-2"></i> Assistant Pastor</p>
                        </li>

                        <li class="nav-item">
                            <p class="nav-link"><i class="la la-user-plus la-2x align-middle pr-2"></i> Administrator</p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Widget -->
        </div>

        <div class="col-xl-8">
            <div class="widget has-shadow">

                <div class="widget-header bordered d-flex align-items-center">
                    <h4 class="col-xl-3">Church Profile</h4>
                    <ul class="social-network col-xl-9">
                        <li>
                            <img width="40"  src="{{asset('church/img/avatar/avatar-02.jpg')}}" alt="..." class="rounded-circle mx-auto">

                        </li>
                        <li>
                            <img width="40"  src="{{asset('church/img/avatar/avatar-02.jpg')}}" alt="..." class="rounded-circle mx-auto">
                        </li>
                        <li>
                            <img width="40"  src="{{asset('church/img/avatar/avatar-02.jpg')}}" alt="..." class="rounded-circle mx-auto">
                        </li>
                        <li>
                            <img width="40"  src="{{asset('church/img/avatar/avatar-02.jpg')}}" alt="..." class="rounded-circle mx-auto">
                        </li>
                    </ul>
                </div>
                <div class="widget-body">
                     <div class="col-12 table-header-bg">
                        <div class="section-title mb-3">
                            <h4 class="pt-3 pb-3">Biography</h4>
                        </div>
                    </div>
                                        <div class="col-12">
                        <div class="section-title mb-3">
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla felis justo, sodales nec turpis quis, tincidunt bibendum ipsum. Donec ac finibus mi. Quisque eget purus dictum, aliquam lectus vel, dapibus ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec commodo nisl eget turpis iaculis laoreet. Phasellus ultrices, dolor ut feugiat accumsan, ante magna tincidunt ipsum, quis cursus felis magna at ligula. Curabitur tristique dapibus faucibus. Duis porta faucibus nunc, quis venenatis elit tempus et.

Suspendisse ac accumsan velit. Nulla volutpat suscipit tortor ac fermentum. Etiam condimentum lectus eget lacus condimentum, dapibus placerat eros tempus. Vestibulum commodo auctor egestas. Morbi vehicula lobortis justo non placerat. Nam semper ultrices quam ut laoreet. Cras porta semper nulla, at vestibulum leo fringilla vitae. Suspendisse aliquet mi laoreet, iaculis lacus non, rhoncus quam. Ut ullamcorper, diam vitae dictum condimentum, orci nisi luctus enim, nec viverra purus nisi eget risus. Morbi pretium venenatis ligula a consequat. Nulla pellentesque consequat sapien in consectetur. Cras consequat justo eget nunc ultrices feugiat.</p>
                        </div>
                    </div>
                     <div class="col-12 table-header-bg">
                        <div class="section-title mb-3">
                            <h4 class="pt-3 pb-3">Church Informations</h4>
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
                            <label class="form-control-label">Web Address</label>
                            <p> mazhar.xyz</p> 
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
                            <h4 class="pt-3 pb-3">Family Informations</h4>
                        </div>
                    </div>
                        <div class="col-12">
                        <div class="section-title mb-3">
                                                <ul class="social-network col-xl-9">
                        <li>
                            <img width="40"  src="{{asset('church/img/avatar/avatar-02.jpg')}}" alt="..." class="rounded-circle mx-auto">

                        </li>
                        <li>
                            <img width="40"  src="{{asset('church/img/avatar/avatar-02.jpg')}}" alt="..." class="rounded-circle mx-auto">
                        </li>
                        <li>
                            <img width="40"  src="{{asset('church/img/avatar/avatar-02.jpg')}}" alt="..." class="rounded-circle mx-auto">
                        </li>
                        <li>
                            <img width="40"  src="{{asset('church/img/avatar/avatar-02.jpg')}}" alt="..." class="rounded-circle mx-auto">
                        </li>
                    </ul>
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