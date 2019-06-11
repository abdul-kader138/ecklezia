@extends('admin.layout.admin')
@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Contribution List</h2>
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
    <div class="row">
        <div class="col-xl-12">
            <!-- Start Sorting -->
            <div class="widget has-shadow">

                <div class="widget-header bordered no-actions d-flex align-items-center flex-space-between">
                    <div class="widget-title">
                        <h4>Contribution List</h4>
                    </div>

                    </div>

                    <div class="widget-body">
                        <div class="table-responsive">
                            <table id="sorting-table" class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th width="22%">Date</th>
                                        <th width="28%">Giving Type</th>
                                        <th width="12%">Status</th>
                                        <th width="18%">Amount</th>
                                        <th width="20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sunday,February 12th,2019</td>
                                        <td>Tithes</td>
                                        <td><span><span class="badge-text badge-text-small danger">Unposted</span></span></td>
                                        <td>$134.54</td>
                                        <td class="td-actions">
                                            <abbr title="View">
                                                <a href="{{ url('/admin/contribution/view') }}"><i class="la la-eye view"></i></a>
                                            </abbr>
                                            <abbr title="Edit">
                                                <a href="{{ url('/admin/contribution/edit') }}"><i class="la la-edit edit"></i></a>
                                            </abbr>
                                            <abbr title="Delete">
                                                <a href="{{ url('/admin/contribution/delete') }}"><i class="la la-trash-o delete"></i></a>
                                            </abbr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sunday,February 12th,2019</td>
                                        <td>Offerings</td>
                                        <td><span><span class="badge-text badge-text-small info">Posted</span></span></td>
                                        <td>$145</td>
                                        <td class="td-actions">
                                            <abbr title="View">
                                                <a href="{{ url('/admin/contribution/view') }}"><i class="la la-eye view"></i></a>
                                            </abbr>
                                            <abbr title="Edit">
                                                <a href="{{ url('/admin/contribution/edit') }}"><i class="la la-edit edit"></i></a>
                                            </abbr>
                                            <abbr title="Delete">
                                                <a href="{{ url('/admin/contribution/delete') }}"><i class="la la-trash-o delete"></i></a>
                                            </abbr>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>Sunday,February 12th,2019</td>
                                        <td>Tithes</td>
                                        <td><span><span class="badge-text badge-text-small danger">Unposted</span></span></td>
                                        <td>$134.54</td>
                                        <td class="td-actions">
                                            <abbr title="View">
                                                <a href="{{ url('/admin/contribution/view') }}"><i class="la la-eye view"></i></a>
                                            </abbr>
                                            <abbr title="Edit">
                                                <a href="{{ url('/admin/contribution/edit') }}"><i class="la la-edit edit"></i></a>
                                            </abbr>
                                            <abbr title="Delete">
                                                <a href="{{ url('/admin/contribution/delete') }}"><i class="la la-trash-o delete"></i></a>
                                            </abbr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sunday,February 12th,2019</td>
                                        <td>Offerings</td>
                                        <td><span><span class="badge-text badge-text-small info">Posted</span></span></td>
                                        <td>$145</td>
                                        <td class="td-actions">
                                            <abbr title="View">
                                                <a href="{{ url('/admin/contribution/view') }}"><i class="la la-eye view"></i></a>
                                            </abbr>
                                            <abbr title="Edit">
                                                <a href="{{ url('/admin/contribution/edit') }}"><i class="la la-edit edit"></i></a>
                                            </abbr>
                                            <abbr title="Delete">
                                                <a href="{{ url('/admin/contribution/delete') }}"><i class="la la-trash-o delete"></i></a>
                                            </abbr>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>Sunday,February 12th,2019</td>
                                        <td>Tithes</td>
                                        <td><span><span class="badge-text badge-text-small danger">Unposted</span></span></td>
                                        <td>$134.54</td>
                                        <td class="td-actions">
                                            <abbr title="View">
                                                <a href="{{ url('/admin/contribution/view') }}"><i class="la la-eye view"></i></a>
                                            </abbr>
                                            <abbr title="Edit">
                                                <a href="{{ url('/admin/contribution/edit') }}"><i class="la la-edit edit"></i></a>
                                            </abbr>
                                            <abbr title="Delete">
                                                <a href="{{ url('/admin/contribution/delete') }}"><i class="la la-trash-o delete"></i></a>
                                            </abbr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sunday,February 12th,2019</td>
                                        <td>Offerings</td>
                                        <td><span><span class="badge-text badge-text-small info">Posted</span></span></td>
                                        <td>$145</td>
                                        <td class="td-actions">
                                            <abbr title="View">
                                                <a href="{{ url('/admin/contribution/view') }}"><i class="la la-eye view"></i></a>
                                            </abbr>
                                            <abbr title="Edit">
                                                <a href="{{ url('/admin/contribution/edit') }}"><i class="la la-edit edit"></i></a>
                                            </abbr>
                                            <abbr title="Delete">
                                                <a href="{{ url('/admin/contribution/delete') }}"><i class="la la-trash-o delete"></i></a>
                                            </abbr>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
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
    @endpush

