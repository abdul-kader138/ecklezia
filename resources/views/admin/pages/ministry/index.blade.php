@extends('admin.layout.admin')

@section('content')
<style type="text/css">
    .group-card .name {
        margin-top: 10px;
    }
    ..widget-body {
        padding: 10px;
    }
</style>
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Ministry List</h2>
                <div>
                    <ul class="breadcrumb">
                       <li>
                        <a href="{{ url('/admin/ministry/add') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Ministry</a>
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

        <div class="row">
            <div class="col-xl-3 col-md-4 col-sm-6 col-remove">
                <!-- Begin Card -->
                <div class="widget-image has-shadow">
                    <div class="group-card">
                        <!-- Begin Widget Body -->
                        <div class="widget-body">
                            <div class="quick-actions">
                                <div class="dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                        <i class="la la-circle-o-notch"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item remove"> 
                                            <i class="la la-trash"></i>Delete
                                        </a>
                                        <a href="#" class="dropdown-item"> 
                                            <i class="la la-edit"></i>Edit
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="cover-image mx-auto">
                          
                                <img src="{{asset('church/img/group/01.jpg')}}" alt="..." class="rounded-circle mx-auto">
                              
                            </div>
                            <h4 class="name"><a href="{{url('/admin/ministry/view')}}">Youth Ministry</a></h4>
                            <div class="category">UI Design</div>
                            <div class="stats text-center">
                                <span class="counter">8,456</span> 
                                <span class="text">Ministry Members</span>
                            </div>
                            <div class="group-members text-center mt-2">
                                <a href="javascript:void(0);">
                                    <img src="{{asset('church/img/avatar/avatar-02.jpg')}}" class="img-fluid rounded-circle" alt="...">
                                </a>
                                <a href="javascript:void(0);">
                                    <img src="{{asset('church/img/avatar/avatar-04.jpg')}}" class="img-fluid rounded-circle" alt="...">
                                </a>
                                <a href="javascript:void(0);">
                                    <img src="{{asset('church/img/avatar/avatar-06.jpg')}}" class="img-fluid rounded-circle" alt="...">
                                </a>
                                <a href="javascript:void(0);">
                                    <img src="{{asset('church/img/avatar/avatar-07.jpg')}}" class="img-fluid rounded-circle" alt="...">
                                </a>
                                <a href="javascript:void(0);">
                                    <img src="{{asset('church/img/avatar/avatar-05.jpg')}}" class="img-fluid rounded-circle" alt="...">
                                </a>
                            </div>
                            <div class="text-center mt-2 pb-3">
                                <a href="javascript:void(0);" class="btn btn-primary ripple" data-toggle="modal" data-target="#modal-centered">Add Member</a>
                            </div>
                        </div>
                        <!-- End Widget Body -->
                    </div>
                </div>
                <!-- End Card -->
            </div>

        </div>
        <!-- End Row -->
    </div>
            <!-- Begin Centered Modal -->
        <div id="modal-centered" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Member</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" novalidate>

                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Enter Name">
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Image</label>
                                <div class="col-lg-10">
                                  <div class="cover-image mx-auto">
                                <img width="50" height="50" src="{{asset('church/img/group/01.jpg')}}" alt="..." class="rounded-circle mx-auto">
                            </div>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Email</label>
                                <div class="col-lg-10">
                                  <input type="email" class="form-control" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Phone</label>
                                <div class="col-lg-10">
                                  <input type="number" class="form-control" placeholder="Enter Phone Number">
                                </div>
                            </div>

                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Centered Modal -->
                     </form>
</div>
<!-- End Row -->
</div>
<!-- End Container -->
@endsection


