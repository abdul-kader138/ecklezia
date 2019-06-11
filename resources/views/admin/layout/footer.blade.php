<!-- Begin Page Footer-->
<footer class="main-footer {{ Request::path() ==  'admin/calendar/add' ? 'fixed-footer' : ''  }} {{ Request::path() ==  'admin/ministers' ? 'fixed-footer' : ''  }} {{ Request::path() ==  'admin/sermons' ? 'fixed-footer' : ''  }} {{ Request::path() ==  'admin/sermons/view' ? 'fixed-footer' : ''  }}">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
            <p class="text-gradient-02">
                All Rights Reserved &copy; {{date('Y')}}
            </p>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-center">
            <p class="text-gradient-02 d-inline-flex">
                Developed By:<a href="#" class="nav-link">Ablazed software</a>
            </p>
        </div>
    </div>
</footer>

<!-- End Page Footer -->
<a href="#" class="go-top"><i class="la la-arrow-up"></i></a>