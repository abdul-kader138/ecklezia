@extends('admin.layout.admin')

@section('content')
    <style>
        .modal-open .daterangepicker{z-index: 2000!important}
    </style>
    <div class="container-fluid {{ menu_activity([route('admin.calendar.index')],'calendar')}}">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Ministry Planner</h2>
                             <div>
                    <ul class="breadcrumb">
                       <li>
                        <a href="{{ route('admin.calendar.add_event') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Event</a>
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
                    </div>
                    <!-- End Widget Header -->

                    <!-- Begin Widget Body -->
                    <div class="widget-body">
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
                        {!!Form::open(array('route'=>['admin.calendar.store_event'],'method'=>'POST', 'enctype'=>'multipart/form-data','id'=>'event_add_form'))!!}

                        @include('admin.ministers.event_fields')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    <div id="modal-large-edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Event</h4>
                    <a href="" class="btn btn-danger" id="delete_url">Delete
                    </a>
                </div>
                <div class="modal-body">
                  <form action="" method="post" id="update_url" enctype="multipart/form-data">@csrf
                    @include('admin.calendar.fields-edit')
                    </form>


                </div>
            </div>
        </div>
    </div>
        <!-- End Large Modal -->
@endsection
@push('alljs')
    <script>
        (function ($) {
            var date_option = {
                singleDatePicker: true,
                locale: {
                    format: 'D/M/Y'
                }

            };
            $('#datetimepicker4').datetimepicker({
                format: 'LT',
            });
            $('#datetimepicker5').datetimepicker({
                format: 'LT',
            });
            // basic-example-edit
            tinymce.init({
                selector: 'textarea#basic-example-edit',
                height: 500,
                menubar: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor textcolor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table paste code help wordcount'
                ],
                toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
                content_css: [
                    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                    '//www.tiny.cloud/css/codepen.min.css'
                ]
            });
            $('#end_time').daterangepicker(date_option);
            $('#start_date_edit').daterangepicker(date_option);
            $('#end_date_edit').daterangepicker(date_option);
            var events = {!! $events !!}
            // $('#calendar').fullCalendar({
            //     dayClick: function() {
            //         $("#modal-large").modal("show");
            //     }
            // });
            // initialize the external events
            // -----------------------------------------------------------------


            // initialize the calendar
            // -----------------------------------------------------------------
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar
                drop: function () {
                    // is the "remove after drop" checkbox checked?
                    if ($('#drop-remove').is(':checked')) {
                        // if so, remove the element from the "Draggable Events" list
                        $(this).remove();
                    }
                },
                events:events,
                eventRender: function (event, element) {
                    if (event.icon) {
                        element.find(".fc-title").prepend("<i class='la la-" + event.icon + "'></i>");
                    }
                },
                eventClick: function (event, jsEvent, view) {
                   /* $('.event-icon').html("<i class='la la-" + event.icon + "'></i>");
                    $('.event-title').html(event.title);
                    $('.event-body').html(event.description);
                    $('.eventUrl').attr('href', event.url);*/
                    console.log(event);

                    $('#title_edit').val(event.title);
                    $('#start_date_edit').val(event.start_date);
                    $('#start_time_edit').val(event.start_time);
                    $('#end_date_edit').val(event.end_date);
                    $('#end_time_edit').val(event.end_time);

                    // alert(event.description);
                    $('#all_day').attr('checked',event.all_day?true:false);
                    $('#recurring').attr('checked',event.recurring?true:false);
                    $('#lat').val(event.lat);
                    $('#lon').val(event.lon);
                    $('#img_edit').attr('src',event.image);
                    $('#delete_url').attr('href',event.delete_url);
                    // console.log(tinyMCE.get('basic-example').setContent('<p>This is my new content!</p>'));
                    tinyMCE.get('basic-example-edit').setContent(event.description?event.description:'');
                    // $('#basic-example');
                    $('#color').val(event.color);
                    $('#update_url').attr('action',event.update_url);
                    $('#modal-large-edit').modal();
                },
                dayClick: function(date, jsEvent, view) {
                    // alert('Clicked on: ' + date.format('D'));
                    $('#start_time').val(date.format('D/M/Y')).attr('readonly',true);
                    $("#modal-large").modal("show");
                }
            });

        })(jQuery);

    </script>
    @endpush