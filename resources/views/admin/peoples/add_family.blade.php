@extends('admin.layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Peoples</h2>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- End Row -->
        <div class="row">
            <div class="col-xl-12">
                <!-- Start Sorting -->
                <div class="widget has-shadow">

                    <div class="widget-header bordered d-flex align-items-center flex-space-between">
                        <div class="widget-title">
                            <h4>Add People</h4>
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
                                                <li>
                                                    <a href="#tab3" data-toggle="tab">
                                                        <span class="step">3</span>
                                                        <span class="title">Step 3</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    {!! Form::model($default_field, ['route' => ['admin.people.store', $parent->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                                    @include('admin.peoples.fields')

                                    {!! Form::close() !!}
                                </div>
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
    <script src="{{ asset('church/vendors/js/bootstrap-wizard/bootstrap.wizard.min.js') }}"></script>

    <script>
        changeBaptized();
        function changeBaptized(){
            if($('#baptized').val() === 'no_baptized'){
                $('#baptized_com').addClass('hide');
            }else{
                $('#baptized_com').removeClass('hide');
            }
        }
        $(function () {
            $(document).on('change','#baptized',function () {
                changeBaptized();
            });
        });
        function activity_same_address(){
            var check =$('#check-1').is(':checked');
            if(check){
                $('#m_ad_1').addClass('d-none');
                $('#m_ad_2').addClass('d-none');
                $('#m_ad_1').removeClass('d-block');
                $('#m_ad_2').removeClass('d-block');
            }else{
                $('#m_ad_1').addClass('d-block');
                $('#m_ad_2').addClass('d-block');
                $('#m_ad_1').removeClass('d-none');
                $('#m_ad_2').removeClass('d-none');
            }
        }
        $(document).on('change','#check-1',function () {
            activity_same_address();
        })
        $(function () {
            // $('#check-1').attr('checked',true);

            activity_same_address();
            $('#rootwizard').bootstrapWizard({
                onTabShow: function (tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index + 1;
                    var $percent = ($current / $total) * 100;
                    $('#rootwizard .progressbar').css({
                        width: $percent + '%'
                    });
                }
            });
            $('#rootwizard .finish').click(function () {
                $('#success-modal').modal();
            });
            $('#baptized_date').daterangepicker({
                singleDatePicker: true
            });

    });
    </script>
@endpush

