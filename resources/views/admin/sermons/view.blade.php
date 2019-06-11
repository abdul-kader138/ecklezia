@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid"  id="print-content">
        <!-- Begin Page Header-->
        <div class="row d-print-none">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Sermons</h2>
                    <div>
                                                        <ul class="breadcrumb">
                       <li>
                        <a href="{{ route('admin.sermon-planners.create') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Sermons</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.sermon-planners.index') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">View Sermons</a>
                    </li>

                </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- End Row -->
        <div class="row">
            <div class="col-xl-12">
                <!-- Start Sorting -->
                <div class="widget has-shadow"  >

                    <div class="widget-header bordered no-actions d-flex align-items-center flex-space-between">
                        <div class="widget-title">
                            <h4>View Sermons</h4>
                        </div>

                        <div class="widget-options">
                         <ul class="breadcrumb">
                       <li class="d-print-none">
                        <a href="#" class="btn btn-md btn-info btn-square mr-1 mb-2" id="print-btn">Print</a>
                    </li>

                </ul>
                        </div>
                    </div>

                    <div class="widget-body" id="print-content">
                        <div class="row">
                            <div class="col-xl-12">
                           <span><strong>Sermons Title : </strong></span>  <span>{{ $sermon->title }}</span>
                        </div>
                         
                        </div>
                          <div class="row">
                            <div class="col-xl-12">
                          <span><strong>Sermon Purpose : </strong></span> <span>{{$sermon->purpose}}</span>
                        </div>

                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                            <span><strong>Church : </strong></span> <span>Empowerment Cathedral International</span>  
                        </div>
                       
                        </div>
                         <div class="row">
                            <div class="col-xl-12">
                            <span><strong>Date : </strong></span> <span>{{\Carbon\Carbon::parse($sermon->preaching_date)->format('l, F jS, Y')}}</span>
                        </div>
                       
                        </div>
                        <br>
                         <div class="row">
                         
                        <div class="col-xl-12">
                            <strong>Opening Scripture : </strong> <br>
                            <p>{{ $sermon->opening_scripture }}</p>
                        </div> 
                        </div>

                        <br>
                         <div class="row">
                         
                        <div class="col-xl-12">
                            <strong>Main Scripture : </strong> <br>
                            <p>{{ $sermon->main_scripture }}</p>
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


