@extends('admin.layout.admin')
@section('content')
    <div class="container-fluid {{ Request::path() ==  'admin/calendar' ? 'calendar' : ''  }}">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Ministry Planner</h2>
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
                        <h2>Ministry Planner Calendar</h2>

                    </div>
                    <!-- End Widget Header -->

                    <!-- Begin Widget Body -->
                    <div class="widget-body">
                        <!-- Begin Calendar -->
                        <div id="calendar"></div>
                        <!-- End Calendar -->
                    </div>
                    <!-- End Widget Body -->

                </div>
                <!-- End Widget -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->
@endsection