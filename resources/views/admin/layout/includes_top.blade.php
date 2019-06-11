<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Ecklezia Church Management System</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="About Church">
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

    <!-- Base -->
    <link rel="stylesheet" href="{{ asset('church/vendors/css/base/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/toastr/build/toastr.min.css') }}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('church/vendors/css/base/elisyam-1.5.min.css') }}">
<link rel="stylesheet" href="{{asset('church/css/bootstrap-select/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('church/css/datatables/datatables.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
    <link rel="stylesheet" href="{{ asset('church/css/custom_style.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('plugin/select2/select2.css') }}"> -->

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('church/icons/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('church/icons/lineawesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('church/icons/themify/css/themify-icons.min.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('church/css/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('church/css/owl-carousel/owl.theme.min.css') }}">
        <link rel="stylesheet" href="{{asset('church/css/photoswipe/photoswipe.min.css')}}">
        <link rel="stylesheet" href="{{asset('church/css/photoswipe/default-skin/default-skin.min.css')}}">
    @stack('css-head')

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>