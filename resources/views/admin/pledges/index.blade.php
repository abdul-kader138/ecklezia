@extends('admin.layout.admin')
@section('content')
<style type="text/css">
    .td-actions {
float: left;
    }
</style>
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Pledge List</h2>
                <div>
                    <ul class="breadcrumb">
  <li>
                            <a href="{{ route('admin.pledge.create') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Pledge</a>
                        </li>
                         <li>
                            <a href="{{ route('admin.contribution.create') }}" class="btn btn-info btn-square mr-1 mb-2">Add Contribution</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.contribution_giving.create') }}" class="btn btn-info btn-square mr-1 mb-2">Add Giving</a>
                        </li>
                         <li>
                                <a href="{{ route('admin.asset-contribution.create') }}"
                                   class="btn btn-info btn-square mr-1 mb-2">Add Asset Contribution</a>
                            </li>
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
                    </div>

                    <div class="widget-body">
                        <div class="table-responsive">
                            <table id="sorting-table" class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Purpose</th>
                                        <th>Total Pledge Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>Saturday , 5th Augest 2019</td>
                                            <td>Church Building</td>
                                            <td>$ 5000</td>
                                            
                                            <td class="td-actions">
                                                
                                                <abbr title="View">
                                                    <a href="{{ url('/admin/pledges/individual') }}"><i class="la la-eye view"></i></a>
                                                </abbr>
                                                <abbr title="edit">
                                                    <a href=""><i class="la la-edit edit"></i></a>
                                                </abbr>
                                                <abbr title="Delete">
                                                 <a href=""> <i class="la la-trash-o delete"></i></a>  
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

