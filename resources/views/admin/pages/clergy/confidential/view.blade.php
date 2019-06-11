@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Confidential Notes</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/admin/home')}}"><i class="ti ti-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">App</a></li>
                            <li class="breadcrumb-item active">Confidential</li>
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
                            <h4>View Confidential Notes</h4>
                        </div>

                        <div class="widget-options">
                            <div class="dropdown">
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                    <i class="la la-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="{{ url('/admin/confidential/add') }}" class="dropdown-item">
                                        Add Confidential
                                    </a>
                                    <a href="{{ url('/admin/confidential') }}" class="dropdown-item">
                                        View Confidential
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget-body">
                        <div class="table-responsive">
                            <table id="sorting-table" class="table table-striped mb-0">
                                <tbody>
                                <tr>
                                    <td>Name:</td>
                                    <td>Yuli Riddle</td>
                                </tr>
                                <tr>
                                    <td>Purpose:</td>
                                    <td>Sit quibusdam</td>
                                </tr>
                                <tr>
                                    <td>Date:</td>
                                    <td>01-01-70</td>
                                </tr>
                                <tr>
                                    <td>Category:</td>
                                    <td>Visitor</td>
                                </tr>
                                <tr>
                                    <td>Phone:</td>
                                    <td>+882-69-9669829</td>
                                </tr>
                                <tr>
                                    <td>Note:</td>
                                    <td>Laboris nemo cumque sed in itaque sequi optio saepe architecto cupidatat enim aliquip excepteur minim id incididunt hic cupidatat</td>
                                </tr>
                                <tr>
                                    <td>Conclusion:</td>
                                    <td>Dolore voluptas ex cillum lorem et expedita</td>
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


