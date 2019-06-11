@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Single Asset Contribution</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.asset-contribution.edit',$assetcontribution->id) }}"
                                   class="btn btn-info btn-square mr-1 mb-2">Edit Asset Contribution</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- Start Profile Row -->
    <div class="row flex-row">


        <div class="col-xl-12">
            <div class="widget has-shadow">
                <div class="widget-header bordered d-flex align-items-center">
                    <h4>Asset Contribution</h4>
                </div>
                <div class="widget-body">
                    <div class="col-12 table-header-bg">
                        <div class="section-title mb-3">
                            <h4 class="pt-3 pb-3">Personal Informations</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-6">
                            <label class="form-control-label">First Name</label>
                            <p>{{ $assetcontribution->first_name }}</p>
                        </div>
                        <div class="col-xl-6">
                            <label class="form-control-label">Last Name</label>
                            <p>{{ $assetcontribution->last_name }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-6">
                            <label class="form-control-label">Phone</label>
                            <p>{{ $assetcontribution->phone }}</p>
                        </div>
                        <div class="col-xl-6">
                            <label class="form-control-label">Email</label>
                            <p>{{ $assetcontribution->email }}</p>
                        </div>
                    </div>


                    <div class="col-12 table-header-bg">
                        <div class="section-title mb-3">
                            <h4 class="pt-3 pb-3">Address Informations</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-6">
                            <label class="form-control-label">Address</label>
                            <p>{{ $assetcontribution->address }}</p>
                        </div>
                        <div class="col-xl-6">
                            <label class="form-control-label">City</label>
                            <p>{{ $assetcontribution->city }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-6">
                            <label class="form-control-label">State</label>
                            <p>{{ $assetcontribution->state }}</p>
                        </div>
                        <div class="col-xl-6">
                            <label class="form-control-label">Zip Code</label>
                            <p>{{ $assetcontribution->zip }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-6">
                            <label class="form-control-label">Country</label>
                            <p>{{ $assetcontribution->country }}</p>
                        </div>
                        
                    </div>

                    <div class="col-12 table-header-bg">
                        <div class="section-title mb-3">
                            <h4 class="pt-3 pb-3">Financial Officer</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-6">
                            <label class="form-control-label">First Name</label>
                            <p>{{ $assetcontribution->first_name }}</p>
                        </div>
                        <div class="col-xl-6">
                            <label class="form-control-label">Last Name</label>
                            <p>{{ $assetcontribution->last_name }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-12">
                            <label class="form-control-label">Description</label>
                            <p>{!! $assetcontribution->description !!}</p>
                        </div>
                    </div>
                       <div class="form-group row">
                        <div class="col-xl-6">
                            <label class="form-control-label">Estimates Amount</label>
                            <p>{{ $assetcontribution->estimated_amount }}</p>
                        </div>
                    </div>

                    <div class="em-separator separator-dashed"></div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Profile Row -->
    </div>
    <!-- End Container -->
@endsection


