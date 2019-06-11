<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('admin.layout.includes_top')
<body id="page-top">


    <div class="page">
        @include('admin.layout.header')

        <!-- Begin Page Content -->
        <div class="page-content d-flex align-items-stretch">

            
            @include('admin.layout.accounting_sidebar')
           

            <!-- Begin Content -->
            <div class="content-inner">

                @yield('content')

                @include('admin.layout.footer')
                @include('admin.layout.off_sidebar')

            </div>
            <!-- End Content -->

        </div>
        <!-- End Page Content -->
    </div>

    @include('admin.layout.includes_bottom')


</body>
</html>