@extends('admin.layout.admin')
@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Import & Export</h2>
                <div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/admin/home')}}"><i class="ti ti-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">App</a></li>
                        <li class="breadcrumb-item active">Contribution</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <div class="row">
        <div class="col-xl-12">
            <!-- Start Sorting -->
            <div class="widget has-shadow">

                <div class="widget-header bordered no-actions ">

        <div class="page-header export-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Export</h2>
                <div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <button class="btn btn-primary buttons-excel buttons-html5"><span>Import Data</span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
  
                </div>

                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="export-table" class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th >Date</th>
                                    <th >Name</th>
                                    <th >Contribution Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sunday,February 12th,2019</td>
                                    <td>Mazharul Islam</td>
                                    <td>$134.54</td>
                                </tr>
                                <tr>
                                    <td>Sunday,February 12th,2019</td>
                                    <td>Mazharul Islam</td>
                                    <td>$134.54</td>
                                </tr>
                                <tr>
                                    <td>Sunday,February 12th,2019</td>
                                    <td>Mazharul Islam</td>
                                    <td>$134.54</td>
                                </tr>
                                <tr>
                                    <td>Sunday,February 12th,2019</td>
                                    <td>Mazharul Islam</td>
                                    <td>$134.54</td>
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

<script src="{{ asset('church//vendors/js/datatables/jszip.min.js')}}"></script>
<script src="{{asset('church/vendors/js/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('church/vendors/js/datatables/pdfmake.min.js')}}"></script>
<script src="{{asset('church/vendors/js/datatables/vfs_fonts.js')}}"></script>
<script src="{{asset('church/vendors/js/datatables/buttons.print.min.js')}}"></script>
<script src="{{asset('church/vendors/js/nicescroll/nicescroll.min.js')}}"></script>
<script src="{{asset('church/vendors/js/app/app.min.js')}}"></script>
<!-- End Page Vendor Js -->
<!-- Begin Page Snippets -->
<script src="{{asset('church/js/components/tables/tables.js')}}"></script>
<!-- End Page Snippets -->
@endpush

