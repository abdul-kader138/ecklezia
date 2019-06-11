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
    <!-- End Page Header -->
        <div class="row">
        <div class="col-xl-12">
            <!-- Start Sorting -->
            <div class="widget has-shadow">



                    <div class="widget-body">
                               <div class="row">

                            <div class="form-group col-xl-4">
                                <label class="form-control-label">Report Type</label>
                                <select class="form-control">
                                    <option>Please Select</option>
                                    <option>Family Givings</option>
                                    <option>Individual Givings</option>
                                    <option>All Givings</option>
                                </select>
                            </div>
                            <div class="form-group col-xl-4">
                                <label class="form-control-label">Filter By</label>
                                <select class="form-control">
                                    <option>Please Select</option>
                                    <option>Date</option>
                                    <option>Month</option>
                                    <option>Year</option>
                                </select>
                            </div>

                            <div class="form-group col-xl-2">
                                <label class="form-control-label"></label>
                                <button type="button" class="btn btn-md btn-primary full-width">Print</button>
                            </div>
                            <div class="form-group col-xl-2">
                                <label class="form-control-label"></label>
                                <button type="button" class="btn btn-md btn-primary full-width">Download</button>
                            </div>
                            <div class="form-group col-xl-4">
                                <label class="form-control-label">Name</label>
                               <input type="text" name="name" class="form-control" placeholder="Enter Name">
                            </div>
                            <div class="form-group col-xl-4">
                                <label class="form-control-label">Start Date</label>
                               <input type="text" name="start_date" class="form-control" id="start_date" >
                            </div>
                            <div class="form-group col-xl-4">
                                <label class="form-control-label">End Date</label>
                               <input type="text" name="end_date" class="form-control" id="end_date" >
                            </div>

                        </div>

                        <h2 class="text-right mt-2">22 February 2019</h2>
                        <div class="table-responsive">
                            <table id="sorting-table" class="table mb-0">
                                <thead>
                                    <tr>
                                    <th class="text-left">Date</th>
                                        <th class="text-center">Giving Type</th>
                                        <th class="text-center">Contribution Account</th>
                                        <th class="text-center">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                              @foreach($contributions as $contribution)
                                        <tr>
                                            <td>{{$contribution->created_at->isoFormat('dddd,MMMM Do,YYYY')}}</td>
                                            <td class="text-center">{{optional($contribution->contribution)->giving_type}}</td>
                                            <td class="text-center">{{$contribution->account}}</td>
                                            <td class="text-center">${{$contribution->amount}}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="4">
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                              <div class="bank">
                    <div class="title"><strong> Bank Info : </strong></div>
                    <div class="text">Bank Name: Bank Of America</div>
                    <div class="text">Account Number: 123 456 789</div>
                    <div class="text">Code: ELM0236US</div>
                </div>
                                        </td>
                                        <td colspan="2">
                                                     <div class="table-responsive">
                            <table class="table table-bordered">
                              <tbody>
                                <tr>
                                  <td>Sub Total</td>
                                  <td class="text-xs-right">$ <span class="sub_total">{{number_format($contributions->sum('amount'))}}</span></td>
                                </tr>
                                <tr>
                                  <td>TAX</td>
                                  <td class="text-xs-right">$ <span class="tax_total">0</span></td>
                                </tr>
  
                              <input type="hidden" class="fgrand_total" name="fgrand_total" value="0">
                              <tr>
                                <td>Grand Total</td>
                                <td class="text-xs-right">$ <span class="grand_total">{{number_format($contributions->sum('amount'))}}</span></td>
                              </tr>
                                </tbody>
                              
                              
                            </table>
                          </div> 
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

@endsection

@push('alljs')
<script src="{{ asset('church/vendors/js/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/datatables/vfs_fonts.js') }}"></script>

@endpush

