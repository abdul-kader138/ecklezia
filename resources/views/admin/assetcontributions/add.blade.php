@extends('admin.layout.admin')

@section('content')
<style type="text/css">
    .step-wizard li {
        width: 50%;
    }
</style>
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Asset Contribution</h2>
                <div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/admin/home')}}"><i class="ti ti-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">App</a></li>
                        <li class="breadcrumb-item active">Asset Contribution</li>
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
                        <h4>Add Asset Contribution</h4>
                    </div>
                </div>

                <div class="widget-body">
                    <div class="row flex-row justify-content-center">
                        <div class="col-xl-10">
                            <div id="rootwizard">
                                <div class="step-container">
                                    <div class="step-wizard">
                                        <div class="progress">
                                            <div class="progressbar"></div>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="#tab1" data-toggle="tab">
                                                    <span class="step">1</span>
                                                    <span class="title">Step 1</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab2" data-toggle="tab">
                                                    <span class="step">2</span>
                                                    <span class="title">Step 2</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                {!!Form::open(array('route'=>'admin.asset-contribution.store','method'=>'POST', 'enctype'=>'multipart/form-data'))!!}

                                @include('admin.assetcontributions.fields')

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
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
    <script src="{{ asset('church/vendors/js/bootstrap-wizard/bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('church/vendors/js/app/app.min.js') }}"></script>
    <script src="{{ asset('church/js/components/wizard/form-wizard.min.js') }}"></script>
    <script type="text/javascript" src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc"></script>
    <script type="text/javascript">
        tinymce.init({
  selector: 'textarea#basic-example',
  height: 230,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount'
  ],
  toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tiny.cloud/css/codepen.min.css'
  ]
});

    </script>

    @endpush

