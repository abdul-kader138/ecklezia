@extends('admin.layout.admin')

@section('content')
<style type="text/css">
label {
    color: #000;
}
</style>
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Budget Details</h2>
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
                <h2>Budget Details</h2>
                      <div class="widget-options">
                                           
                                                <a href="{{ url('/admin/accounting/budget/pdf/'.$budget->id) }}"><button type="button" class="btn btn-sm btn-square btn-info">
                                                    PDF
                                                </button></a>
                                         
                                            
                                        </div>

            </div>
            <!-- End Widget Header -->

            <div class="col-md-12">
                <!-- Begin Widget Body -->
                <div class="widget-body">
                    <!-- Begin Event -->
                    <div class="panel panel-primary">
                        <div class="panel-body" >

                            <div class="col-md-12">
                                <h2 class="text-center mb-2">{{ $budget->first_name.' '.$budget->last_name }}'s Budget Details</h2>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label" for="title">Holder</label>
                                                <div class="col-md-12">
                                                    <p>{{ $budget->first_name.' '.$budget->last_name }} </p>
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-5 control-label" for="lname">Title</label>
                                                <div class="col-md-12">
                                                  <p>{{ $budget->title }}</p>
                                              </div>
                                          </div>




                                      </fieldset>
                                  </div>

                                  <div class="col-md-6">
                                    <fieldset>
                                       <div class="form-group">
                                        <label class="col-md-5 control-label" for="lname">Created</label>
                                        <div class="col-md-12">
                                          <p>{{ date('M-d-Y h:i A', strtotime($budget->created_at)) }}</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-5 control-label" for="start_date">Last Amount Update</label>
                                    <div class="col-md-12">
                                        <p>{{ date('M-d-Y h:i A', strtotime($budget->updated_at)) }}</p>
                                    </div>
                                </div>

                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset>

                                <div class="form-group">
                                    <label class="col-md-5 control-label" for="sermon">Overspend</label>
                                    <div class="col-md-12">
                                      @if($budget->overspend == 1)<a class="btn btn-sm btn-square btn-primary" href="{{ url('/admin/accounting/budget/expand/'.$budget->id) }}"> Expand</a> @else <a class="btn btn-sm btn-square btn-danger" href="#"> Desible</a> @endif
                                   </div>
                               </div>


                           </fieldset>

                       </div>
                       <div class="col-md-12">
                        <fieldset>

                            <div class="form-group">
                                <label class="col-md-5 control-label" for="sermon">Description</label>
                                <div class="col-md-12">
                                   <p><?php echo $budget->description; ?></p>
                               </div>
                           </div>


                       </fieldset>

                   </div>
                   <div class="col-md-12">
                       <h2 class="text-center">Summery</h2>
                       <hr> 
                   </div>


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
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: {{ number_format($budget->spent / $budget->total_amount *100) }}%" aria-valuenow="{{ number_format($budget->spent / $budget->total_amount *100) }}" aria-valuemin="0" aria-valuemax="100">{{ number_format($budget->spent / $budget->total_amount *100) }}%</div>

                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: {{ $budget->remaining / $budget->total_amount *100 }}%" aria-valuenow="{{ number_format($budget->remaining / $budget->total_amount *100 ) }}" aria-valuemin="0" aria-valuemax="{{ number_format($budget->remaining / $budget->total_amount *100) }}"> {{ number_format($budget->remaining / $budget->total_amount *100) }}%</div>

            </div>
        </div>

          <div class="col-md-12">
            <hr>
                       <h2 class="text-center">Expansions</h2>
                       <hr> 
                                  <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Note</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($expantions as $expantion)
                                <tr>
                                    <td>{{ $expantion->created_at }}</td>
                                    <td>${{ $expantion->expansion_amount }}</td>
                                    <td><?php echo $expantion->note; ?></td>
                                    
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                   </div>

                            <div class="col-md-12">
                                <hr>
                       <h2 class="text-center">Transactions</h2>
                       <hr> 
                                  <div class="table-responsive">
                        <table id="sorting-table" class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>note</th>                                
                                </tr>
                            </thead>
                            <tbody>

                              @foreach($transactions as $transaction)
                                <tr>
                                    <th>{{ $transaction->date }}</th>
                                    <th>{{ $transaction->transaction_amount }}</th>
                                    <th>{{ $transaction->transaction_title }}</th>
                                    <th>{{ $transaction->name }}</th>
                                    <th><?php echo $transaction->note; ?></th>
                                
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