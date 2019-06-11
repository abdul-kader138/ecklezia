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
                <h2 class="page-header-title">Expenditure List</h2>
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{ url('/admin/accounting/expenditure/add') }}"  class="btn btn-info btn-square mr-1 mb-2">Add Expenditure</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/accounting/expenditure') }}" class="btn btn-info btn-square mr-1 mb-2">Expenditure List</a>
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
                        <h4>Expenditure List</h4>
                    </div>

                </div>

                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total Amount</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allExpenditure as $expenditur)
                                <tr>
                                    <td>{{ $expenditur->category }}</td>
                                    <td>{{ $expenditur->product }}</td>
                                    <td>{{ $expenditur->qty }}</td>
                                    <td>{{ $expenditur->price }}</td>
                                    <td>{{ $expenditur->qty * $expenditur->price }}</td>
                                    <td>{{ $expenditur->exp_date }}</td>
                                    
                                    <td class="td-actions">       
                                        <a href="javascript:viod(0);" data-toggle="modal" data-target="#modal-expenditur{{ $expenditur->id }}"><i class="la la-eye view"></i></a>
                                        
                                        <a href="{{ url('/admin/accounting/expenditure/edit/'.$expenditur->id) }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/accounting/expenditure/delete/'.$expenditur->id) }}"><i class="la la-trash-o delete"></i></a>

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

@foreach($allExpenditure as $expenditur)
<div id="modal-expenditur{{ $expenditur->id }}" class="modal fade">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Expenditur Details</h4>
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
                        <label class="col-md-5 control-label" for="lname">Product</label>
                        <div class="col-md-12">
                            <input name="product" type="text" class="form-control" placeholder="Product" value="{{ $expenditur->product }}" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-5 control-label" for="lname">Price</label>
                        <div class="col-md-12">
                            <input name="price" type="text" class="form-control" placeholder="Price" value="{{ $expenditur->price }}" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-5 control-label" for="lname">Total Amount</label>
                        <div class="col-md-12">
                            <input name="price" type="text" class="form-control" placeholder="Price" value="{{ $expenditur->price*$expenditur->qty }}"  readonly>
                        </div>
                    </div>


                </fieldset>
            </div>

            <div class="col-md-6">
                <fieldset>
                    <div class="form-group">
                        <label class="col-md-5 control-label" for="title">Expenditure Category</label>
                        <div class="col-md-12">
                            <input name="category" type="text" class="form-control" placeholder="Expenditure Category" value="{{ $expenditur->category }}" readonly>
                        </div>
                    </div>
                                <div class="form-group">
                        <label class="col-md-5 control-label">Quantity</label>
                        <div class="col-md-12">
                            <input name="qty" type="text" class="form-control" placeholder="Quantity" value="{{ $expenditur->qty }}" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-5 control-label">Date</label>
                        <div class="col-md-12">
                       <input id="start_date" name="exp_date" value="{{ $expenditur->exp_date }}" type="text" class="form-control" disabled>
                        </div>
                    </div>
                    <!-- Name input-->

                </fieldset>
            </div>
                <div class="col-md-12">
                <fieldset>

                    <div class="form-group">
                        <label class="col-md-5 control-label" for="sermon">Description</label>
                        <div class="col-md-12"><p> <?php echo $expenditur->description; ?></p>
                        </div>
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

