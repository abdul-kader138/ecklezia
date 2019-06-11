@extends('admin.layout.admin')

@section('content')
<style type="text/css">
    .group-card .name {
        margin-top: 10px;
    }
    .widget-body {
        padding: 10px;
    }
</style>
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Ministry List</h2>
                <div>
                    <ul class="breadcrumb">
                       <li>
                        <a href="{{ route('admin.ministries.create') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Ministry</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header -->

<!-- End Row -->
<div class="row flex-row">
    <div class="col-xl-12">

        <div class="row">
            @foreach($ministries as $ministry)
            <div class="col-xl-3 col-md-4 col-sm-6 col-remove">
                <!-- Begin Card -->
                <div class="widget-image has-shadow">
                    <div class="group-card">
                        <!-- Begin Widget Body -->
                        <div class="widget-body">
                            <div class="quick-actions">
                                <div class="dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                        <i class="la la-circle-o-notch"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="#" onclick="confirm('are You sure delete?')?$('#delete_form_{{$ministry->id}}').submit():null" class="dropdown-item">
                                            <i class="la la-trash"></i>Delete
                                        </a>
                                        <form action="{{route('admin.ministries.destroy',$ministry->id)}}" method="post" id="delete_form_{{$ministry->id}}">@csrf
                                        @method('delete')
                                        </form>

                                        <a href="{{route('admin.ministries.edit',$ministry->id)}}" class="dropdown-item">
                                            <i class="la la-edit"></i>Edit
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="cover-image mx-auto">
                          
                                <img src="{{asset('uploads/images/ministry/'.$ministry->image)}}" alt="..." class="rounded-circle mx-auto">
                              
                            </div>
                            <h4 class="name"><a href="{{route('admin.ministries.show',$ministry->id)}}">{{$ministry->ministry}}</a></h4>
                            <div class="category">{{$ministry->ministry_name}}</div>
                            <div class="stats text-center">
                                <span class="counter">{{number_format($ministry->member->count())}}</span>
                                <span class="text">Ministry Members</span>
                            </div>
                            <div class="group-members text-center mt-2">
                                @foreach($ministry->member()->latest()->take(5)->get() as $membe_value)
                                <a href="javascript:void(0);">
                                    <img src="{{$membe_value->imagePath()}}" class="img-fluid rounded-circle" alt="...">
                                </a>
                                @endforeach
                            </div>
                            <div class="text-center mt-2 pb-3">
                                <a href="javascript:void(0);" class="btn btn-primary ripple add-member-btn" data-toggle="modal" data-target="#modal-centered"
                                   data-url="{{route('admin.ministries-add-member',$ministry->id)}}"
                                   data-id="{{$ministry->id}}">Add Member</a>
                            </div>
                        </div>
                        <!-- End Widget Body -->
                    </div>
                </div>
                <!-- End Card -->
            </div>
            @endforeach
        </div>
        <!-- End Row -->
    </div>
            <!-- Begin Centered Modal -->
        <div id="modal-centered" class="modal fade">
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
                         <form action="" method="post" id="add_member_form">@csrf
                        <input type="hidden" name="ministry_id" id="ministry_id">
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

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="$('#add_member_form').submit()">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Centered Modal -->

</div>
<!-- End Row -->
</div>
<!-- End Container -->
@endsection

@push('alljs')
    <script>
        $(function () {
            $(document).on('click','.add-member-btn',function () {
                $('#add_member_form').attr('action',$(this).data('url'));
                $('#ministry_id').val($(this).data('id'));
            })
            $(document).on('change','#people_id',function () {
                $.ajax({
                    url:'{{route('admin.ministries-select-member')}}',
                    data:{id:$(this).val()},
                    success:function (res) {
                        $('#member_image').attr('src',res.image);
                        $('#member_email').val(res.email);
                        $('#member_phone').val(res.phone);
                    }
                })
            })
        })
    </script>
@endpush


