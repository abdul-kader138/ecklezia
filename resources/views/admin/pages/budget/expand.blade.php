@extends('admin.layout.admin')

@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Expand Budget</h2>
                <div>
                    <ul class="breadcrumb">
                             <li>
                        <a href="{{ url('/admin/accounting/budget/add') }}" class="btn btn-info btn-square mr-1 mb-2">Add Budget</a>
                    </li>
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
                    <h2>Expand Budget</h2>

                </div>
                <!-- End Widget Header -->

                <div class="col-md-12">
                    <!-- Begin Widget Body -->
                    <div class="widget-body">
                        <!-- Begin Event -->
                        <div class="panel panel-primary">
                            <div class="panel-body" >
                                <form action="{{ url('/admin/accounting/budget/expand-save/'.$budget->id) }}" method="POST">
                                    @csrf
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset>
                                                <div class="form-group">
                                                    <label class="col-md-5 control-label" for="title">Expansion Amount</label>
                                                    <div class="col-md-12">
                                                         <input type="text" class="form-control" placeholder="Expansion Amount" name="expansion_amount">
                                                    </div>
                                                </div>

                                            </fieldset>
                                        </div>


                                        <div class="col-md-12">
                                            <fieldset>

                                                <div class="form-group">
                                                    <label class="col-md-5 control-label" for="sermon">Note</label>
                                                    <div class="col-md-12">
                                                        <textarea class="form-control" id="basic-example" placeholder="Note" name="note"></textarea>
                                                    
                                                    </div>
                                                </div>

                                               
                                            </fieldset>
                                            <input type="submit" value="Expand" class="btn btn-md btn-success pull-right" name="">
                                        </div>
                                    </form>

                  <div class="col-md-12">
                       <h2 class="text-center">Summery</h2>
                       <hr> 
                   </div>

                <div class="raw"></div>
                   <div class="col-md-4 text-center">
                    <b class="black">Total Amount</b> <br>
                    <button class="btn btn-md btn-default">${{ $budget->total_amount }}</button>
                </div>
                <div class="col-md-4 text-center">
                 <b class="black">Spent</b> <br>
                 <button class="btn btn-md btn-danger">${{ $budget->spent }}</button>
             </div>
             <div class="col-md-4 text-center">
                 <b class="black">Remaining</b> <br>
                 <button class="btn btn-md btn-success">${{ $budget->remaining }}</button>
             </div>
             <div style="margin-top: 25px;" class="col-md-12 text-center">

               <div class="progress progress-lg mb-3">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: {{ number_format($budget->spent / $budget->total_amount *100) }}%" aria-valuenow="{{ number_format($budget->spent / $budget->total_amount *100) }}" aria-valuemin="0" aria-valuemax="100">{{ number_format($budget->spent / $budget->total_amount *100,2) }}%</div>

                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: {{ $budget->remaining / $budget->total_amount *100 }}%" aria-valuenow="{{ number_format($budget->remaining / $budget->total_amount *100 ) }}" aria-valuemin="0" aria-valuemax="{{ number_format($budget->remaining / $budget->total_amount *100) }}"> {{ number_format($budget->remaining / $budget->total_amount *100,2) }}%</div>

            </div>
        </div>

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