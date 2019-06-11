@extends('admin.layout.admin')
@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Pledge List</h2>
                <div>
                    <ul class="breadcrumb">
  <li>
                            <a href="{{ url('/admin/pledge/add') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Pledge</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">App</a></li>
                        <li class="breadcrumb-item active">Pledge</li>
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
                        <h4>Pledge List</h4>
                    </div>
<!-- 
                        <div class="widget-options">
                            <div class="dropdown">
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                    <i class="la la-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="{{ url('/admin/contribution/add') }}" class="dropdown-item">
                                        Add Contribution
                                    </a>
                                    <a href="{{ url('/admin/confidential') }}" class="dropdown-item">
                                        View Confidential
                                    </a>
                                </div>
                            </div>
                        </div> -->
                    </div>

                    <div class="widget-body">
                        <div class="table-responsive">
                            <table id="sorting-table" class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Pledge Id</th>
                                        <th>First,Last Name</th>
                                        <th>Phone</th>
                                        <th>Pledge Amount</th>
                                        <th>Pledge Paid</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>12022019-01</td>
                                        <td>Mazharul Islam</td>
                                        <td>1987654345</td>
                                        <td>$134.54</td>
                                        <td><span><span class="badge-text badge-text-small warning">Partial</span></span></td>
                                        <td class="td-actions">
                                            <abbr title="Edit">
                                                <a href="{{ url('/admin/confidential/edit') }}"><i class="la la-edit edit"></i></a>
                                            </abbr>
                                            <abbr title="Delete">
                                                <a href="{{ url('/admin/confidential/delete') }}"><i class="la la-trash-o delete"></i></a>
                                            </abbr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12022019-01</td>
                                        <td>Mazharul Islam</td>
                                        <td>1987654345</td>
                                        <td>$134.54</td>
                                        <td><span><span class="badge-text badge-text-small info">Paid</span></span></td>
                                        <td class="td-actions">
                                            <abbr title="Edit">
                                                <a href="{{ url('/admin/confidential/edit') }}"><i class="la la-edit edit"></i></a>
                                            </abbr>
                                            <abbr title="Delete">
                                                <a href="{{ url('/admin/confidential/delete') }}"><i class="la la-trash-o delete"></i></a>
                                            </abbr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12022019-01</td>
                                        <td>Mazharul Islam</td>
                                        <td>1987654345</td>
                                        <td>$134.54</td>
                                        <td><span><span class="badge-text badge-text-small info">Paid</span></span></td>
                                        <td class="td-actions">
                                            <abbr title="Edit">
                                                <a href="{{ url('/admin/confidential/edit') }}"><i class="la la-edit edit"></i></a>
                                            </abbr>
                                            <abbr title="Delete">
                                                <a href="{{ url('/admin/confidential/delete') }}"><i class="la la-trash-o delete"></i></a>
                                            </abbr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12022019-01</td>
                                        <td>Mazharul Islam</td>
                                        <td>1987654345</td>
                                        <td>$134.54</td>
                                        <td><span><span class="badge-text badge-text-small warning">Partial</span></span></td>
                                        <td class="td-actions">
                                            <abbr title="Edit">
                                                <a href="{{ url('/admin/confidential/edit') }}"><i class="la la-edit edit"></i></a>
                                            </abbr>
                                            <abbr title="Delete">
                                                <a href="{{ url('/admin/confidential/delete') }}"><i class="la la-trash-o delete"></i></a>
                                            </abbr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12022019-01</td>
                                        <td>Mazharul Islam</td>
                                        <td>1987654345</td>
                                        <td>$134.54</td>
                                        <td><span><span class="badge-text badge-text-small danger">Unpaid</span></span></td>
                                        <td class="td-actions">
                                            <abbr title="Edit">
                                                <a href="{{ url('/admin/confidential/edit') }}"><i class="la la-edit edit"></i></a>
                                            </abbr>
                                            <abbr title="Delete">
                                                <a href="{{ url('/admin/confidential/delete') }}"><i class="la la-trash-o delete"></i></a>
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

