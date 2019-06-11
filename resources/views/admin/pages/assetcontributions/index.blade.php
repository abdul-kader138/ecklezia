@extends('admin.layout.admin')
@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Asset Contribution List</h2>
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{ url('/admin/asset_contribution/add') }}" class="btn btn-info btn-square mr-1 mb-2">Add Asset Contribution</a>
                        </li>

                        <li class="breadcrumb-item"><a href="{{url('/admin/home')}}"><i class="ti ti-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">App</a></li>
                        <li class="breadcrumb-item active">Asset Contribution</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <!-- Start Sorting -->
            <div class="widget has-shadow">

                <div class="widget-header bordered no-actions d-flex align-items-center flex-space-between">
                    <div class="widget-title">
                        <h4>Asset Contribution List</h4>
                    </div>

                    </div>

                    <div class="widget-body">
                        <div class="table-responsive">
                            <table id="sorting-table" class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>First,Last Name</th>
                                        <th>Phone</th>
                                        <th>Assets Donation</th>
                                        <th>Assesment Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mazharul Islam</td>
                                        <td>+123456999</td>
                                        <td>Donation</td>
                                        <td>$134.54</td>
                                        <td class="td-actions">
                                            <abbr title="View">
                                                <a href="{{ url('/admin/asset_contribution/view') }}"><i class="la la-eye view"></i></a>
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
                                        <td>Mazharul Islam</td>
                                        <td>+123456999</td>
                                        <td>Donation</td>
                                        <td>$134.54</td>
                                        <td class="td-actions">
                                            <abbr title="View">
                                                <a href="{{ url('/admin/asset_contribution/view') }}"><i class="la la-eye view"></i></a>
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
                                        <td>Mazharul Islam</td>
                                        <td>+123456999</td>
                                        <td>Donation</td>
                                        <td>$134.54</td>
                                        <td class="td-actions">
                                            <abbr title="View">
                                                <a href="{{ url('/admin/asset_contribution/view') }}"><i class="la la-eye view"></i></a>
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

