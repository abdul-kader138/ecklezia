@extends('admin.layout.account_admin')

@section('content')
<style>
.daterangepicker {
    z-index: 1200 !important;
}
.dropdown-toggle::after{
    content: none !important; 
}
.btn {
    padding: 10px !important;
}
</style>
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Direct Invoices</h2>
                <div>
                                        <ul class="breadcrumb">
                        <li>
                            <div class="btn-group mr-1 mb-2">
                                <button type="button" class="btn btn-info btn-square ">Customer Invoice</button>
                                <a class="btn btn-info btn-square  dropdown-toggle d-flex align-items-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-angle-down mr-0"></i>
                                </a>
                                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(66px, 40px, 0px);">
                                    <a class="dropdown-item" href="{{ url('/admin/accounting/customer_invoice') }}">Customer Invoices</a>
                                    <a class="dropdown-item" href="{{ url('/admin/accounting/customer_invoice/add') }}">New Customer Invoice</a>
                                </div>
                            </div>
                        </li>
                        <li>
                          <div class="btn-group mr-1 mb-2">
                            <button type="button" class="btn btn-info btn-square ">Direct Invoice</button>
                            <a class="btn btn-info btn-square  dropdown-toggle d-flex align-items-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-angle-down mr-0"></i>
                            </a>
                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(66px, 40px, 0px);">
                             <a class="dropdown-item" href="{{ url('/admin/accounting/direct_invoice') }}">Direct Invoices</a>
                             <a class="dropdown-item" href="{{ url('/admin/accounting/direct_invoice/add') }}">Create Direct Invoice</a>
                         </div>
                     </div>
                 </li>
                 <li>
                    <div class="btn-group mr-1 mb-2">
                        <button type="button" class="btn btn-info btn-square ">Quotes</button>
                        <a class="btn btn-info btn-square  dropdown-toggle d-flex align-items-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-angle-down mr-0"></i>
                        </a>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(66px, 40px, 0px);">
                          <a class="dropdown-item" href="{{ url('/admin/accounting/quotes') }}">Quotes</a>
                          <a class="dropdown-item" href="{{ url('/admin/accounting/quotes/add') }}">New Quote</a>
                      </div>
                  </div>
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

            <div class="widget-header bordered d-flex align-items-center flex-space-between">
                <div class="widget-title">
                    <h4>List All Invoices</h4>
                </div>

            </div>

            <div class="widget-body">
                <div class="table-responsive">
                    <table id="sorting-table" class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Invoice No</th>
                                <th>Customer</th>
                                <th>Total</th>
                                <th>Invoice Date</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allInvoice as $invoice)
                            <tr>
                                <td>#{{ $invoice->invoice_number }}</td>
                                <td>{{ $invoice->customer_name }}</td>
                                <td>{{ $invoice->grand_total }}</td>
                                <td>{{ $invoice->invoice_date }}</td>
                                <td>{{ $invoice->due_date }} </td>
                                <td>@if($invoice->status == 1)
                                    <button type="button" class="btn btn-success btn-square btn-sm mr-1 mb-2">Paid</button>
                                    @else
                                    <button type="button" class="btn btn-danger btn-square btn-sm mr-1 mb-2">Due</button>
                                    @endif
                                </td>

                                <td class="td-actions">

                                    <a href="{{ url('/admin/accounting/direct_invoice/edit/'.$invoice->id) }}"><i class="la la-edit edit"></i></a>
                                    <a href="{{ url('/admin/accounting/direct_invoice/delete/'.$invoice->id) }}"><i class="la la-trash-o delete"></i></a>

                                </td>
                            </tr>
                            @endforeach

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

