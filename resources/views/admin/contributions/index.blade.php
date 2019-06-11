@extends('admin.layout.admin')
@section('content')
<style type="text/css">
    .td-actions {
float: left;
    }
</style>
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Contribution List</h2>
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{ url('/admin/pledge/create') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Pledge</a>
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
        <!-- End Page Header -->
        <div id="modal-centered2" class="modal fade">
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

                        <div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Full Name</label>
    <div class="col-lg-8">
        {!! Form::text('contributor_name', null, ['placeholder' => "Enter Your Name", 'class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Contribution Id</label>
    <div class="col-lg-8">
        {!! Form::select('contribution_id',$contributions->pluck('contribution_id','id'), null, ['placeholder' => "Please Select", 'class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Method</label>
    <div class="col-lg-8">
        <div class="select">
            {!! Form::select('giving_method',[
            'cash'=>'Cash',
            'cheque'=>'Cheque',
            'credit'=>'Credit',
            ], null, ['placeholder' => "Please Select", 'class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Amount</label>
    <div class="col-lg-8">
        {!! Form::text('amount', null, ['placeholder' => "Enter Amount", 'class' => 'form-control']) !!}
    </div>
</div>


<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"> Contribution Account</label>
    <div class="col-lg-8">
 {!! Form::select('account',[
            'saving'=>'Saving',
            'checking'=>'Checking',
            'church_building_fund'=>'Church Building Fund',
            'other'=>'Other',
            ], null, ['placeholder' => "Please Select", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"></label>
    <div class="col-lg-8">
  {!! Form::text('other', null, ['placeholder' => "Enter Other Contribution Account", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="text-center">
    <button class="btn btn-gradient-04" type="submit">Save</button>
  <!--   <button class="btn btn-shadow" type="reset">Reset</button> -->
  <a href="javascript:viod(0)" data-toggle="modal"  data-target="#modal-centered2"  class="btn btn-gradient-04">Save & Continue</a>
</div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    <!-- End Row -->
    <div class="row">
        <div class="col-xl-12">
            <!-- Start Sorting -->
            <div class="widget has-shadow">

                <div class="widget-header bordered no-actions d-flex align-items-center flex-space-between">
                    <div class="widget-title">
                        <h4>Contribution List</h4>
                    </div>

                    </div>

                    <div class="widget-body">
                        <div class="table-responsive">
                            <table id="sorting-table" class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th width="22%">Date</th>
                                        <th width="28%">Giving Type</th>
                                        <th width="12%">Status</th>
                                        <th width="18%">Amount</th>
                                        <th width="20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contributions as $key => $row)
                                        <tr>
                                            <td>{{ $row->date }}</td>
                                            <td>{{ $row->giving_type }}</td>
                                            <td><span><span class="badge-text badge-text-small info">{{ $row->post_type }}</span></span></td>
                                            <td>${{$row->giving->sum('amount')}}</td>

                                            <td class="td-actions">
                                                {!! Form::open(['route' => ['admin.contribution.destroy', $row->id], 'method' => 'delete']) !!}
                                                <abbr title="View">
                                                    <a href="{!! route('admin.contribution.show', [$row->id]) !!}"><i class="la la-eye view"></i></a>
                                                </abbr>
                                                <abbr title="Edit">
                                                    <a href="{!! route('admin.contribution.edit', [$row->id]) !!}"><i class="la la-edit edit"></i></a>
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
                <!-- End Sorting -->
            </div>
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

