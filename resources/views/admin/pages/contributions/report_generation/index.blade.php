@extends('admin.layout.admin')
@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Report Generation</h2>
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
            <!-- Begin Invoice -->
            <div class="invoice has-shadow">
                <!-- Begin Invoice COntainer -->
                <div class="invoice-container">
                    <!-- Begin Invoice Top -->
                    <div class="invoice-top">
                        <div class="row d-flex align-items-center">

                            <div class="col-xl-3">
                                <label class="form-control-label">Report Type</label>
                                <select class="form-control">
                                    <option>Please Select</option>
                                    <option>Family Givings</option>
                                    <option>Individual Givings</option>
                                    <option>All Givings</option>
                                </select>
                            </div>
                            <div class="col-xl-2">
                                <label class="form-control-label">Filter By</label>
                                <select class="form-control">
                                    <option>Please Select</option>
                                    <option>Date</option>
                                    <option>Month</option>
                                    <option>Year</option>
                                </select>
                            </div>
                            <div class="col-xl-3">
                                <label class="form-control-label">Date</label>
<input type="text" class="form-control" name="date" id="date" name="">
                            </div>
                            <div class="col-xl-2">
                                <label class="form-control-label"></label>
                                <button type="button" class="btn btn-md btn-primary full-width">Print</button>
                            </div>
                            <div class="col-xl-2">
                                <label class="form-control-label"></label>
                                <button type="button" class="btn btn-md btn-primary full-width">Download</button>
                            </div>
                        </div>
                    </div>
                    <!-- End Invoice Top -->
                    <div class="invoice-date d-flex justify-content-xl-end justify-content-center">
                        <span>Febuary 22, 2018</span>
                    </div>
                    <!-- Begin Table -->
                    <div class="col-xl-12 desc-tables">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-left">Date</th>
                                        <th class="text-center">Giving Type</th>
                                        <th class="text-center">Contribution Account</th>
                                        <th class="text-center">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left">
                                         Sunday,February 12th,2019
                                     </td>
                                     <td class="text-center">Tithes</td>
                                     <td class="text-center">Mazharul</td>
                                     <td class="text-center">$1887.09</td>
                                 </tr>
                                 <tr>
                                    <td class="text-left">
                                     Sunday,February 12th,2019
                                 </td>
                                 <td class="text-center">Tithes</td>
                                 <td class="text-center">Mazharul</td>
                                 <td class="text-center">$1887.09</td>
                             </tr>
                             <tr>
                                <td class="text-left">
                                 Sunday,February 12th,2019
                             </td>
                             <td class="text-center">Tithes</td>
                             <td class="text-center">Mazharul</td>
                             <td class="text-center">$1887.09</td>
                         </tr>
                         <tr>
                            <td class="text-left">
                             Sunday,February 12th,2019
                         </td>
                         <td class="text-center">Tithes</td>
                         <td class="text-center">Mazharul</td>
                         <td class="text-center">$1887.09</td>
                     </tr>
                 </tbody>
             </table>
         </div>
     </div>
     <!-- End Table -->
 </div>
 <!-- End Invoice Container -->
 <!-- Begin Invoice Footer -->
 <div class="invoice-footer">
    <!-- Begin Invoice Container -->
    <div class="invoice-container">
        <div class="row d-flex align-items-center">
            <div class="col-xl-6 col-md-6 col-sm-6 d-flex justify-content-xl-start justify-content-md-start justify-content-center mb-2">
                <div class="bank">
                    <div class="title">Bank Info</div>
                    <div class="text">Bank Name: Bank Of America</div>
                    <div class="text">Account Number: 123 456 789</div>
                    <div class="text">Code: ELM0236US</div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 col-sm-6 d-flex justify-content-xl-end justify-content-md-end justify-content-center">
                <div class="total">
                    <div class="title">Total</div>
                    <div class="number">$5804.09</div>
                    <div class="taxe">Taxes Included</div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="thx">
                <i class="la la-heart"></i><span>Thank You!</span>
            </div>
            <div class="website">www.be-elisyam.com</div>
        </div>
    </div>
    <!-- End Invoice Container -->
</div>
<!-- End Invoice Footer -->
</div>
<!-- End Invoice -->
</div>
</div>
</div>
<!-- End Container -->
@endsection

@push('alljs')
<script src="{{ asset('church/vendors/js/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/datatables/vfs_fonts.js') }}"></script>

@endpush

