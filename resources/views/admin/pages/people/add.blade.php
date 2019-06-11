@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Peoples</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/admin/home')}}"><i class="ti ti-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">App</a></li>
                            <li class="breadcrumb-item active">Peoples</li>
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

                    <div class="widget-header bordered d-flex align-items-center flex-space-between">
                        <div class="widget-title">
                            <h4>Add People</h4>
                        </div>

                    </div>

                    <div class="widget-body">
                        <div class="row flex-row justify-content-center">
                            <div class="col-xl-10">
                                <div id="rootwizard">
                                    <div class="step-container">
                                        <div class="step-wizard">
                                            <div class="progress">
                                                <div class="progressbar"></div>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#tab1" data-toggle="tab">
                                                        <span class="step">1</span>
                                                        <span class="title">Step 1</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab2" data-toggle="tab">
                                                        <span class="step">2</span>
                                                        <span class="title">Step 2</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab3" data-toggle="tab">
                                                        <span class="step">3</span>
                                                        <span class="title">Step 3</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="tab1">
                                            <div class="section-title mt-5 mb-5">
                                                <h4>Client Informations</h4>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <div class="col-xl-6 mb-3">
                                                    <label class="form-control-label">First Name<span class="text-danger ml-2">*</span></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-control-label">Last Name<span class="text-danger ml-2">*</span></label>
                                                    <input type="text"  class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <div class="col-xl-6 mb-3">
                                                    <label class="form-control-label">Member  Category<span class="text-danger ml-2">*</span></label>
                                                    <select name="country" class="custom-select form-control">
                                                        <option value="">Select</option>
                                                        <option value="babies">Babies</option>
                                                        <option value="toddler_2-4">Toddler  2-4 years older</option>
                                                        <option value="volunteer">5-7—Children</option>
                                                        <option value="volunteer">8-12 Pre-Teens</option>
                                                        <option value="volunteer">13-17- Teenager</option>
                                                        <option value="volunteer">18-21 Young Adults</option>
                                                        <option value="volunteer">21+adulst</option>
                                                    </select>
                                                </div>

                                                <div class="col-xl-6">
                                                    <label class="form-control-label">Cell Number</label>
                                                    <div class="input-group">
                                                    <span class="input-group-addon addon-secondary">
                                                    <i class="la la-mobile-phone"></i>
                                                                        </span>
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <div class="col-xl-6 mb-3">
                                                    <label class="form-control-label">People Type<span class="text-danger ml-2">*</span></label>
                                                    <select name="country" class="custom-select form-control">
                                                        <option value="">Select</option>
                                                        <option value="church_member">Church Member</option>
                                                        <option value="visitor">Visitor</option>
                                                        <option value="volunteer">Volunteer</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="section-title mt-5 mb-5">
                                                <h4>Address</h4>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <div class="col-xl-6 mb-3">
                                                    <label class="form-control-label">Address<span class="text-danger ml-2">*</span></label>
                                                    <input type="text"  class="form-control">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-control-label">Country<span class="text-danger ml-2">*</span></label>
                                                    <select name="country" class="custom-select form-control">
                                                        <option value="">Select</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AX">Åland Islands</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AS">American Samoa</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <div class="col-xl-4 mb-3">
                                                    <label class="form-control-label">City<span class="text-danger ml-2">*</span></label>
                                                    <input type="text"  class="form-control">
                                                </div>
                                                <div class="col-xl-4 mb-5">
                                                    <label class="form-control-label">State<span class="text-danger ml-2">*</span></label>
                                                    <input type="email"  class="form-control">
                                                </div>
                                                <div class="col-xl-4">
                                                    <label class="form-control-label">Zip<span class="text-danger ml-2">*</span></label>
                                                    <input type="email"  class="form-control">
                                                </div>
                                            </div>
                                            <ul class="pager wizard text-right">
                                                <li class="previous d-inline-block">
                                                    <a href="javascript:;" class="btn btn-secondary ripple">Previous</a>
                                                </li>
                                                <li class="next d-inline-block">
                                                    <a href="javascript:;" class="btn btn-gradient-01">Next</a>
                                                </li>
                                            </ul>
                                        </div><!-- /#tab1 -->

                                        <div class="tab-pane" id="tab2">
                                            <div class="section-title mt-5 mb-5">
                                                <h4>Account Details</h4>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <div class="col-xl-6 mb-3">
                                                    <label class="form-control-label">User Name<span class="text-danger ml-2">*</span></label>
                                                    <input type="text"  class="form-control">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-control-label">Password<span class="text-danger ml-2">*</span></label>
                                                    <input type="text"  class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <div class="col-xl-6 mb-3">
                                                    <label class="form-control-label">Gender<span class="text-danger ml-2">*</span></label>
                                                    <select name="country" class="custom-select form-control">
                                                        <option value="">Select</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>

                                                <div class="col-xl-6 mb-3">
                                                    <label class="form-control-label">Household Status<span class="text-danger ml-2">*</span></label>
                                                    <select name="country" class="custom-select form-control">
                                                        <option value="">Select</option>
                                                        <option value="single">Single</option>
                                                        <option value="married">Married</option>
                                                        <option value="divorced">Divorced</option>
                                                        <option value="engaged">Engaged</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="section-title mt-3 mb-3">
                                                <h4>Mailing Address</h4>
                                                <div class="styled-checkbox mt-1">
                                                            <input type="checkbox" name="checkbox" id="check-1">
                                                            <label for="check-1">Same as Address</label>
                                                        </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <div class="col-xl-6 mb-3">
                                                    <label class="form-control-label">Address<span class="text-danger ml-2">*</span></label>
                                                    <input type="text"  class="form-control">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-control-label">Country<span class="text-danger ml-2">*</span></label>
                                                    <select name="country" class="custom-select form-control">
                                                        <option value="">Select</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AX">Åland Islands</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AS">American Samoa</option>
                                                        <option value="AD">Andorra</option>


                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <div class="col-xl-4 mb-3">
                                                    <label class="form-control-label">City<span class="text-danger ml-2">*</span></label>
                                                    <input type="text"  class="form-control">
                                                </div>
                                                <div class="col-xl-4 mb-5">
                                                    <label class="form-control-label">State<span class="text-danger ml-2">*</span></label>
                                                    <input type="email" class="form-control">
                                                </div>
                                                <div class="col-xl-4">
                                                    <label class="form-control-label">Zip<span class="text-danger ml-2">*</span></label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                            <ul class="pager wizard text-right">
                                                <li class="previous d-inline-block">
                                                    <a href="javascript:;" class="btn btn-secondary ripple">Previous</a>
                                                </li>
                                                <li class="next d-inline-block">
                                                    <a href="javascript:;" class="btn btn-gradient-01">Next</a>
                                                </li>
                                            </ul>
                                        </div><!-- /#tab2 -->

                                        <div class="tab-pane" id="tab3">
                                            <div class="section-title mt-5 mb-5">
                                                <h4>Client Information</h4>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <div class="col-xl-6 mb-3">
                                                    <label class="form-control-label">People Category<span class="text-danger ml-2">*</span></label>
                                                    <select name="country" class="custom-select form-control">
                                                        <option value="">Select</option>
                                                        <option value="option1">Option One</option>
                                                        <option value="option2">Option Two</option>
                                                        <option value="option3">Option Three</option>
                                                        <option value="option4">Option Foure</option>
                                                    </select>
                                                </div>

                                                <div class="col-xl-6">
                                                    <label class="form-control-label">Date of Birth<span class="text-danger ml-2">*</span></label>
                                                    <input type="text" placeholder="Date of Birth" class="form-control" id="date_of_birth">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <div class="col-xl-6 mb-3">
                                                    <label class="form-control-label">Phone</label>
                                                    <div class="input-group">
                                                                        <span class="input-group-addon addon-secondary">
                                                                            <i class="la la-phone"></i>
                                                                        </span>
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 mb-3">
                                                    <label class="form-control-label">Baptized<span class="text-danger ml-2">*</span></label>
                                                    <input type="text"  class="form-control">
                                                </div>
                                            </div>

                                            <div class="section-title mt-5 mb-5">
                                                <h4>Administrative Privilages</h4>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <div class="col-xl-6">
                                                    <label class="form-control-label">Admin Access<span class="text-danger ml-2">*</span></label>
                                                    <select name="admin-access" class="custom-select form-control">
                                                        <option value="">Select</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="master_admin">Master Admin</option>
                                                        <option value="miniterial_admin">Miniterial Admin</option>
                                                        <option value="pastorial_admin">Pastorial Admin</option>
                                                        <option value="church_member">Church Member</option>
                                                        <option value="volunteer">Volunteer</option>
                                                    </select>
                                                </div>

                                                <div class="col-xl-6 mb-3">
                                                    <label class="form-control-label">Membership Unique ID<span class="text-danger ml-2">*</span></label>
                                                    <input type="text"  class="form-control">
                                                </div>
                                            </div>


                                            <ul class="pager wizard text-right">
                                                <li class="previous d-inline-block">
                                                    <a href="javascript:void(0)" class="btn btn-secondary ripple">Previous</a>
                                                </li>
                                                <li class="next d-inline-block">
                                                    <input type="submit" value="Submit" class="finish btn btn-gradient-04">
                                                </li>
                                            </ul>
                                        </div><!-- /#tab3 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Sorting -->
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->
@endsection

@push('alljs')
    <script src="{{ asset('church/vendors/js/bootstrap-wizard/bootstrap.wizard.min.js') }}"></script>

    <script>
        $(function () {
            $('#rootwizard').bootstrapWizard({
                onTabShow: function (tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index + 1;
                    var $percent = ($current / $total) * 100;
                    $('#rootwizard .progressbar').css({
                        width: $percent + '%'
                    });
                }
            });
            $('#rootwizard .finish').click(function () {
                $('#success-modal').modal();
            });
        });
    </script>
@endpush

