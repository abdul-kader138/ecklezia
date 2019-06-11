@extends('admin.layout.account_admin')
@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Etit Deposit</h2>
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{ route('income') }}" class="btn btn-info btn-square mr-1 mb-2">All Transaction</a>
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
                    <h2>Edit Deposit</h2>

                </div>
                <!-- End Widget Header -->

                <div class="col-md-12">
                    <!-- Begin Widget Body -->
                    <div class="widget-body">
                        <!-- Begin Event -->
                        <div class="panel panel-primary">
                            <div class="panel-body" >
        <form action="{{ url('/admin/accounting/deposit-update/'.$deposit->id) }}" method="POST" name="editDepositForm" enctype="multipart/form-data"
               >
                    @csrf
                    <div class="row">
                     <div class="form-group col-xl-6">
                        <label>Account</label>
                        <select name="account_id" class="form-control"  required>
                        <option value=""> select</option>
                             @foreach($allAccounts as $account)
                                <option value="{{ $account->id }}" @if($account->id  ==  $deposit->account_id) selected @endif >{{ $account->account_name }}</option>
                             @endforeach
                        </select>
                    </div> 

                    <div class="form-group col-xl-6">
                         <label>Payer</label>
                            <input type="text" name="payer" value="{{ $deposit->payer }}" class="form-control"  required>
                    </div>
                </div>

                <div class="row">
                  <div class="form-group col-xl-6">
                    <label>Amount</label>
                    <input type="text" class="form-control" placeholder="Amount" name="deposit_amount" value="{{ $deposit->deposit_amount }}">
                </div>
                <div class="form-group col-xl-6">
                     <label>Date</label>
                    <input id="start_date" name="date" type="text" class="form-control" value="{{ $deposit->date }}">
                </div>
            </div>
                            <div class="row">
                  <div class="form-group col-xl-6">
                    <label>Category</label>                                        
                    <input id="start_date" name="category" type="text" class="form-control">
                </div>
                <div class="form-group col-xl-6">
                    <label>Payment Method </label>
                      <select class="form-control show-menu-arrow" data-live-search="true" name="method" required>
                            <option >selecte</option>
                            <option value="Online Banking">Online Banking</option>
                            <option value="Mobile Banking">Mobile Banking</option>
                            <option value="Bank Transfer">Bank Transfer</option>
                            <option value="Cash">Cash</option>
                        </select>
                </div>
            </div>
                <div class="row">
                <div class="form-group col-xl-6">
                     <label>Reff No.</label>
                    <input type="text" class="form-control" placeholder="Reff No." name="ref_no" required  value="{{ $deposit->ref_no }}">
                </div>
            </div>
            <div class="row">
                  <div class="form-group col-xl-12">
                    <label>Description</label>
                    <textarea class="form-control" id="basic-example" name="description"> <?php echo $deposit->description; ?></textarea>
                </div>
                
            </div>
                <div class="row">
                  <div class="form-group col-xl-12">
                    <label class="col-xl-12">Attach File</label>
                    <img src="{{ asset('uploads/images/files/'.$deposit->file) }}" height="45" width="45" alt=""> <p>{{ $deposit->file }}</p>
                    <input type="file" class="form-control"  name="file">
                </div>
                
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

    <script>
        document.forms['editDepositForm'].elements['method'].value = '{{  $deposit->method }}';
    </script>
@endsection