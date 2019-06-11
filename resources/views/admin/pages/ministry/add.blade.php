@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Ministry</h2>
                    <div>
                        <ul class="breadcrumb">
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
                            <h4>Add Ministry</h4>
                        </div>

                        <div class="widget-options">
                          <a href="{{ url('/admin/ministry') }}" class="btn btn-md btn-primary">Ministry List</a>
                        </div>
                    </div>

                    <div class="widget-body">
                        <form class="needs-validation" novalidate>

                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Ministry</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Enter Ministry">
                                </div>
                            </div>
                             <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Ministry Name</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Enter Ministry Name">
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Ministry Leader</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Enter Ministry Leader">
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Ministry Assistant</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Enter Ministry Assistant">
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

                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Meeting Time</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Enter Meeting Time">
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Events</label>
                                <div class="col-lg-5">
                           <input type="text" class="form-control" placeholder="Events">
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Website</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Enter Website Address">
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


