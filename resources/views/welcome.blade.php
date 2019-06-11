<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ecklezia - Coming Soon</title>
    <meta name="description" content="Ecklezia is a Web App and Admin Dashboard Template built with Bootstrap 4">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
      WebFont.load({
        google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>
<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('church/img/favicon.ico')}}" type="image/x-icon">
<link rel="icon" href="{{asset('church/img/favicon.ico')}}" type="image/x-icon">

<!-- Stylesheet -->
<link rel="stylesheet" href="{{asset('church/vendors/css/base/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('church/vendors/css/base/elisyam-1.5.min.css')}}">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
            <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('church/icons/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('church/icons/lineawesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('church/icons/themify/css/themify-icons.min.css') }}">
    </head>
    <body class="bg-fixed-04">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="{{asset('church/img/logo.png')}}" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <!-- Begin Container -->
        <div class="container-fluid h-100 overflow-y">
            <div class="row flex-row h-100">
                <div class="col-12 my-auto">
                    <div class="coming-soon mx-auto">
                        <div class="logo-centered">
                            <a href="{{ route('login') }}">
                                <img src="{{asset('church/img/logo.png')}}" alt="logo">
                            </a>
                        </div>
                        <h1>Coming <span>Soon</span></h1>
                        <div class="sub-heading">Website Under Construction</div>
                        <div class="row align-items-center justify-content-center">
                            <div id="countdown"></div>
                        </div>
                        <div class="notify-form">
                            <div class="heading">
                                We will let you know when we are launching
                            </div>
                            <form>
                                <div class="group material-input">
                                    <input type="email" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Enter your email address ...</label>
                                </div>
                            </form>
                        </div>
                        <div class="button text-center">
                            <a href="#" class="btn btn-lg btn-gradient-01">Notify me</a>
                        </div>
                        <div class="follow-link">
                            <ul class="social-network">
                                <li><a target="_blank" href="https://www.facebook.com/Ecklezia-Church-Managment-System-254362842136876/" class="ico-facebook" title="Facebook">
                                    <i class="ion-social-facebook"></i></a>
                                </li>
                                <li><a target="_blank" href="https://twitter.com/ecklezia" class="ico-twitter" title="Twitter">
                                     <i class="ion-social-twitter"></i></a>
                                </li>
                                <li><a target="_blank" href="#" class="ico-youtube" title="Youtube">
                                    <i class="ion-social-youtube"></i></a>
                                </li>
                                <li><a target="_blank" href="#" class="ico-linkedin" title="Linkedin">
                                    <i class="ion-social-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div> 
                    <!-- End Coming Soon -->
                </div>
                <!-- End Col -->
            </div> 
            <!-- End Row -->
        </div>
        <!-- End Container -->
        <!-- Begin Vendor Js -->
        <script src="{{asset('church/vendors/js/base/jquery.min.js')}}"></script>
        <script src="{{asset('church/vendors/js/base/core.min.js')}}"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="{{asset('church/vendors/js/nicescroll/nicescroll.min.js')}}"></script>
        <script src="{{asset('church/vendors/js/countdown/countdown.min.js')}}"></script>
        <script src="{{asset('church/vendors/js/app/app.min.js')}}"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="{{asset('church/js/pages/coming-soon.min.js')}}"></script>
        <!-- End Page Snippets -->
    </body>
    </html>