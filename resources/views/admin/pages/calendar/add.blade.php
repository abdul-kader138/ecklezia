@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Add Events</h2>
                                <div>
                    <ul class="breadcrumb">
                       <li>
                        <a href="{{ url('/admin/calendar/add') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Event</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/calendar/external_event') }}" class="btn btn-md btn-info btn-square mr-1 mb-2"> External Events</a>
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
                        <h2>Add Events</h2>

<!--                         <div class="widget-options">
                            <div class="dropdown">
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                    <i class="la la-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="{{ url('/admin/calendar/add') }}" class="dropdown-item">
                                        Add Event
                                    </a>
                                    {{--<a href="app-calendar.html" class="dropdown-item">--}}
                                    {{--Basic Calendar--}}
                                    {{--</a>--}}
                                    {{--<a href="app-calendar-list.html" class="dropdown-item">--}}
                                    {{--List Views--}}
                                    {{--</a>--}}
                                    <a href="{{ url('/admin/calendar/external_event') }}" class="dropdown-item">
                                        External Events
                                    </a>
                                </div>
                            </div>
                        </div> -->
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
                                                                <label class="col-md-3 control-label" for="f_name">Title</label>
                                                                <div class="col-md-9">
                                                                    <input id="f_name" name="title" type="text" placeholder="Title" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="start">Start Time</label>
                                                                <div class="col-md-9">
                                                                    <input id="start_date" name="start" type="text" placeholder="Start Time" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="end">End Time</label>
                                                                <div class="col-md-9">
                                                                    <input id="end_date" name="end" type="text" placeholder="End Time" class="form-control">
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <fieldset>
                                                            <!-- Name input-->
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="color">Color</label>
                                                                <div class="col-md-9">
                                                                    <input id="color" name="color" type="text" placeholder="Last Name" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="color">Description</label>
                                                                <div class="col-md-9">
                                                                    <textarea class="form-control" rows="3" name="description"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="color">&nbsp;</label>
                                                                <div class="col-md-9">
                                                                    <input type="submit" value="Add" class="btn btn-gradient-04 mr-1 mb-2" style="padding: 10px 5%;">
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