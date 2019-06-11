@extends('admin.layout.admin')

@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Budget</h2>
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{ url('/admin/accounting/budget') }}" class="btn btn-info btn-square mr-1 mb-2">View Budget</a>
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
                    <h2>Add Budget</h2>

                </div>
                <!-- End Widget Header -->

                <div class="col-md-12">
                    <!-- Begin Widget Body -->
                    <div class="widget-body">
                        <!-- Begin Event -->
                        <div class="panel panel-primary">
                            <div class="panel-body" >
                                <form action="{{ url('/admin/accounting/budget/save') }}" method="POST">
                                     @csrf
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">                     
                                            <fieldset>
                                                <div class="form-group">
                                                    <label class="col-md-5 control-label" for="title">Holder</label>
                                                    <div class="col-md-12">
                                                       
                                                      <select name="holder_id" class="selectpicker form-control"  required>
                                                            <option value=""> select</option>
                                                             @foreach($allPeople as $people)
                                                                <option value="{{ $people->id }}" data-content='<img src="{{ asset('uploads/images/people/'.$people->file) }}" width="20" height="20">' >{{ $people->first_name.' '.$people->last_name }}</option>
                                                             @endforeach
                                                        </select>
                                                    
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-5 control-label" for="lname">Title</label>
                                                    <div class="col-md-12">
                                                       <input name="title" type="text" class="form-control" placeholder="Title" required>
                                                    </div>
                                                </div>

                                             


                                            </fieldset>
                                        </div>

                                        <div class="col-md-6">
                                            <fieldset>
                                                   <div class="form-group">
                                                    <label class="col-md-5 control-label" for="lname">Amount</label>
                                                    <div class="col-md-12">
                                                       <input name="total_amount" type="text" class="form-control" placeholder="Amount" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-5 control-label" for="start_date">Overspend</label>
                                                    <div class="col-md-12">
                                                       <select name="overspend" class="form-control required">
                                                           <option value="0">Disabled</option>
                                                           <option value="1">Enabled</option>
                                                       </select>
                                                    </div>
                                                </div>                                               
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset>

                                                <div class="form-group">
                                                    <label class="col-md-5 control-label" for="sermon">Description</label>
                                                    <div class="col-md-12">
                                                        <textarea class="form-control" id="basic-example" placeholder="Description" name="description"  ></textarea>
                                                    
                                                    </div>
                                                </div>

                                               
                                            </fieldset>
                                            <input type="submit" value="Create" class="btn btn-md btn-success pull-right" name="">
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
</script>
@endsection