@extends('admin.layout.admin')
@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Single Giving Details</h2>
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{ url('/admin/pledge/add') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Pledge</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/contribution/add') }}" class="btn btn-info btn-square mr-1 mb-2">Add Contribution</a>
                        </li>
                        <li>
                            <a href="javascript:viod(0)" data-toggle="modal" data-target="#modal-centered" class="btn btn-info btn-square mr-1 mb-2">Add Giving</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{url('/admin/home')}}"><i class="ti ti-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">App</a></li>
                        <li class="breadcrumb-item active">Contribution</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <div id="modal-centered" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Giving</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" novalidate>

                        <div class="form-group row d-flex align-items-center">
                            <label class="col-lg-5 form-control-label d-flex justify-content-lg-end">Full Name</label>
                            <div class="col-lg-6">
                                <input type="text" name="contributor_name" class="form-control" placeholder="Enter Full Your Name">
                            </div>
                        </div>

                        <div class="form-group row d-flex align-items-center">
                            <label class="col-lg-5 form-control-label d-flex justify-content-lg-end">Contribution Id</label>
                            <div class="col-lg-6">
                              <select class="selectpicker show-menu-arrow" data-live-search="true">
                                <option>Please Select</option>
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row d-flex align-items-center">
                        <label class="col-lg-5 form-control-label d-flex justify-content-lg-end">Method</label>
                        <div class="col-lg-6">
                           <div class="select">
                            <select name="giving_type" class="custom-select form-control" required>
                                <option value="">Select an option</option>
                                <option>Cash</option>
                                <option>Check</option>
                                <option>Credit</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select an option
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row d-flex align-items-center">
                    <label class="col-lg-5 form-control-label d-flex justify-content-lg-end">Amount</label>
                    <div class="col-lg-6">
                        <input type="text" name="contributor_name" class="form-control" placeholder="Enter Amount">
                    </div>
                </div>


                <div class="form-group row d-flex align-items-center">
                    <label class="col-lg-5 form-control-label d-flex justify-content-lg-end"> Contribution Account</label>
                    <div class="col-lg-6">
                        <input type="text" name="contributor_id" class="form-control" placeholder="Enter Contribution Account">
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-shadow" data-dismiss="modal">Save</button>
            <button data-toggle="modal" data-target="#modal-centered2" data-dismiss="modal" type="button" class="btn btn-primary">Save & Continue</button>
        </div>
    </div>
</div>
</div>

<div id="modal-centered2" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Giving</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate>

                    <div class="form-group row d-flex align-items-center">
                        <label class="col-lg-5 form-control-label d-flex justify-content-lg-end">Full Name</label>
                        <div class="col-lg-6">
                            <input type="text" name="contributor_name" class="form-control" placeholder="Enter Full Your Name">
                        </div>
                    </div>

                    <div class="form-group row d-flex align-items-center">
                        <label class="col-lg-5 form-control-label d-flex justify-content-lg-end">Contribution Id</label>
                        <div class="col-lg-6">
                          <select class="selectpicker show-menu-arrow" data-live-search="true">
                            <option>Please Select</option>
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row d-flex align-items-center">
                    <label class="col-lg-5 form-control-label d-flex justify-content-lg-end">Method</label>
                    <div class="col-lg-6">
                       <div class="select">
                        <select name="giving_type" class="custom-select form-control" required>
                            <option value="">Select an option</option>
                            <option>Cash</option>
                            <option>Check</option>
                            <option>Credit</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select an option
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row d-flex align-items-center">
                <label class="col-lg-5 form-control-label d-flex justify-content-lg-end">Amount</label>
                <div class="col-lg-6">
                    <input type="text" name="contributor_name" class="form-control" placeholder="Enter Amount">
                </div>
            </div>


            <div class="form-group row d-flex align-items-center">
                <label class="col-lg-5 form-control-label d-flex justify-content-lg-end"> Contribution Account</label>
                <div class="col-lg-6">
                    <input type="text" name="contributor_id" class="form-control" placeholder="Enter Contribution Account">
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-shadow" data-dismiss="modal">Save</button>
        <button data-toggle="modal" data-target="#modal-centered" data-dismiss="modal" type="button" class="btn btn-primary">Save & Continue</button>
    </div>
</div>
</div>
</div>
<!-- End Row -->
<div class="row flex-row">
    <div class="col-xl-3">
        <!-- Begin Widget -->
        <div class="widget has-shadow">
            <div class="widget-body">
                <div class="mt-5">
                    <img src="{{asset('church/img/avatar/avatar-01.jpg')}}" alt="Profile Photo" style="width: 120px;" class="avatar rounded-circle d-block mx-auto">
                </div>
                <h3 class="text-center mt-3 mb-1">David Green</h3>
                <p class="text-center">dgreen@example.com</p>
                <div class="em-separator separator-dashed"></div>

            </div>
        </div>
        <!-- End Widget -->
    </div>
    <div class="col-xl-9">
        <div class="widget has-shadow">
      
<div class="widget-header bordered no-actions d-flex align-items-center">
            <h4>Giving Details</h4>
                                    </div>
            <div class="widget-body">

                <div class="table-responsive">
                    <table class="table table-bordered giving-table">
                        <thead>
                            <tr>
                                <th class="text-center bg-light-ash">Contribution Id</th>
                                <th class="text-center"> 12022019-01</th>
                                <th class="text-center bg-light-ash">Giving Type</th>
                                <th class="text-center">Tithes & Offerings</th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th class="text-center bg-light-ash">Method</th>
                                <th class="text-center"> Check</th>
                                <th class="text-center bg-light-ash">Amount</th>
                                <th class="text-center">$1887.09</th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th class="text-center bg-light-ash">Date</th>
                                <th class="text-center"> Sunday,February 12th,2019</th>
                                <th class="text-center bg-light-ash"> Contribution Account</th>
                                <th class="text-center">Mazharul Islam</th>
                            </tr>
                        </thead>
                    </table>
                </div>


                <div class="em-separator separator-dashed"></div>

            </div>
        </div>
    </div>
</div>
<!-- End Row -->
</div>
<!-- End Container -->
@endsection



