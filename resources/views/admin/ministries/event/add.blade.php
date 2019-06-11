@extends('admin.layout.admin')

@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Events</h2>
                <div>
                    <ul class="breadcrumb">
                       <li>
                        <a href="{{ route('admin.ministries.create') }}" class="btn btn-info btn-square mr-1 mb-2">Add Ministry</a>
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
        <!-- Form -->
        <div class="widget has-shadow">
            <div class="widget-header bordered no-actions d-flex align-items-center flex-space-between">
                <div class="widget-title">
                    <h4>Add Event</h4>
                </div>
                <div class="widget-options">
                  <a href="{{ route('admin.ministries-event') }}" class="btn btn-md btn-primary">Event List</a>
              </div>
          </div>

          <div class="widget-body">
              {!!Form::open(array('route'=>['admin.ministries-add-event',$id],'method'=>'POST', 'enctype'=>'multipart/form-data'))!!}

              @include('admin.ministries.event.fields')

              {!! Form::close() !!}
        </div>
    </div>
    <!-- End Form -->
</div>
</div>
<!-- End Row -->
</div>
<!-- End Container -->
@endsection
