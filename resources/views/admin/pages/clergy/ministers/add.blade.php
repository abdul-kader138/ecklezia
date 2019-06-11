@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Associate Ministers</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/admin/home')}}"><i class="ti ti-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">App</a></li>
                            <li class="breadcrumb-item active">Associate Ministers</li>
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
                            <h4>Add Personal Information</h4>
                        </div>

                        <div class="widget-options">
                            <div class="dropdown">
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                    <i class="la la-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="{{ url('/admin/ministers/add') }}" class="dropdown-item">
                                        Add Minister
                                    </a>
                                    <a href="{{ url('/admin/ministers') }}" class="dropdown-item">
                                        View Minister
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget-body">
                        <!-- Start Add Personal Information -->
                        <div class="row">
                            <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                <div class="col-lg-6">
                                    <div class="row d-flex align-items-center mb-5">
                                        <label class="col-lg-3 form-control-label">Upload Photo</label>
                                        <div class="col-lg-9">
                                            <div class="mt-5 mb-5 position-relative">
                                                <div class="group material-input">
                                                    <input type="file" name="photo" required>
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-lg-3 form-control-label">First Name</label>
                                        <div class="col-lg-9">
                                            <div class="mt-5 mb-5 position-relative">
                                                <div class="group material-input">
                                                    <input type="text" name="fname" required>
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>First Name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-lg-3 form-control-label">Middle Name</label>
                                        <div class="col-lg-9">
                                            <div class="mt-5 mb-5 position-relative">
                                                <div class="group material-input">
                                                    <input type="text" name="mname" required>
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Middle Name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-lg-3 form-control-label">Last Name</label>
                                        <div class="col-lg-9">
                                            <div class="mt-5 mb-5 position-relative">
                                                <div class="group material-input">
                                                    <input type="text" name="lname" required>
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Last Name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-lg-3 form-control-label">E-mail</label>
                                        <div class="col-lg-9">
                                            <div class="mt-5 mb-5 position-relative">
                                                <div class="group material-input">
                                                    <input type="text" name="email" required>
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Email</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="row d-flex align-items-center mb-5">
                                        <label class="col-lg-3 form-control-label">Phone Number</label>
                                        <div class="col-lg-9">
                                            <div class="mt-5 mb-5 position-relative">
                                                <div class="group material-input">
                                                    <input type="text" name="pnumber" required>
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Phone Number</label>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-lg-3 form-control-label">Mobile Number</label>
                                        <div class="col-lg-9">
                                            <div class="mt-5 mb-5 position-relative">
                                                <div class="group material-input">
                                                    <input type="text" name="mnumber" required>
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Mobile Number</label>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-lg-3 form-control-label">Website</label>
                                        <div class="col-lg-9">
                                            <div class="mt-5 mb-5 position-relative">
                                                <div class="group material-input">
                                                    <input type="text" name="website" required>
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Website</label>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="col-lg-3 form-control-label">Education</label>
                                        <div class="col-lg-9">
                                            <div class="mt-5 mb-5 position-relative">
                                                <div class="group material-input">
                                                    <input type="text" name="education" required>
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Education</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Add Personal Information -->

                        <div class="widget-header bordered no-actions d-flex align-items-center flex-space-between">
                            <div class="widget-title">
                                <h4>Ministerial Leader Responsibility</h4>
                            </div>
                        </div>

                        <!-- Start Add Ministerial Leader Responsibility -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row d-flex align-items-center mb-5">

                                    <label class="col-lg-3 form-control-label">Position</label>
                                    <div class="col-lg-9">
                                        <div class="mt-5 mb-5 position-relative">
                                            <div class="group material-input">
                                                <input type="text" name="position" required>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label>Position</label>
                                            </div>
                                        </div>
                                    </div>

                                    <label class="col-lg-3 form-control-label">Group</label>
                                    <div class="col-lg-9">
                                        <div class="mt-5 mb-5 position-relative">
                                            <div class="group material-input">
                                                <input type="text" name="group" required>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label>Group</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="row d-flex align-items-center mb-5">

                                    <label class="col-lg-3 form-control-label">Education</label>
                                    <div class="col-lg-9">
                                        <div class="mt-5 mb-5 position-relative">
                                            <div class="group material-input">
                                                <textarea name="education" required placeholder="Education"></textarea>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                {{--<label>Education</label>--}}
                                            </div>
                                        </div>
                                    </div>

                                    <label class="col-lg-3 form-control-label">&nbsp;</label>
                                    <div class="col-lg-9">
                                        <div class="mt-5 mb-5 position-relative pull-right">
                                            <input type="submit" value="Add" class="btn btn-gradient-04 mr-1 mb-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Add Ministerial Leader Responsibility -->
                    </div>
                </div>
                <!-- End Sorting -->
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->
@endsection

