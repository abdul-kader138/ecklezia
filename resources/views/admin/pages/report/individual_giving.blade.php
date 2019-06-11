@extends('admin.layout.admin')

@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Individual Giving List</h2>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <div class="row">
        <div class="col-xl-12">
            <div class="form-group row">
                <label class="col-lg-3 form-control-label">Filter Your Result</label>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" placeholder="Enter Name" class="form-control">
                            <small>Enter Name</small>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" id="date" name="date" placeholder="Start Date" class="form-control">
                                <small>Enter Start Date</small>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" id="date2" name="date2" placeholder="End Date" class="form-control">
                                <small>Enter End Date</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Row -->
    <div class="row">
        <div class="col-xl-12">
            <!-- Start Sorting -->
            <div class="widget has-shadow">

                <div class="widget-header bordered d-flex align-items-center flex-space-between">
                    <div class="widget-title">
                        <h4>Individual Giving</h4>
                    </div>

                </div>

                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="export-table" class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Giving Type</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="text-primary">1</span></td>
                                    <td>February 12th,2019</td>
                                    <td>Mazharul Islam</td>
                                    <td>Tithes</td>
                                    <td>$150 </td>
                                </tr>
                                <tr>
                                    <td><span class="text-primary">1</span></td>
                                    <td>February 12th,2019</td>
                                    <td>Mazharul Islam</td>
                                    <td>Tithes</td>
                                    <td>$150 </td>
                                </tr>
                                <tr>
                                    <td><span class="text-primary">1</span></td>
                                    <td>February 12th,2019</td>
                                    <td>Mazharul Islam</td>
                                    <td>Tithes</td>
                                    <td>$150 </td>
                                </tr>
                                <tr>
                                    <td><span class="text-primary">1</span></td>
                                    <td>February 12th,2019</td>
                                    <td>Mazharul Islam</td>
                                    <td>Tithes</td>
                                    <td>$150 </td>
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

