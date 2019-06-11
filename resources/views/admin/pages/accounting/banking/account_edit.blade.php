@extends('admin.layout.admin')

@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Banking</h2>
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{ url(route('banking')) }}" class="btn btn-info btn-square mr-1 mb-2">Banking</a>
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
                    <h2>Edit Account</h2>

                </div>
                <!-- End Widget Header -->

                <div class="col-md-12">
                    <!-- Begin Widget Body -->
                    <div class="widget-body">
                        <!-- Begin Event -->
                        <div class="panel panel-primary">
                            <div class="panel-body" >
                       <form action="{{ url('/admin/accounting/update-account/'.$account->id) }}" method="POST">
                                     @csrf
                                <div class="col-md-12">
                                     <div class="row">
                                        <div class="form-group col-xl-6">
                                            <label>Holder Name</label>
                                            <select name="holder_id" class="selectpicker form-control"  required>
                                                <option value=""> select</option>
                                                 @foreach($allPeople as $people)
                                                    <option value="{{ $people->id }}"@if($people->id == $account->holder_id) selected @endif data-content='<img src="{{ asset('uploads/images/people/'.$people->file) }}" width="20" height="20">' >{{ $people->first_name.' '.$people->last_name }}</option>
                                                 @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <label>Account Name</label>
                                            <input type="text" class="form-control" placeholder="Account Name" name="account_name"  value="{{ $account->account_name }}" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xl-4">
                                            <label>Initial Balance</label>
                                            <input type="text" class="form-control" placeholder="Initial Balance" name="initial_balance" value="{{ $account->initial_balance }}" required>
                                        </div>


                                          <div class="form-group col-xl-4">
                                            <label>Account Number</label>
                                            <input type="text" class="form-control" placeholder="Account Number" name="account_number" value="{{ $account->account_number }}" required>
                                        </div>
                                        <div class="form-group col-xl-4">
                                             <label>Branch Code</label>
                                            <input type="text" class="form-control" name="branch_code" value="{{ $account->branch_code }}" placeholder="Branch Code" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xl-12">
                                             <label>Bank Branch</label>
                                            <input type="text" class="form-control" placeholder="Bank Branch" name="bank_branch" value="{{ $account->bank_branch }}" required>
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