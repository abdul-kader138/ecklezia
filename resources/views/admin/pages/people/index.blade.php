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
                        <li>
                            <a href="{{ url('/admin/peoples/add') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add People</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{url('/admin/home')}}"><i class="ti ti-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">App</a></li>
                        <li class="breadcrumb-item active">People</li>
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

                <div class="widget-header no-action bordered d-flex align-items-center flex-space-between">
                    <div class="widget-title">
                        <h4>People List</h4>
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
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Mobile Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="text-primary">1</span></td>
                                    <td><img width="40"  src="{{asset('church/img/avatar/avatar-02.jpg')}}" alt="..." class="rounded-circle mx-auto"></td>
                                    <td>Mazharul</td>
                                    <td>Islam</td>
                                    <td>mazhar@email.com</td>
                                    <td>01776444444</td>
                                    <td>FR</td>
                                    <td class="td-actions">
                                        <a href="{{ url('/admin/peoples/view') }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/peoples/edit') }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/peoples/delete') }}"><i class="la la-trash-o delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-primary">2</span></td>
                                    <td><img width="40"  src="{{asset('church/img/avatar/avatar-02.jpg')}}" alt="..." class="rounded-circle mx-auto"></td>
                                    <td>Mazharul</td>
                                    <td>Islam</td>
                                    <td>mazhar@email.com</td>
                                    <td>01776444444</td>
                                    <td>FR</td>
                                    <td class="td-actions">
                                        <a href="{{ url('/admin/peoples/view') }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/peoples/edit') }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/peoples/delete') }}"><i class="la la-trash-o delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-primary">3</span></td>
                                    <td><img width="40"  src="{{asset('church/img/avatar/avatar-02.jpg')}}" alt="..." class="rounded-circle mx-auto"></td>
                                    <td>Mazharul</td>
                                    <td>Islam</td>
                                    <td>mazhar@email.com</td>
                                    <td>01776444444</td>
                                    <td>FR</td>
                                    <td class="td-actions">
                                        <a href="{{ url('/admin/peoples/view') }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/peoples/edit') }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/peoples/delete') }}"><i class="la la-trash-o delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-primary">4</span></td>
                                    <td><img width="40"  src="{{asset('church/img/avatar/avatar-02.jpg')}}" alt="..." class="rounded-circle mx-auto"></td>
                                    <td>Mazharul</td>
                                    <td>Islam</td>
                                    <td>mazhar@email.com</td>
                                    <td>01776444444</td>
                                    <td>FR</td>
                                    <td class="td-actions">
                                        <a href="{{ url('/admin/peoples/view') }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/peoples/edit') }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/peoples/delete') }}"><i class="la la-trash-o delete"></i></a>
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

