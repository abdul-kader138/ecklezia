@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Confidential Notes</h2>
                    <div>
                                            <ul class="breadcrumb">
                        <li >
                            <a href="{{ route('admin.confidential.create') }}" class="btn btn-md btn-info btn-square mr-1 mb-2"> Add Confidential</a>
                        </li>
                        <li >
                            <a href="{{ route('admin.confidential.index') }}" class="btn btn-info btn-square mr-1 mb-2">  View Confidential</a>
                        </li>

                    </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- End Row -->
        <div class="row" id="print-content">
            <div class="col-xl-12">
                <!-- Start Sorting -->
                <div class="widget has-shadow">

                    <div class="widget-header bordered no-actions d-flex align-items-center flex-space-between">
                        <div class="widget-title">
                            <h4>View Confidential Notes</h4>
                        </div>
                                                 <ul class="breadcrumb">
                       <li class="d-print-none">
                        <a href="#" class="btn btn-md btn-info btn-square mr-1 mb-2" id="print-btn">Print</a>
                    </li>

                </ul>

                    </div>

                    <div class="widget-body">
                        <div class="row">
                            <div class="col-xl-12">
                           <span><strong>Name : </strong></span>  <span>{{ $confidential->first_name}}</span>
                        </div>
                         
                        </div>
                          <div class="row">
                            <div class="col-xl-12">
                          <span><strong>Purpose : </strong></span> <span>{{ $confidential->purpose }}</span>  
                        </div>

                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                            <span><strong>Date : </strong></span> <span>{{ $confidential->date }}</span>  
                        </div>
                       
                        </div>
                         <div class="row">
                            <div class="col-xl-12">
                            <span><strong>Category : </strong></span> <span>{{ $confidential->category }}</span>  
                        </div>
                       
                        </div>
                        <br>
                          <div class="row">
                            <div class="col-xl-12">
                            <span><strong>Phone : </strong></span> <span>{{ $confidential->phone }}</span>  
                        </div>
                       
                        </div>
                        <br>
                         <div class="row">
                         
                        <div class="col-xl-12">
                            <strong>Notes : </strong> <br>
                            <p>{!! $confidential->notes !!}</p>
                        </div> 
                        </div>

                        <br>
                         <div class="row">
                         
                        <div class="col-xl-12">
                            <strong>Conclusion : </strong> <br>
                            <p>{!! $confidential->conclusion !!}</p>
                        </div> 
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
    <script>
        (function ($) {

            'use strict';

            $(function () {
                $(document).on('click','#print-btn',function () {
                    $("#print-content").printThis();
                })
            });

        })(jQuery);
    </script>
@endpush


