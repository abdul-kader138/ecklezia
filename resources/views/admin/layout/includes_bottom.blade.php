<!-- Begin Vendor Js -->
<script src="{{ asset('church/vendors/js/base/jquery.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/base/core.min.js') }}"></script>
<!-- End Vendor Js -->
<!-- <script src="{{asset('plugin/select2/select2.full.min.js')}}"></script> -->
<!-- Begin Page Vendor Js -->
<script src="{{ asset('church/vendors/js/nicescroll/nicescroll.min.js') }}"></script>
<script src="{{asset('church/vendors/js/photoswipe/photoswipe.min.js')}}"></script>
<script src="{{asset('church/vendors/js/photoswipe/photoswipe-ui-default.min.js')}}"></script>
<script src="{{ asset('church/vendors/js/tabledit/jquery.tabledit.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/chart/chart.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/progress/circle-progress.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/calendar/moment.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/calendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/datepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('church/vendors/js/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/app/app.js') }}"></script>
<!-- End Page Vendor Js -->
<script src="{{asset('church/js/components/chartjs/chartjs.min.js')}}"></script>
<!-- Begin Page Snippets -->
<script src="{{ asset('church/js/dashboard/db-default.js') }}"></script>
<!-- End Page Snippets -->


<!-- Begin Page Snippets -->
<script src="{{asset('church/js/components/datepicker/datepicker.js')}}"></script>
<script src="{{asset('church/vendors/js/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{asset('plugin/print_this.js')}}"></script>

<!---email -->
 <script src="{{asset('church/js/app/mail/mail.min.js')}}"></script>
 <script type="text/javascript">

 </script>
 <script type="text/javascript" src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=2ho7i38e7su3jrdh4v8e4s5o7dofy35scyd9qxpfkwlnpmsu"></script>
@include('admin.layout._msg')
@stack('scripts')
 <script>tinymce.init({selector:'textarea'});</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
        <script type="text/javascript">
            // $('.select2').select2({
            //     width:'100%'
            // });


            $(document).ready(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });


            });
             $(function () {
                $('#datetimepicker2').datetimepicker({
                    format: 'LT'
                });
            });
        </script>

@stack('alljs')
