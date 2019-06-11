@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Event Planner</h2>
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
                        <h2>Event Planner</h2>

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
                                                    <div class="col-md-6 mb-3">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-md-6 control-label event_logo" for="event_logo">
                                                                        <div class="title">
                                                                            Event Logo:
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
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <fieldset>
                                                            <div class="row">
                                                                <label class="col-md-6 control-label event_logo" for="event_logo">
                                                                    <div class="title">
                                                                        Event Banner:
                                                                    </div>
                                                                    <div class="event-logo">
                                                                        <img src="{{ asset('church/img/event_logo.png') }}" alt="Event Banner" class="img-fluid">
                                                                    </div>
                                                                </label>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input name="event_banner" type="file" placeholder="Event Banner" class="form-control" tabindex="1">
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <fieldset style="width: 100%;">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-md-3 control-label" for="event_name">Event Name:</label>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="event_name" type="text" placeholder="Event Name" class="form-control" tabindex="3">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-md-3 control-label" for="date">Date:</label>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-3 mb-xs">
                                                                        <input name="date" type="text" placeholder="9th" class="form-control" tabindex="4">
                                                                    </div>
                                                                    <div class="col-md-3 mb-xs">
                                                                        <input name="date" type="text" placeholder="11th" class="form-control" tabindex="5">
                                                                    </div>
                                                                    <div class="col-md-3 mb-xs">
                                                                        <input name="date" type="text" placeholder="October" class="form-control" tabindex="6">
                                                                    </div>
                                                                    <div class="col-md-3 mb-xs">
                                                                        <input name="date" type="text" placeholder="2015" class="form-control" tabindex="7">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <fieldset>
                                                            <div class="row">
                                                                <label class="col-md-6 control-label" for="area">Area</label>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input name="area" type="text" placeholder="Area" class="form-control" tabindex="8">
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <fieldset style="width: 100%;">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-md-3 control-label" for="about">About:</label>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <textarea name="about" rows="5" type="text" placeholder="About" class="form-control" tabindex="9"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <fieldset style="width: 100%;">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-md-3 control-label" for="vanue">Venue:</label>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="vanue" type="text" placeholder="Venue" class="form-control" tabindex="10">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <fieldset style="width: 100%;">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-md-3 control-label" for="contact">Contact:</label>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <textarea name="contact" rows="5" type="text" placeholder="Contact" class="form-control" tabindex="12"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-md-3 control-label">Register Events:</label>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4 mb-xs">
                                                                        <input name="ppacked" type="text" placeholder="Power Packed" class="form-control" tabindex="13">
                                                                    </div>
                                                                    <div class="col-md-4 mb-xs">
                                                                        <input name="centered" type="text" placeholder="Christ Centered" class="form-control" tabindex="15">
                                                                    </div>
                                                                    <div class="col-md-4 mb-xs">
                                                                        <input name="sled" type="text" placeholder="Spirit Led" class="form-control" tabindex="16">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>

                                                <hr>
                                                <div class="event_planner_schedule-title mb-3">
                                                    <h2>Add Day Schedule</h2>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-md-3 control-label" for="day-1">Day: 1</label>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="6Pm-7Pm" class="form-control" tabindex="17">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="Prayer & Intersection" class="form-control" tabindex="18">
                                                                    </div>

                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="7Pm -7:40Pm" class="form-control" tabindex="19">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="Praises & Worship" class="form-control" tabindex="20">
                                                                    </div>

                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="7:40Pm- 8Pm" class="form-control" tabindex="21">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="Song Ministration" class="form-control" tabindex="22">
                                                                    </div>

                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="8Pm--8:15Pm" class="form-control" tabindex="23">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="Introduction of Guest Preacher" class="form-control" tabindex="24">
                                                                    </div>



                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="8:15Pm-8:30Pm" class="form-control" tabindex="25">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="ISong Ministration" class="form-control" tabindex="26">
                                                                    </div>


                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="8:30Pm-8:40Pm" class="form-control" tabindex="27">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="Introduction of Guest Preacher" class="form-control" tabindex="28">
                                                                    </div>


                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="8:40Pm-9:30Pm" class="form-control" tabindex="29">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="Sermon Ministration" class="form-control" tabindex="30">
                                                                    </div>

                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="9:30Pm-10Pm" class="form-control" tabindex="31">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="Prophetic Ministration, Prophetic Intersection & Prophetic Inpactation" class="form-control" tabindex="32">
                                                                    </div>

                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="10Pm-10:20" class="form-control" tabindex="33">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="Victory Dance" class="form-control" tabindex="34">
                                                                    </div>

                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="10:20Pm-10:40Pm" class="form-control" tabindex="35">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="Offerings" class="form-control" tabindex="36">
                                                                    </div>

                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="10:30Pm-10:30P" class="form-control" tabindex="37">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="Benediction" class="form-control" tabindex="38">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>

                                                    </div>

                                                    <div class="col-md-6">
                                                        <fieldset>
                                                            <div class="row">
                                                                <label class="col-md-6 control-label" for="area">Day: 2</label>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-2" type="text" placeholder="6Pm-7Pm" class="form-control" tabindex="39">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="Prayer & Intersection" class="form-control" tabindex="40">
                                                                </div>

                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-1" type="text" placeholder="7Pm -7:40Pm" class="form-control" tabindex="41">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="Praises & Worship" class="form-control" tabindex="42">
                                                                </div>

                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-1" type="text" placeholder="7:40Pm- 8Pm" class="form-control" tabindex="43">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="Song Ministration" class="form-control" tabindex="44">
                                                                </div>

                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-1" type="text" placeholder="8Pm--8:15Pm" class="form-control" tabindex="45">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="Introduction of Guest Preacher" class="form-control" tabindex="46">
                                                                </div>



                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-1" type="text" placeholder="8:15Pm-8:30Pm" class="form-control" tabindex="47">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="ISong Ministration" class="form-control" tabindex="48">
                                                                </div>


                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-1" type="text" placeholder="8:30Pm-8:40Pm" class="form-control" tabindex="49">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="Introduction of Guest Preacher" class="form-control" tabindex="50">
                                                                </div>


                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-1" type="text" placeholder="8:40Pm-9:30Pm" class="form-control" tabindex="51">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="Sermon Ministration" class="form-control" tabindex="52">
                                                                </div>

                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-1" type="text" placeholder="9:30Pm-10Pm" class="form-control" tabindex="53">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="Prophetic Ministration, Prophetic Intersection & Prophetic Inpactation" class="form-control" tabindex="54">
                                                                </div>

                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-1" type="text" placeholder="10Pm-10:20" class="form-control" tabindex="55">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="Victory Dance" class="form-control" tabindex="56">
                                                                </div>

                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-1" type="text" placeholder="10:20Pm-10:40Pm" class="form-control" tabindex="57">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="Offerings" class="form-control" tabindex="58">
                                                                </div>

                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-1" type="text" placeholder="10:30Pm-10:30P" class="form-control" tabindex="59">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="Benediction" class="form-control" tabindex="60">
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-md-3 control-label" for="day-1">Day: 3</label>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-3" type="text" placeholder="6Pm-7Pm" class="form-control" tabindex="61">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="Prayer & Intersection" class="form-control" tabindex="62">
                                                                    </div>

                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="7Pm -7:40Pm" class="form-control" tabindex="63">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="Praises & Worship" class="form-control" tabindex="64">
                                                                    </div>

                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="7:40Pm- 8Pm" class="form-control" tabindex="65">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="Song Ministration" class="form-control" tabindex="66">
                                                                    </div>

                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="8Pm--8:15Pm" class="form-control" tabindex="67">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="Introduction of Guest Preacher" class="form-control" tabindex="68">
                                                                    </div>



                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="8:15Pm-8:30Pm" class="form-control" tabindex="69">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="ISong Ministration" class="form-control" tabindex="70">
                                                                    </div>


                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="8:30Pm-8:40Pm" class="form-control" tabindex="71">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="Introduction of Guest Preacher" class="form-control" tabindex="72">
                                                                    </div>


                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="8:40Pm-9:30Pm" class="form-control" tabindex="73">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="Sermon Ministration" class="form-control" tabindex="74">
                                                                    </div>

                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="9:30Pm-10Pm" class="form-control" tabindex="75">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="Prophetic Ministration, Prophetic Intersection & Prophetic Inpactation" class="form-control" tabindex="76">
                                                                    </div>

                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="10Pm-10:20" class="form-control" tabindex="77">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="Victory Dance" class="form-control" tabindex="78">
                                                                    </div>

                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="10:20Pm-10:40Pm" class="form-control" tabindex="79">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="Offerings" class="form-control" tabindex="80">
                                                                    </div>

                                                                    <div class="col-md-4 mb-3">
                                                                        <input name="day-1" type="text" placeholder="10:30Pm-10:30P" class="form-control" tabindex="81">
                                                                    </div>

                                                                    <div class="col-md-8 mb-3">
                                                                        <input name="" type="text" placeholder="Benediction" class="form-control" tabindex="82">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <fieldset>
                                                            <div class="row">
                                                                <label class="col-md-6 control-label" for="area">Day: 4</label>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-4" type="text" placeholder="6Pm-7Pm" class="form-control" tabindex="83">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="Prayer & Intersection" class="form-control" tabindex="84">
                                                                </div>

                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-1" type="text" placeholder="7Pm -7:40Pm" class="form-control" tabindex="85">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="Praises & Worship" class="form-control" tabindex="86">
                                                                </div>

                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-1" type="text" placeholder="7:40Pm- 8Pm" class="form-control" tabindex="87">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="Song Ministration" class="form-control" tabindex="88">
                                                                </div>

                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-1" type="text" placeholder="8Pm--8:15Pm" class="form-control" tabindex="89">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="Introduction of Guest Preacher" class="form-control" tabindex="90">
                                                                </div>



                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-1" type="text" placeholder="8:15Pm-8:30Pm" class="form-control" tabindex="91">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="ISong Ministration" class="form-control" tabindex="92">
                                                                </div>


                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-1" type="text" placeholder="8:30Pm-8:40Pm" class="form-control" tabindex="93">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="Introduction of Guest Preacher" class="form-control" tabindex="94">
                                                                </div>


                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-1" type="text" placeholder="8:40Pm-9:30Pm" class="form-control" tabindex="95">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="Sermon Ministration" class="form-control" tabindex="96">
                                                                </div>

                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-1" type="text" placeholder="9:30Pm-10Pm" class="form-control" tabindex="97">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="Prophetic Ministration, Prophetic Intersection & Prophetic Inpactation" class="form-control" tabindex="98">
                                                                </div>

                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-1" type="text" placeholder="10Pm-10:20" class="form-control" tabindex="99">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="Victory Dance" class="form-control" tabindex="100">
                                                                </div>

                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-1" type="text" placeholder="10:20Pm-10:40Pm" class="form-control" tabindex="101">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="Offerings" class="form-control" tabindex="102">
                                                                </div>

                                                                <div class="col-md-4 mb-3">
                                                                    <input name="day-1" type="text" placeholder="10:30Pm-10:30P" class="form-control" tabindex="103">
                                                                </div>

                                                                <div class="col-md-8 mb-3">
                                                                    <input name="" type="text" placeholder="Benediction" class="form-control" tabindex="104">
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="event_planner-btn">
                                                            <input type="submit" value="Add" class="btn btn-gradient-04 mr-1 mb-2 pull-right" style="padding: 10px 5%;">
                                                            <a href="{{ url('/admin/event_planner') }}" class="btn btn-gradient-01 mr-1 mb-2 pull-right" style="padding: 10px 5%; margin-right: 15px;">
                                                                Reset
                                                            </a>
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
@endsection