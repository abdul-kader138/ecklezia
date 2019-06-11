@extends('admin.layout.account_admin')
@section('content')
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
    <div class="row no-margin">
        <div class="col-xl-12">
            <!-- Begin Widget -->
            <div class="row widget has-shadow">
                <!-- Start Widget Header -->
                <div class="widget-header bordered d-flex align-items-center">
                    <h2>Add Budget</h2>

                </div>
                <!-- End Widget Header -->

                <div class="col-md-12">
                    <!-- Begin Widget Body -->
                    <div class="widget-body">
                        <!-- Begin Event -->
                        <div class="panel panel-primary">
                            <div class="panel-body" >
                                <form action="{{ url('/admin/depreciation/update/'.$asset->id) }}" method="POST">
                                     @csrf
                                <div class="col-md-12">
                <div class="row">
                  <div class="form-group col-xl-6">
                    <label>Asset Name</label>
                    <input type="text" class="form-control" placeholder="Asset Name" name="asset_name" value="{{ $asset->asset_name }}" required>
                </div>
                <div class="form-group col-xl-6">
                     <label>Purchase Year</label>
                    <input type="text" class="form-control" placeholder="Purchase Year" value="{{ $asset->purchase_year }}" name="purchase_year" required>
                </div>
            </div>
                            <div class="row">
                  <div class="form-group col-xl-6">
                    <label>Cost</label>
                    <input type="text" class="form-control" placeholder="Cost" value="{{ $asset->cost }}" name="cost" required>
                </div>
                <div class="form-group col-xl-6">
                     <label>Lifespan</label>
                    <input type="text" class="form-control" placeholder="Lifespan" value="{{ $asset->lifespan }}" name="lifespan" required>
                </div>
            </div>
                <div class="row">
                  <div class="form-group col-xl-12">
                    <label>Salvage Value</label>
                    <input type="text" class="form-control" placeholder="Salvage Value" value="{{ $asset->salvage_value }}" name="salvage_value"  required>
                </div>
                </div>
                <div class="row">
                <div class="form-group col-xl-12">
                     <label>Description</label>
                     <textarea class="form-control" id="basic-example"  name="description"><?php echo $asset->description; ?></textarea>
                </div>
            
            <div class="form-group col-xl-12">
                <button type="submit" class="btn btn-primary pull-right">Save</button>
            </div>
            </div>
        </div>
        </form>

                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- End Event -->
                    </div>
                    <!-- End Widget Body -->
                </div>
            </div>
            <!-- End Widget -->
        </div>
        <!-- End Col -->
    </div>
    <!-- End Row -->
</div>
<!-- End Container -->
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
@endsection