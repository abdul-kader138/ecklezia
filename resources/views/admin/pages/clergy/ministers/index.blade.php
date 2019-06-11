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
                        <li>
                            <a href="{{ url('/admin/ministers/add') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Minister</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/ministers') }}" class="btn btn-info btn-square mr-1 mb-2"> View Minister</a>
                        </li>

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
                            <h4>Ministerial List</h4>
                        </div>

                    </div>

                    <div class="widget-body">
                        <div class="table-responsive">
                            <table id="sorting-table" class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Photo</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Minister Leader's Email</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="text-primary">1</span></td>
                                        <td>
                                            <img src="{{ asset('church/img/avatar/avatar-01.jpg') }}" alt="Image" class="table_image">
                                        </td>
                                        <td>Constance</td>
                                        <td>Breanna</td>
                                        <td>Meyers</td>
                                        <td>viban@mailinator.com</td>
                                        <td>September 29, 2018, 4:45 pm</td>
                                        <td class="td-actions">
                                            <a href="{{ url('/admin/ministers/edit') }}"><i class="la la-edit edit"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-primary">2</span></td>
                                        <td>
                                            <img src="{{ asset('church/img/avatar/avatar-02.jpg') }}" alt="Image" class="table_image">
                                        </td>
                                        <td>Reuben</td>
                                        <td>Emerson</td>
                                        <td>Hawkins</td>
                                        <td>silif@mailinator.net</td>
                                        <td>September 29, 2018, 4:45 pm</td>
                                        <td class="td-actions">
                                            <a href="{{ url('/admin/ministers/edit') }}"><i class="la la-edit edit"></i></a>
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

