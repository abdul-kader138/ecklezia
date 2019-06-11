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
                <h2 class="page-header-title">Assets List</h2>
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="javascript:viod(0);" data-toggle="modal" data-target="#modal-asset" class="btn btn-info btn-square mr-1 mb-2">Add Assets</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/accounting/depreciation') }}" class="btn btn-info btn-square mr-1 mb-2">Assets List</a>
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
                        <h4>Assets List</h4>
                    </div>

                </div>

                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Purchase Year</th>
                                    <th>Cost</th>
                                    <th>Lifespan</th>
                                    <th>Salvage Value</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($depreciations as $depreciation)
                                <tr>
                                    <td>{{ $depreciation->asset_name }}</td>
                                    <td>{{ $depreciation->purchase_year }}</td>
                                    <td>{{ $depreciation->cost }}</td>
                                    <td>{{ $depreciation->lifespan }}</td>
                                    <td>{{ $depreciation->salvage_value }}</td>                               
                                    <td class="td-actions">
                                        <a href="javascript:viod(0);" data-toggle="modal" data-target="#modal-asset{{ $depreciation->id }}"><i class="la la-eye view"></i></a>
                                        <a href="{{ url('/admin/depreciation/edit/'.$depreciation->id) }}"><i class="la la-edit edit"></i></a>
                                        <a href="{{ url('/admin/depreciation/delete/'.$depreciation->id) }}"><i class="la la-trash-o delete"></i></a>

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
<!-- Begin Centered Modal -->
<div id="modal-asset" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Asset</h4>
                <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/admin/accounting/asset-save') }}" method="POST">
                    @csrf
                <div class="row">
                  <div class="form-group col-xl-6">
                    <label>Asset Name</label>
                    <input type="text" class="form-control" placeholder="Asset Name" name="asset_name" required>
                </div>
                <div class="form-group col-xl-6">
                     <label>Purchase Year</label>
                    <input type="text" class="form-control" placeholder="Purchase Year" name="purchase_year" required>
                </div>
            </div>
                            <div class="row">
                  <div class="form-group col-xl-6">
                    <label>Cost</label>
                    <input type="text" class="form-control" placeholder="Cost" name="cost" required>
                </div>
                <div class="form-group col-xl-6">
                     <label>Lifespan</label>
                    <input type="text" class="form-control" placeholder="Lifespan" name="lifespan" required>
                </div>
            </div>
                <div class="row">
                  <div class="form-group col-xl-12">
                    <label>Salvage Value</label>
                    <input type="text" class="form-control" placeholder="Salvage Value" name="salvage_value"  required>
                </div>
                </div>
                <div class="row">
                <div class="form-group col-xl-12">
                     <label>Description</label>
                     <textarea class="form-control" id="basic-example" name="description"></textarea>
                </div>
            </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
       </form>
</div>
</div>
</div>
<!-- End Centered Modal -->

@foreach($depreciations as $asset)
<!-- Begin Deposit Modal -->
<div id="modal-asset{{ $asset->id }}" class="modal fade">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Asset Details</h4>
                <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
            </div>
            <div class="modal-body">
         <form>
     <div class="row">
                  <div class="form-group col-xl-6">
                    <label>Asset Name</label>
                    <input type="text" class="form-control" placeholder="Asset Name" name="asset_name" value="{{ $asset->asset_name }}" disabled>
                </div>
                <div class="form-group col-xl-6">
                     <label>Purchase Year</label>
                    <input type="text" class="form-control" placeholder="Purchase Year" value="{{ $asset->purchase_year }}" name="purchase_year" disabled>
                </div>
            </div>
                            <div class="row">
                  <div class="form-group col-xl-6">
                    <label>Cost</label>
                    <input type="text" class="form-control" placeholder="Cost" value="{{ $asset->cost }}" name="cost" disabled>
                </div>
                <div class="form-group col-xl-6">
                     <label>Lifespan</label>
                    <input type="text" class="form-control" placeholder="Lifespan" value="{{ $asset->lifespan }}" name="lifespan" disabled>
                </div>
            </div>
                <div class="row">
                  <div class="form-group col-xl-12">
                    <label>Salvage Value</label>
                    <input type="text" class="form-control" placeholder="Salvage Value" value="{{ $asset->salvage_value }}" name="salvage_value"  disabled>
                </div>
                </div>
                <div class="row">
                <div class="form-group col-xl-12">
                     <label>Description</label><p><?php echo $asset->description; ?></p>
                </div>
            
            <div class="form-group col-xl-12">
            <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
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

