@extends('admin.layout.admin')
@push('css-head')
    <link rel="stylesheet" href="{{ asset('plugin/croppie/croppie.css') }}">
    <style>

        #upload-demo-i:hover{
            background: grey;
        }
    </style>
@endpush
@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">People Profile</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{ route('admin.people.create') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add People</a>
                            </li>
                            {{-- @if($people->family_member_id === NULL)
                         <li>
                             <a href="{{ route('admin.people.create',$people->id) }}?member_category={{$people->member_category}}" class="btn btn-md btn-info btn-square mr-1 mb-2"> Add Family Member</a>
                         </li>
                             @endif--}}
                            <li>
                                <a href="#" data-toggle="modal" data-target="#add-family-modal" class="btn btn-md btn-info btn-square mr-1 mb-2"> Add Family Member</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.people.edit',$people->id) }}" class="btn btn-md btn-info btn-square mr-1 mb-2"> Edit Profile</a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="col-md-4" style="">
            {{--<div id="upload-demo-i" style="background:#e1e1e1;width:300px;padding:30px;height:300px;margin-top:30px"></div>--}}
        </div>
        <!-- Start Profile Row -->
        <div class="row flex-row">

            <div class="col-xl-4">
                <!-- Begin Widget -->
                <div class="widget has-shadow">
                    <div class="widget-body">
                        <ul class="social-network">
                            @foreach($people->familyMembers as $key=>$familyMember)

                                <li data-toggle="tooltip" title="{{$familyMember->people->full_name}} ( {{ucfirst(str_replace('_',' ',$familyMember->family_status))}} )">
                                    <a class="" href="{{route('admin.people.show',$familyMember->family_member_id)}}">
                                        @if($familyMember->file)
                                            <img width="40"  src="{{ asset('uploads/images/people/'.$familyMember->people->file) }}" alt="..."  class=" mx-auto">
                                        @else
                                            <img width="40"  src="{{asset('church/img/avatar/avatar-02.jpg')}}" alt="..." class=" mx-auto">

                                        @endif
                                    </a>

                                </li>
                            @endforeach
                        </ul>
                        <div class="em-separator separator-dashed"></div>
                        <div class="mt-5 text-center" id="upload-div" >
                            <label id="upload-demo-i" height="120">
                                @if($people->file)
                                    <img height="120" src="{{ asset('uploads/images/people/'.$people->file) }}" alt="..."  class="avatar  d-block mx-auto">
                                @else
                                    <img height="120" src="{{ asset('church/img/avatar/avatar-02.jpg') }}" alt="..."  class="avatar  d-block mx-auto">

                                @endif
                            </label>
                            <div id="crop" class="row d-none">
                                <div class="col-md-12 text-center">
                                    <div id="upload-demo" class="text-center" style="width:120px"></div>
                                </div>
                                <div class="col-md-12" style="padding-top:30px;">
                                    <input class="d-none" type="file" id="upload">
                                    <label for="upload" class="btn btn-success">Choose Image</label>
                                    <label class="btn btn-success upload-result">Upload Image</label>


                                </div>
                            </div>
                        </div>
                        <h4 class="text-center mt-3 mb-1">{{ $people->full_name }}</h4>
                        <div class="em-separator separator-dashed"></div>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <p class="nav-link">
                                    <i class="la la-phone la-2x align-middle pr-2"></i>
                                    <a href="javascript:void(0)">{{ $people->cell_number }}</a>
                                </p>
                            </li>

                            <li class="nav-item">
                                <p class="nav-link">
                                    <i class="la la-envelope la-2x align-middle pr-2"></i>
                                    <a href="javascript:void(0)" >{{ $people->email?$people->email:'N/A' }}</a>
                                </p>
                            </li>
                            <li class="nav-item" title="Member Category">
                                <p class="nav-link">
                                    <i class="la la-tag la-2x align-middle pr-2"></i>
                                    <a href="javascript:void(0)" >{{ $people->member_categories() }}</a>
                                </p>
                            </li>
                            <li class="nav-item" title="Member Category">
                                <p class="nav-link">
                                    <i class="fa fa-id-badge la-2x align-middle pr-2"></i>
                                    <a href="javascript:void(0)" >{{ $people->membership_unique_id }}</a>
                                </p>
                            </li>
                            <li class="nav-item" title="Member Category">
                                <p class="nav-link">
                                    <i class="fa fa-venus-double la-2x align-middle pr-2"></i>
                                    <a href="javascript:void(0)" >{{ ucfirst($people->household_status) }}</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Widget -->
            </div>

            <div class="col-xl-8">
                <div class="widget has-shadow">

                    <div class="widget-body sliding-tabs">
                        <ul class="nav nav-tabs profile-tabs" id="example-one" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="base-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Personal Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="base-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Ministry Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="base-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Financial Profile</a>
                            </li>
                        </ul>
                        <div class="tab-content pt-3">
                            <div class="tab-pane fade active show" id="tab-1" role="tabpanel" aria-labelledby="base-tab-1">
                                <div class="col-12 table-header-bg">
                                    <div class="d-flex align-items-center">
                                        <h4 class="page-header-title pt-3 pb-3">Personal Information</h4>
                                    <!--   <div>
                                    <div class="page-header-tools">
                                        <a class="btn btn-gradient-01" href={{route('admin.people.edit',$people->id)}}#">Edit Profile</a>
                                    </div>
                                </div> -->
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-6">
                                        <label class="form-control-label">First Name</label>
                                        <p>{{ $people->first_name }}</p>
                                    </div>
                                    <div class="col-xl-6">
                                        <label class="form-control-label">Last Name</label>
                                        <p>{{ $people->last_name }}</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-6">
                                        <label class="form-control-label">Phone</label>
                                        <p>{{ $people->cell_number }}</p>
                                    </div>
                                    <div class="col-xl-6">
                                        <label class="form-control-label">Email</label>
                                        <p>{{ $people->email }}</p>
                                    </div>
                                </div>

                                <div class="col-12 table-header-bg">
                                    <div class="section-title mb-3">
                                        <h4 class="pt-3 pb-3">Address Informations</h4>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-6">
                                        <label class="form-control-label">Address</label>
                                        <p>{{ $people->defaultAddress->address }}</p>
                                    </div>
                                    <div class="col-xl-6">
                                        <label class="form-control-label">City</label>
                                        <p>{{ $people->defaultAddress->city }}</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-6">
                                        <label class="form-control-label">State</label>
                                        <p>{{ $people->defaultAddress->state }}</p>
                                    </div>
                                    <div class="col-xl-6">
                                        <label class="form-control-label">Zip Code</label>
                                        <p>{{ $people->defaultAddress->zip }}</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-6">
                                        <label class="form-control-label">Country</label>
                                        <p>{{ $people->defaultAddress->country }}</p>
                                    </div>

                                </div>

                                <div class="em-separator separator-dashed"></div>
                            </div>
                            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="base-tab-2">
                                <div class="table-responsive">
                                    <table id="sorting-table2" class="table table-hover mb-0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Ministry Name</th>
                                            <th>Position</th>
                                            <th>Membership</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($people->ministry as $key=>$ministry)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$ministry->ministry_name}}</td>
                                                <td>{{$ministry->ministry_status}}</td>
                                                <td>HR</td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="base-tab-3">

                                <div class="table-responsive">
                                    <table id="sorting-table" class="table table-hover mb-0">
                                        <thead>
                                        <tr>
                                            <th width="35%">Date</th>
                                            <th width="15%">Amount</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($people->giving as $giving)
                                            <tr>
                                                <td>{{$giving->created_at->isoFormat('dddd,MMMM Do, YYYY')}}{{--Sunday,February 12th,2019--}}</td>
                                                <td>${{$giving->amount}}</td>
                                                <td class="td-actions">
                                                    {!! Form::open(['route' => ['admin.contribution_giving.destroy', $giving->id], 'method' => 'delete']) !!}
                                                    <abbr title="View">
                                                        <a href="{{ route('admin.contribution_giving.show',$giving->id) }}"><i class="la la-eye view"></i></a>
                                                    </abbr>
                                                    <abbr title="Edit">
                                                        <a href="{{ route('admin.contribution_giving.edit',$giving->id) }}"><i class="la la-edit edit"></i></a>
                                                    </abbr>
                                                    <abbr title="Delete">
                                                        {!! Form::button('<i class="la la-trash-o delete"></i>', ['type' => 'submit', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                                    </abbr>
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Profile Row -->
    </div>
    <!-- End Container -->
    <div id="add-family-modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Family</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">close</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-row">
                        <div class="form-group col-md text-center">
                            <a href="{{ route('admin.people.create',$people->id) }}?member_category={{$people->member_category}}" class="btn btn-primary">New People</a>
                            <br/>
                            <span class="badge badge-light font-weight-bold">or</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            {!!Form::open(array('route'=>['admin.people.family_store',$people->id],'method'=>'POST', 'enctype'=>'multipart/form-data'))!!}

                            <div class="form-row">
                                <div class="form-group col-md">
                                    {!! Form::select('family_member_id',$all_people, null, ['placeholder' => "Select People", 'class' => 'form-control select2']) !!}

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="pr-3"><input type="radio" name="status" checked value="household_head"> HOUSEHOLD HEAD</label>
                                    <label class="pr-3"><input type="radio" name="status" value="spouse"> SPOUSE</label>
                                    <label class="pr-3"><input type="radio" name="status" value="child"> CHILD</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block">Save</button>

                                </div>
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('alljs')
    <script src="{{ asset('church/vendors/js/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('church/vendors/js/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('church/vendors/js/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugin/croppie/croppie.js') }}"></script>
    <script type="text/javascript">


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $uploadCrop = $('#upload-demo').croppie({
            enableExif: true,
            viewport: {
                width: 100,
                height: 100,
                type: 'square'
            },
            boundary: {
                width: 120,
                height: 120
            }
        });
        $(document).on('click','#upload-demo-i',function () {
            $(this).addClass('d-none');
            $('#crop').removeClass('d-none');
        });

        $('#upload').on('change', function () {
            var reader = new FileReader();
            reader.onload = function (e) {
                $uploadCrop.croppie('bind', {
                    url: e.target.result
                }).then(function(){
                    console.log('jQuery bind complete');

                });
            }
            reader.readAsDataURL(this.files[0]);
        });


        $('.upload-result').on('click', function (ev) {
            $uploadCrop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (resp) {
                $.ajax({
                    url: "{{route('admin.people.crop_image.store',$people->id)}}",
                    type: "POST",
                    data: {"image":resp},
                    success: function (data) {
                        html = '<img src="' + resp + '" />';
                        $("#upload-demo-i").html(html);
                        $('#crop').addClass('d-none');
                        $('#upload-demo-i').removeClass('d-none');
                    }
                });
            });
        });


    </script>
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
    <script>
        (function ($) {

            'use strict';

            $(function () {
                $('#sorting-table2').DataTable({
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
