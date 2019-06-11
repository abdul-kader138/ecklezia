@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Ministry</h2>
                    <div>
                        <ul class="breadcrumb">
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
                            <h4>Add Ministry</h4>
                        </div>

                        <div class="widget-options">
                            <a href="{{ route('admin.ministries.index') }}" class="btn btn-md btn-primary">Ministry List</a>
                        </div>
                    </div>

                    <div class="widget-body">
                        {!! Form::model($ministry, ['route' => ['admin.ministries.update', $ministry->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                        @include('admin.ministries.fields')

                        {!! Form::close() !!}
                    </div>
                </div>
                <!-- End Form -->
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->
@endsection

@push('alljs')
    <script>
        function ministries_status_activity(){
            if($('#ministries_status').val() === 'other'){
                $('#others_text').removeClass('d-none');
            }else{
                $('#others_text').addClass('d-none');
            }
        }
        $(function () {
            $(document).on('change','#ministries_status',function () {
                ministries_status_activity();
            });
        })
        ministries_status_activity();
    </script>
@endpush

