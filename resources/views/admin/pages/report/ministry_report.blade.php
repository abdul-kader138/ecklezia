@extends('admin.layout.admin')

@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Ministry List</h2>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <div class="row">
        <div class="col-xl-12">
            <!-- Start Sorting -->
            <div class="widget has-shadow">

                <div class="widget-header bordered d-flex align-items-center flex-space-between">
                    <div class="widget-title">
                        <h4>Ministry List</h4>
                    </div>

                </div>

                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="export-table" class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ministry Name</th>
                                    <th>Ministry Leader</th>
                                    <th>No of Members</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="text-primary">1</span></td>
                                    <td>Youth Ministry</td>
                                    <td>Mazharul Islam</td>
                                    <td>600</td>
                                    <td>193473847 </td>
                                </tr>
                                <tr>
                                    <td><span class="text-primary">1</span></td>
                                    <td>Youth Ministry</td>
                                    <td>Mazharul Islam</td>
                                    <td>600</td>
                                    <td>193473847 </td>
                                </tr>
                                <tr>
                                    <td><span class="text-primary">1</span></td>
                                    <td>Youth Ministry</td>
                                    <td>Mazharul Islam</td>
                                    <td>600</td>
                                    <td>193473847 </td>
                                </tr>
                                <tr>
                                    <td><span class="text-primary">1</span></td>
                                    <td>Youth Ministry</td>
                                    <td>Mazharul Islam</td>
                                    <td>600</td>
                                    <td>193473847 </td>
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
<script src="{{asset('church/vendors/js/datatables/jszip.min.js')}}"></script>
<script src="{{asset('church/vendors/js/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('church/vendors/js/datatables/pdfmake.min.js')}}"></script>
<script src="{{asset('church/vendors/js/datatables/vfs_fonts.js')}}"></script>
<script src="{{asset('church/vendors/js/datatables/buttons.print.min.js')}}"></script>
<!-- End Page Vendor Js -->
<!-- Begin Page Snippets -->
<script src="{{asset('church/js/components/tables/tables.js')}}"></script>
<!-- End Page Snippets -->
@endpush

