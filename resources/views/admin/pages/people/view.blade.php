@extends('admin.layout.admin')

@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">People Profile</h2>
                <div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/admin/home')}}"><i class="ti ti-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">App</a></li>
                        <li class="breadcrumb-item active">People</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- Start Profile Row -->
    <div class="row flex-row">

        <div class="col-xl-3">
            <!-- Begin Widget -->
            <div class="widget has-shadow">
                <div class="widget-body">
                    <ul class="social-network">
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
                    <div class="em-separator separator-dashed"></div>
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
                                <a href="javascript:void(0)" >zafoxe@gmail.com</a>
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

        <div class="col-xl-9">
            <div class="widget has-shadow">

                <div class="widget-body sliding-tabs">
                    <ul class="nav nav-tabs profile-tabs" id="example-one" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" id="base-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Personal Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="base-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Ministry Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="base-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Financial Profile</a>
                        </li>
                    </ul>
                    <div class="tab-content pt-3">
                        <div class="tab-pane fade active show" id="tab-1" role="tabpanel" aria-labelledby="base-tab-1">
                            <div class="col-12 table-header-bg">
                             <div class="d-flex align-items-center">
                                <h4 class="page-header-title pt-3 pb-3">Personal Information</h4>
                                <div>
                                    <div class="page-header-tools">
                                        <a class="btn btn-gradient-01" href="#">Edit Profile</a>
                                    </div>
                                </div>
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

                        <div class="em-separator separator-dashed"></div>
                    </div>
                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="base-tab-2">
                     <div class="table-responsive">
                        <table id="sorting-table2" class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ministry Name</th>
                                    <th>Position</th>
                                    <th>Membership</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tithes</td>
                                    <td>FR</td>
                                    <td>HR</td>
                                    <td class="td-actions">
                                        <abbr title="View">
                                            <a href=""><i class="la la-eye view"></i></a>
                                        </abbr>
                                        <abbr title="Edit">
                                            <a href=""><i class="la la-edit edit"></i></a>
                                        </abbr>
                                        <abbr title="Delete">
                                            <a href=""><i class="la la-trash-o delete"></i></a>
                                        </abbr>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Tithes</td>
                                    <td>FR</td>
                                    <td>HR</td>
                                    <td class="td-actions">
                                        <abbr title="View">
                                            <a href=""><i class="la la-eye view"></i></a>
                                        </abbr>
                                        <abbr title="Edit">
                                            <a href=""><i class="la la-edit edit"></i></a>
                                        </abbr>
                                        <abbr title="Delete">
                                            <a href=""><i class="la la-trash-o delete"></i></a>
                                        </abbr>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tithes</td>
                                    <td>FR</td>
                                    <td>HR</td>
                                    <td class="td-actions">
                                        <abbr title="View">
                                            <a href=""><i class="la la-eye view"></i></a>
                                        </abbr>
                                        <abbr title="Edit">
                                            <a href=""><i class="la la-edit edit"></i></a>
                                        </abbr>
                                        <abbr title="Delete">
                                            <a href=""><i class="la la-trash-o delete"></i></a>
                                        </abbr>
                                    </td>
                                    
                                </tr>
                                

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="base-tab-3">
                 <div class="table-responsive">
                    <table id="sorting-table" class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Contribution Type</th>
                                <th>Method</th>
                                <th>Amount</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sunday,February 12th,2019</td>
                                <td>Tithes</td>
                                <td>Card</td>
                                <td>$145</td>
                                <td class="td-actions">
                                    <abbr title="View">
                                        <a href=""><i class="la la-eye view"></i></a>
                                    </abbr>
                                    <abbr title="Edit">
                                        <a href=""><i class="la la-edit edit"></i></a>
                                    </abbr>
                                    <abbr title="Delete">
                                        <a href=""><i class="la la-trash-o delete"></i></a>
                                    </abbr>
                                </td>

                            </tr>
                                                        <tr>
                                <td>Sunday,February 12th,2019</td>
                                <td>Tithes</td>
                                <td>Card</td>
                                <td>$145</td>
                                <td class="td-actions">
                                    <abbr title="View">
                                        <a href=""><i class="la la-eye view"></i></a>
                                    </abbr>
                                    <abbr title="Edit">
                                        <a href=""><i class="la la-edit edit"></i></a>
                                    </abbr>
                                    <abbr title="Delete">
                                        <a href=""><i class="la la-trash-o delete"></i></a>
                                    </abbr>
                                </td>

                            </tr>
                                                        <tr>
                                <td>Sunday,February 12th,2019</td>
                                <td>Tithes</td>
                                <td>Card</td>
                                <td>$145</td>
                                <td class="td-actions">
                                    <abbr title="View">
                                        <a href=""><i class="la la-eye view"></i></a>
                                    </abbr>
                                    <abbr title="Edit">
                                        <a href=""><i class="la la-edit edit"></i></a>
                                    </abbr>
                                    <abbr title="Delete">
                                        <a href=""><i class="la la-trash-o delete"></i></a>
                                    </abbr>
                                </td>

                            </tr>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
<!-- End Profile Row -->
</div>
<!-- End Container -->
@endsection

@push('alljs')
<script src="{{ asset('church/vendors/js/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/datatables/vfs_fonts.js') }}"></script>

<script>
    (function ($) {

        'use strict';

        $(function () {
            $('#sorting-table').DataTable({
                "lengthMenu": [
                [10, 15, 20, -1],
                [10, 15, 20, "All"]
                ],
                "order": [
                [3, "desc"]
                ]
            });
        });

    })(jQuery);
</script>
<script>
    (function ($) {

        'use strict';

        $(function () {
            $('#sorting-table2').DataTable({
                "lengthMenu": [
                [10, 15, 20, -1],
                [10, 15, 20, "All"]
                ],
                "order": [
                [3, "desc"]
                ]
            });
        });

    })(jQuery);
</script>
@endpush

