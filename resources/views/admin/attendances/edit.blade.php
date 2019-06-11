@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Attendance</h2>
                    <div>

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
                            <h4>Update Attendance</h4>
                        </div>

                        <div class="widget-options">
                            <a href="{{ route('admin.attendance.index') }}" class="btn btn-md btn-primary">Attendance List</a>
                        </div>
                    </div>

                    <div class="widget-body">
                        {!! Form::model($attendance, ['route' => ['admin.attendance.update', $attendance->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                        @include('admin.attendances.fields')

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

        $(function () {

            $('#date').daterangepicker({
                singleDatePicker: true
            });
            $(document).on('change','#service_id',function () {
                $.ajax({
                    url:'{{route('admin.attendance.get_data')}}',
                    method:'GET',
                    data:{
                        id:$(this).val()
                    },
                    success:function (res) {
                        $('#speaker').val(res.speaker);
                        $('#attendance').val(res.attendance);
                    }
                })
            })
        });
    </script>
@endpush


