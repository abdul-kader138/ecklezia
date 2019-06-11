@extends('admin.layout.admin')
@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Single Contribution Details</h2>
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

                <div class="em-separator separator-dashed"></div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)"><strong>Contribution Id</strong>  <br>
                            {{ $contribution->contribution_id }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)"><strong>Giving Type</strong> 
                            <br>
                            {{ $contribution->giving_type }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-danger btn-block btn-square mr-1 mb-2">Total</button>
                    </li>
                    <li class="nav-item">
                      <p class="black"><strong>Cash : {{$contribution->giving->where('giving_method','cash')->sum('amount')}}</strong> </p>
                  </li>
                  <li class="nav-item">
                   <p class="black"><strong>Check : {{$contribution->giving->where('giving_method','cheque')->sum('amount')}}</strong></p>
               </li>
               <li class="nav-item">
                   <p class="black"><strong> Credit : {{$contribution->giving->where('giving_method','credit')->sum('amount')}}</strong></p>
               </li>
               <li class="nav-item">
                   <button type="button" class="btn btn-danger btn-block btn-square mr-1 mb-2">Total Received : ${{$contribution->giving->sum('amount')}}</button>
               </li>

           </ul>
           <div class="em-separator separator-dashed"></div>
       </div>
   </div>
   <!-- End Widget -->
</div>
<div class="col-xl-9">
    <!-- Start Sorting -->
    <div class="widget has-shadow">

        <div class="widget-body">
            <div class="table-responsive">
                <table id="sorting-table" class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th width="35%">Date</th>
                            <th width="30%">Name</th>
                            <th width="15%">Amount</th>
                            <th width="20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($contribution->giving as $giving)
                        <tr>
                            <td>{{$giving->created_at->isoFormat('dddd,MMMM Do, YYYY')}}{{--Sunday,February 12th,2019--}}</td>
                            <td>{{optional($giving->people)->full_name}}</td>
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

