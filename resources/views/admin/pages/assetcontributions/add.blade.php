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
                                <div class="tab-content">
                                    <div class="tab-pane" id="tab1">
                                        <div class="section-title mt-5 mb-5">
                                            <h4>Client Informations</h4>
                                        </div>
                                        <form>
                                        <div class="form-group row mb-3">
                                            <div class="col-xl-6 mb-3">
                                                <label class="form-control-label">Name<span class="text-danger ml-2">*</span></label>
                                                <input type="text" placeholder="Name" class="form-control">
                                            </div>
                                            <div class="col-xl-6">
                                                <label class="form-control-label">Email<span class="text-danger ml-2">*</span></label>
                                                <input type="email" placeholder="Email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-5">
                                            <div class="col-xl-6 mb-3">
                                                <label class="form-control-label">Phone</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon addon-secondary">
                                                        <i class="la la-phone"></i>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <label class="form-control-label">Occupation</label>
                                                <input type="text" placeholder="Occupation" class="form-control">
                                            </div>
                                        </div>
                                        <div class="section-title mt-5 mb-5">
                                            <h4>Address</h4>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <div class="col-xl-6 mb-3">
                                                <label class="form-control-label">Address<span class="text-danger ml-2">*</span></label>
                                                <input type="text" placeholder="Address" class="form-control">
                                            </div>
                                            <div class="col-xl-6">
                                                <label class="form-control-label">Country<span class="text-danger ml-2">*</span></label>
                                                <select name="country" class="custom-select form-control">
                                                    <option value="">Select Country</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <div class="col-xl-4 mb-3">
                                                <label class="form-control-label">City<span class="text-danger ml-2">*</span></label>
                                                <input type="text" placeholder="City" class="form-control">
                                            </div>
                                            <div class="col-xl-4 mb-5">
                                                <label class="form-control-label">State<span class="text-danger ml-2">*</span></label>
                                                <input type="email" placeholder="State" class="form-control">
                                            </div>
                                            <div class="col-xl-4">
                                                <label class="form-control-label">Zip<span class="text-danger ml-2">*</span></label>
                                                <input type="email" placeholder="Zip Code" class="form-control">
                                            </div>
                                        </div>
                                        <ul class="pager wizard text-right">
                                            <li class="previous d-inline-block">
                                                <a href="javascript:;" class="btn btn-secondary ripple">Previous</a>
                                            </li>
                                            <li class="next d-inline-block">
                                                <a href="javascript:;" class="btn btn-gradient-01">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div class="section-title mt-5 mb-5">
                                            <h4>Financial Officer</h4>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <div class="col-xl-6 mb-3">
                                                <label class="form-control-label">First Name<span class="text-danger ml-2">*</span></label>
                                                <input type="text" value="" placeholder="First Name" class="form-control">
                                            </div>
                                            <div class="col-xl-6">
                                                <label class="form-control-label">Last Name<span class="text-danger ml-2">*</span></label>
                                                <input type="text" value="" placeholder="Last Name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <div class="col-xl-12">
                                                <label class="form-control-label">Description</label>
                                                <textarea id="basic-example"></textarea>
                                            </div>
                                        </div>
                                                  <div class="form-group row mb-3">
                                            <div class="col-xl-12">
                                                <label class="form-control-label">Estimates Amount</label>
                                                 <input type="text" value="" placeholder="Estimates Amount" class="form-control">
                                            </div>
                                        </div>


                                        <ul class="pager wizard text-right">
                                            <li class="previous d-inline-block">
                                                <a href="javascript:void(0)" class="btn btn-secondary ripple">Previous</a>
                                            </li>
                                            <li class="next d-inline-block">
                                                <a href="javascript:void(0)" class="finish btn btn-gradient-01" data-toggle="modal">Finish</a>
                                            </li>
                                        </ul>
                                    </div>
                                    </form>
                                </div>
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

