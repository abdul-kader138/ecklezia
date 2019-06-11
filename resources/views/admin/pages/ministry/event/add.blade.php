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
                        <a href="{{ url('/admin/ministry/add') }}" class="btn btn-info btn-square mr-1 mb-2">Add Ministry</a>
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
                  <a href="{{ url('/admin/ministry/event') }}" class="btn btn-md btn-primary">Event List</a>
              </div>
          </div>

          <div class="widget-body">
            <form class="needs-validation" novalidate>

                <div class="form-group row d-flex align-items-center">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Ministry Name</label>
                    <div class="col-lg-5">
                        <select name="country" class="custom-select form-control">
                            <option value="">Select</option>
                            <option value="babies">Youth</option>
                            <option value="babies">Youth</option>
                            <option value="babies">Youth</option>
                            <option value="babies">Youth</option>
                            <option value="babies">Youth</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row d-flex align-items-center">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Event Date</label>
                    <div class="col-lg-5">
                        <input type="text" name="date" id="date" class="form-control" placeholder="Enter Date">
                    </div>
                </div>

                <div class="form-group row d-flex align-items-center">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Event Description</label>
                    <div class="col-lg-5">
                        <textarea class="form-control"></textarea>
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-gradient-04" type="submit">Submit Form</button>
                    <button class="btn btn-shadow" type="reset">Reset</button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Form -->
</div>
</div>
<!-- End Row -->
</div>
<!-- End Container -->
@endsection
