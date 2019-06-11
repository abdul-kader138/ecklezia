@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Pledge</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{ route('admin.pledge.create') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Pledge</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.pledge.index') }}" class="btn btn-info btn-square mr-1 mb-2">Pledge List</a>
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

                    <div class="widget-header bordered no-actions d-flex align-items-center flex-space-between">
                        <div class="widget-title">
                            <h4>View Pledge</h4>
                        </div>
                    </div>

                    <div class="widget-body">
                        <div class="table-responsive">
                            <table id="sorting-table" class="table table-striped mb-0">
                                <tbody>
                                <tr>
                                    <td>Name:</td>
                                    <td>{{ $pledge->first_name}}</td>
                                </tr>
                                <tr>
                                    <td>Phone:</td>
                                    <td>{{ $pledge->phone}}</td>
                                </tr>
                                <tr>
                                    <td>Date:</td>
                                    <td>{{ $pledge->date}}</td>
                                </tr>
                                <tr>
                                    <td>Pledge ID:</td>
                                    <td>{{ $pledge->pledge_id}}</td>
                                </tr>
                                <tr>
                                    <td>Estimated Amount:</td>
                                    <td>{{ $pledge->estimated_amount}}</td>
                                </tr>
                                <tr>
                                    <td>Payment Status:</td>
                                    <td>{{ $pledge->payment_status}}</td>
                                </tr>
                                <tr>
                                    <td>Financial Officer:</td>
                                    <td>{{ $pledge->financial_officer}}</td>
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


