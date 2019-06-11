@extends('admin.layout.account_admin')

@section('content')
<style>
.daterangepicker {
    z-index: 1200 !important;
}
</style>
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Purchase List</h2>
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{ url('/admin/accounting/purchase/add') }}"  class="btn btn-info btn-square mr-1 mb-2">Add Purchase</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/accounting/purchase') }}" class="btn btn-info btn-square mr-1 mb-2">Purchase List</a>
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
                        <h4>Purchase List</h4>
                    </div>

                </div>

                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allPurchase as $purchase)
                                    <tr>
                                        <td>{{ $purchase->category }}</td>
                                        <td>{{ $purchase->product }}</td>
                                        <td>{{ $purchase->price }}</td>
                                        <td>{{ $purchase->qty }}</td>
                                        <td>{{ $purchase->price * $purchase->qty }}</td>
                                        <td>{{ $purchase->date }}</td>                                        
                                        <td class="td-actions">                                            
                                        <a href="javascript:viod(0);" data-toggle="modal" data-target="#modal-purchase{{ $purchase->id }}"><i class="la la-eye view"></i></a>
                                            <a href="{{ url('/admin/accounting/purchase/edit/'.$purchase->id) }}"><i class="la la-edit edit"></i></a>
                                            <a href="{{ url('/admin/accounting/purchase/delete/'.$purchase->id) }}"><i class="la la-trash-o delete"></i></a>

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
 @foreach($allPurchase as $purchase)
<div id="modal-purchase{{ $purchase->id }}" class="modal fade">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Purchase Details</h4>
                <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
            </div>
            <div class="modal-body">
         <form>
 <div class="row">
    <div class="col-md-6">
        <fieldset>
            <div class="form-group">
                <label class="col-md-5 control-label" for="title">Purchase Category</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Purchase Category" name="category" value="{{ $purchase->category }}" readonly>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-5 control-label" for="lname">Price</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Price" name="price" value="{{ $purchase->price }}" readonly>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-5 control-label" for="end">Purchase Date</label>
                <div class="col-md-12">
                    <input type="text" id="end_date" class="form-control" placeholder="Purchase Date" name="date" value="{{ $purchase->date }}" readonly>
                </div>
            </div>
<!--             <div class="form-group">
    <label class="col-md-5 control-label" for="color">Total Amount</label>
    <div class="col-md-12">
        <input type="text" class="form-control" placeholder="Total Amount" name="total_amount" value="{{ $purchase->total_amount }}" readonly>
    </div>
</div> -->
        </fieldset>
    </div>

    <div class="col-md-6">
        <fieldset>

            <div class="form-group">
                <label class="col-md-5 control-label" for="lname">Product</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Product" name="product" value="{{ $purchase->product }}" readonly>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-md-5 control-label" for="start_date">Quantity</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Quantity" name="qty" value="{{ $purchase->qty }}" readonly>
                </div>
            </div>
            <!-- Name input-->

        </fieldset>
    </div>
        <div class="col-md-12">
        <fieldset>

            <div class="form-group">
                <label class="col-md-5 control-label" for="sermon">Description</label>
                <div class="col-md-12"><p><?php echo $purchase->description; ?></p>
                    <!-- <textarea name="description" class="form-control" id="basic-example" rows="4" disabled></textarea> -->
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-5 control-label" for="sermon">Invoice Copy</label>
                <div class="col-md-4">                    
                    <img src="{{ asset('uploads/images/files/'.$purchase->file) }}" height="70" width="70" alt="">
                </div>
               <!--  <div class="col-md-8">                    
                   <input type="file" class="form-control"  name="file">
               </div> -->
            </div>

            <div class="form-group">
                <label class="col-md-5 control-label" for="color">&nbsp;</label>
                <div class="col-md-12">
                    <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                </div>
            </div>
        </fieldset>
    </div>
</div>
       </form>
</div>
</div>
</div>
<!-- End Centered Modal -->
@endforeach

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

