<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('admin.layout.includes_top')
<body id="page-top">
    <!-- Begin Preloader -->
    {{--<div id="preloader">
        <div class="canvas">
            <img src="{{asset('church/img/logo.png')}}" alt="logo" class="loader-logo">
            <div class="spinner"></div>
        </div>
    </div>--}}
    <!-- End Preloader -->

    <div class="page {{ Request::path() ==  'admin/email' ? 'mail' : ''  }}">
        @include('admin.layout.header')

        <!-- Begin Page Content -->
        <div class="page-content d-flex align-items-stretch">

            @if(Request::is('admin/email'))
            @include('admin.layout.email_sidebar')
            @else
            @include('admin.layout.sidebar')
            @endif

            <!-- Begin Content -->
            <div class="content-inner {{ Request::path() ==  'admin/profile' ? 'profile' : ''  }}"
            >

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