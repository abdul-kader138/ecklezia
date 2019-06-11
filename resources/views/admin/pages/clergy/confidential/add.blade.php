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
        <div class="row no-margin">
            <div class="col-xl-12">
                <!-- Begin Widget -->
                <div class="row widget has-shadow">
                    <!-- Start Widget Header -->
                    <div class="widget-header bordered d-flex align-items-center">
                        <h2>Add Confidential Notes</h2>

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
                    <!-- End Widget Header -->

                    <div class="col-md-12">
                        <!-- Begin Widget Body -->
                        <div class="widget-body">
                            <!-- Begin Event -->
                            <div class="panel panel-primary">
                                <div class="panel-body" >
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal">
                                                <input name="_token" type="hidden" value="">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="fname">First Name:</label>
                                                                <div class="col-md-12">
                                                                    <input name="fname" type="text" placeholder="First Name" class="form-control" tabindex="1">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="purpose">Purpose:</label>
                                                                <div class="col-md-12">
                                                                    <input name="purpose" type="text" placeholder="Purpose" class="form-control" tabindex="3">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="category">Category</label>
                                                                <div class="col-md-12">
                                                                    <select name="category" class="custom-select form-control" tabindex="5">
                                                                        <option>Choose Category</option>
                                                                        <option>Church Member</option>
                                                                        <option>Visitor</option>
                                                                        <option>Volunteer</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="lname">Last Name:</label>
                                                                <div class="col-md-12">
                                                                    <input name="lname" type="text" placeholder="Last Name" class="form-control" tabindex="2">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="date">Date:</label>
                                                                <div class="col-md-12">
                                                                    <input id="start_date" name="date" type="text" placeholder="Date" class="form-control" tabindex="4">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="fnumber">Phone Number:</label>
                                                                <div class="col-md-12">
                                                                    <input name="fnumber" type="text" placeholder="Phone Number" class="form-control" tabindex="6">
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <fieldset style="width: 100%;">
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="pinvolv">Parties Involv</label>
                                                                <div class="col-md-12">
                                                                    <input name="pinvolv" type="text" placeholder="Parties Involv" class="form-control" tabindex="7">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="notes">Notes:</label>
                                                                <div class="col-md-12">
                                                                    <textarea name="notes" rows="5" type="text" placeholder="Notes" class="form-control" tabindex="7"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="notes">Conclusion:</label>
                                                                <div class="col-md-12">
                                                                    <textarea name="conclusion" rows="3" type="text" placeholder="Conclusion" class="form-control" tabindex="8"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="color">&nbsp;</label>
                                                                <div class="col-md-12">
                                                                    <input type="submit" value="Add" class="btn btn-gradient-04 mr-1 mb-2 pull-right" style="padding: 10px 5%;">
                                                                </div>
                                                            </div>
                                                        </fieldset>
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
@endsection