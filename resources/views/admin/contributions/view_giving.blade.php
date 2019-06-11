@extends('admin.layout.admin')
@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Single Giving Details</h2>
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{ url('/admin/pledge/add') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Pledge</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.contribution.create') }}" class="btn btn-info btn-square mr-1 mb-2">Add Contribution</a>
                        </li>
                        <li>
                            <a href="javascript:viod(0)" data-toggle="modal" data-target="#modal-centered" class="btn btn-info btn-square mr-1 mb-2">Add Giving</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <div id="modal-centered" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Giving</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">close</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!!Form::open(array('route'=>'admin.contribution_giving.store','method'=>'POST', 'enctype'=>'multipart/form-data'))!!}

                    @include('admin.contributions.fields_giving')

                    {!! Form::close() !!}
        </div>
    </div>
</div>
</div>
<!-- End Row -->
<div class="row flex-row">
    <div class="col-xl-3">
        <!-- Begin Widget -->
        <div class="widget has-shadow">
            <div class="widget-body">
                <div class="mt-5">
                    @if($giving->people->file)
                        <img width="120" height="120" src="{{ asset('uploads/images/people/'.$giving->people->file) }}" alt="..." class="avatar d-block mx-auto">
                    @else
                        <img width="120" height="120"  src="{{asset('church/img/avatar/avatar-01.jpg')}}" alt="..." class="avatar  d-block mx-auto">

                    @endif
                </div>
                <h3 class="text-center mt-3 mb-1">{{$giving->people->full_name}}</h3>
                <p class="text-center">{{$giving->people->email}}</p>
                <div class="em-separator separator-dashed"></div>

            </div>
        </div>
        <!-- End Widget -->
    </div>
    <div class="col-xl-9">
        <div class="widget has-shadow">
      
<div class="widget-header bordered no-actions d-flex align-items-center">
            <h4>Giving Details</h4>
                                    </div>
            <div class="widget-body">

                <div class="table-responsive">
                    <table class="table table-bordered giving-table">
                        <thead>
                            <tr>
                                <th class="text-center bg-light-ash">Contribution Id</th>
                                <th class="text-center"> <a href="{{route('admin.contribution.show',$giving->contribution_id)}}">{{$giving->contribution->contribution_id}}</a></th>
                                <th class="text-center bg-light-ash">Giving Type</th>
                                <th class="text-center">{{$giving->contribution->giving_type}}</th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th class="text-center bg-light-ash">Method</th>
                                <th class="text-center"> {{$giving->giving_method}}</th>
                                <th class="text-center bg-light-ash">Amount</th>
                                <th class="text-center">${{$giving->amount}}</th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th class="text-center bg-light-ash">Date</th>
                                <th class="text-center"> {{$giving->created_at->isoFormat('dddd,MMMM Do,YYYY')}}</th>
                                <th class="text-center bg-light-ash"> Contribution Account</th>
                                <th class="text-center">{{$giving->account}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>


                <div class="em-separator separator-dashed"></div>

            </div>
        </div>
    </div>
</div>
<!-- End Row -->
</div>
<!-- End Container -->
@endsection



