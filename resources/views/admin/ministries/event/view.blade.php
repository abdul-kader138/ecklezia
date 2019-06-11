@extends('admin.layout.admin')

@section('content')
<div class="container-fluid">

    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Ministry Event Info</h2>
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <button data-toggle="modal" data-target="#modal-centered2" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Member</button>
                        </li>
                        <li>
                            <button data-toggle="modal" data-target="#modal-centered" class="btn btn-info btn-square mr-1 mb-2">Add Note</button>
                        </li>
                        <li>
                            <a href="{{ route('admin.ministries-create-event',$ministry->id) }}" class="btn btn-info btn-square mr-1 mb-2">Add Event</a>
                        </li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <!-- Begin Centered Modal -->
    <div id="modal-centered" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Note</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">close</span>
                    </button>
                </div>
                <form action="{{route('admin.ministries-add-note',$ministry->id)}}" method="post">@csrf

                    <div class="modal-body">
                        <div class="publisher publisher-multi bg-white">
                            <textarea class="form-control" rows="4" name="notes" placeholder="Write Down the Note.."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Centered Modal -->

    <!-- Begin Centered Modal -->
    <div id="modal-centered2" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Member</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">close</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!!Form::open(array('route'=>['admin.ministries-add-member',$ministry->id],'method'=>'POST', 'enctype'=>'multipart/form-data','id'=>'add_member_form'))!!}

                    <input type="hidden" name="ministry_id" value="{{$ministry->id}}" id="ministry_id">
                    <div class="form-group row d-flex align-items-center">
                        <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Select Member</label>
                        <div class="col-lg-10">
                            {!! Form::select('people_id',$peoples->pluck('full_name','id'), null, ['placeholder' => "Select Member", 'class' => 'form-control' ,'id'=>'people_id']) !!}
                        </div>
                    </div>

                    <div class="form-group row d-flex align-items-center">
                        <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Image</label>
                        <div class="col-lg-10">
                            <div class="cover-image mx-auto">
                                <img width="50" height="50" id="member_image" src="{{asset('church/img/group/01.jpg')}}" alt="..." class="rounded-circle mx-auto">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center">
                        <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Email</label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" placeholder="Enter Email" id="member_email">
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center">
                        <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Phone</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" placeholder="Enter Phone Number" id="member_phone">
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="$('#add_member_form').submit()">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Centered Modal -->



    <!-- End Page Header -->

<!-- Start Profile Row -->
<div class="row flex-row">

    <div class="col-xl-3">
        <!-- Begin Widget -->
    @include('admin.ministries._sidebar',['ministry'=>$ministry])
        <!-- End Widget -->

    </div>

    <div class="col-xl-9">
        @foreach($ministry->event as $event)
        <div class="widget has-shadow">
            <!-- Begin Widget Header -->
            <div class="widget-header d-flex align-items-center">
                <div class="d-flex flex-column mr-auto">
                    <div class="title">
                        <a href="javascript:void(0)" class="username">Event Date</a>
                    </div>
                    <div class="time">{{\Carbon\Carbon::parse($event->date)->isoFormat('dddd,MMMM Do, YYYY')}}</div>
                </div>
                <div class="widget-options">
                    <form action="{{route('admin.ministries-delete-event',$event->id)}}" method="post" id="delete_form_{{$event->id}}">@csrf</form>

                    <div class="dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                            <i class="la la-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu">

                            <a href="#" onclick="confirm('are You sure delete?')?$('#delete_form_{{$event->id}}').submit():null" class="dropdown-item">
                                <i class="la la-trash"></i>Delete Post
                            </a>

                  
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Widget Header -->
            <!-- Begin Widget Body -->
            <div class="widget-body">
                <a href="javascript:void(0)">Event Description</a>
                <p>
                {{$event->description}}
                </p>
            </div>
            <!-- End Widget Body -->


        </div>
       @endforeach

    </div>
</div>
<!-- End Profile Row -->
</div>
<!-- End Container -->
@endsection

@push('alljs')
<script src="{{ asset('church/vendors/js/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/datatables/vfs_fonts.js') }}"></script>

<script>
    (function ($) {

        'use strict';

        $(function () {
            $('#sorting-table').DataTable({
                "lengthMenu": [
                [10, 15, 20, -1],
                [10, 15, 20, "All"]
                ],
                "order": [
                [3, "desc"]
                ]
            });
        });

    })(jQuery);
</script>
@endpush