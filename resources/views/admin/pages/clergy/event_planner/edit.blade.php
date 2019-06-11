@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Event Speakers</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/admin/home')}}"><i class="ti ti-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">App</a></li>
                            <li class="breadcrumb-item active">Event Planner</li>
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
                        <h2>Update Speakers</h2>

                        <div class="widget-options">
                            <div class="dropdown">
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                    <i class="la la-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="{{ url('/admin/event_speakers') }}" class="dropdown-item">
                                        Speakers
                                    </a>
                                    <a href="{{ url('/admin/event_speakers/add') }}" class="dropdown-item">
                                        Add Speakers
                                    </a>
                                    <a href="{{ url('/admin/event_planner') }}" class="dropdown-item">
                                        Event Planner
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
                                            <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                                <input name="_token" type="hidden" value="">
                                                <div class="row">
                                                    <div class="col-md-8 offset-md-2 col-sm-12">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-md-6 control-label event_logo" for="event_logo">
                                                                        <div class="title">
                                                                            Upload Photo:
                                                                        </div>
                                                                        <div class="event-logo">
                                                                            <img src="{{ asset('church/img/event_logo.png') }}" alt="Event Logo" class="img-fluid">
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="event_logo" type="file" placeholder="Event Logo" class="form-control" tabindex="1">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-md-3 control-label" for="event_name">Speaker Name:</label>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="sname" type="text" placeholder="Speaker Name" class="form-control" tabindex="2">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-md-3 control-label" for="event_name">Position:</label>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="position" type="text" placeholder="Position" class="form-control" tabindex="3">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-md-3 control-label" for="event_name">About:</label>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <textarea name="about" rows="5" type="text" placeholder="About" class="form-control" tabindex="4"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-md-3 control-label" for="event_name">Linkdn Profile:</label>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="linkdn_profile" type="text" placeholder="Linkdn Profile" class="form-control" tabindex="5">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-md-3 control-label" for="event_name">Website:</label>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="website" type="text" placeholder="Website" class="form-control" tabindex="6">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input type="submit" value="Update" class="btn btn-gradient-04 mr-1 mb-2 pull-right">
                                                                    </div>
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