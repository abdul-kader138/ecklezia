@extends('admin.layout.admin')

@section('content')
<style>
.daterangepicker {
    z-index: 1200 !important;
}
.tox-notification {
display: none;
    }
</style>
    <div class="container-fluid {{ Request::path() ==  'admin/calendar' ? 'calendar' : ''  }}">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Calendar</h2>
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
                        <h2>Basic Calendar</h2>

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
        <!-- Begin Large Modal -->
        <div id="modal-large" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Event</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
<form class="form-horizontal">
                                            <div class="form-group row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label text-right">Event Name</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label text-right">Starts On</label>
                                                <div class="col-lg-4">
                                                    <input id="start_date" name="date" type="text" class="form-control">
                                                 
                                                </div>
                                                  <div  class="col-lg-4">
   <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3"/>
                    <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
                    </div>
                </div>

  </div>
                                            </div>       
                                            <div class="form-group row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label text-right">Ends On</label>
                                                <div class="col-lg-4">
                                                    <input id="end_date" name="date2" type="text" class="form-control">
                                                 
                                                </div>
                                                <div class="col-lg-4">
                                                       <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2"/>
                    <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
                    </div>
                </div>
                                                 
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label"></label>
                                                <div class="col-lg-9">
                                                    <div class="mb-3">
                                                        <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox" id="check-1">
                                                            <label for="check-1">All Day</label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox2" id="check-12">
                                                            <label for="check-12">Recurring</label>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="form-group row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label text-right">Calender</label>
                                                <div class="col-lg-8">
                                                       <select class="selectpicker show-menu-arrow" data-live-search="true">
                                                        <option>Mustard</option>
                                                        <option>Ketchup</option>
                                                        <option>Relish</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label text-right">Location</label>
                                                <div class="col-lg-8">
                                                       <select class="selectpicker show-menu-arrow" data-live-search="true">
                                                        <option>Mustard</option>
                                                        <option>Ketchup</option>
                                                        <option>Relish</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label text-right">Featured Image</label>
                                                <div class="col-lg-8">
                                               <input type="file" class="form-control" name="">
                                                </div>
                                            </div>
                                                 <div class="form-group row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label text-right">Latitude</label>
                                                <div class="col-lg-8">
                                               <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                                <div class="form-group row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label text-right">Longitude</label>
                                                <div class="col-lg-8">
                                               <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label text-right">Notes</label>
                                                <div class="col-lg-8">
                                                   <textarea class="form-control" id="basic-example"></textarea>
                                                </div>

                                      
                    </div>
                    <div class="modal-footer">
                        
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                      </form>
                </div>
            </div>
        </div>
        <!-- End Large Modal -->
@endsection