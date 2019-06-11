@extends('admin.layout.admin')

@section('content')
<style type="text/css">
    .flex-row>[class*='col-']>.widget {
        height: auto !important; ;
    }
</style>
<div class="container-fluid">

    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Ministry Note Info</h2>
                <div>
                    <ul class="breadcrumb">
                       <li>
                        <button data-toggle="modal" data-target="#modal-centered2" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Member</button>
                    </li>
                    <li>
                        <button data-toggle="modal" data-target="#modal-centered" class="btn btn-info btn-square mr-1 mb-2">Add Note</button>
                    </li>
                    <li>
                        <a href="{{ url('/admin/event/add') }}" class="btn btn-info btn-square mr-1 mb-2">Add Event</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Begin Centered Modal -->
<div id="modal-centered" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Note</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="publisher publisher-multi bg-white">
                 <textarea class="form-control" rows="4" placeholder="Write Down the Note.."></textarea>
             </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save</button>
        </div>
    </div>
</div>
</div>
<!-- End Centered Modal -->

<!-- Begin Centered Modal -->
<div id="modal-centered2" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Member</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate>

                    <div class="form-group row d-flex align-items-center">
                        <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" placeholder="Enter Name">
                        </div>
                    </div>

                    <div class="form-group row d-flex align-items-center">
                        <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Image</label>
                        <div class="col-lg-10">
                          <div class="cover-image mx-auto">
                            <img width="50" height="50" src="{{asset('church/img/group/01.jpg')}}" alt="..." class="rounded-circle mx-auto">
                        </div>
                    </div>
                </div>
                <div class="form-group row d-flex align-items-center">
                    <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Email</label>
                    <div class="col-lg-10">
                      <input type="email" class="form-control" placeholder="Enter Email">
                  </div>
              </div>
              <div class="form-group row d-flex align-items-center">
                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Phone</label>
                <div class="col-lg-10">
                  <input type="number" class="form-control" placeholder="Enter Phone Number">
              </div>
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
    </div>
</div>
</div>
</div>
<!-- End Centered Modal -->


<!-- End Page Header -->

<!-- Start Profile Row -->
<div class="row flex-row">

    <div class="col-xl-3">
        <!-- Begin Widget -->
        <div class="widget has-shadow">
            <div class="widget-body">
                <div class="mt-5">
                    <img src="{{ asset('church/img/avatar/avatar-01.jpg') }}" alt="..." style="width: 120px;" class="avatar rounded-circle d-block mx-auto">
                </div>
                <h4 class="text-center mt-3 mb-1">Youth Ministry</h4>
                <div class="category text-center">UI Design</div>
                <div class="em-separator separator-dashed"></div>
                <ul class="nav flex-column">
                    <li class="nav-item">


                        <a href="javascript:void(0)">Ablazzed Youth Leader</a>
                        <p>Mazharul Islam</p>

                    </li>
                    <li class="nav-item">


                        <a href="javascript:void(0)">Assistant Leader</a>
                        <p>Mazharul Islam</p>

                    </li>

                    <li class="nav-item">

                            <a href="javascript:void(0)">Metting Time</a>
                        <p>
                            Everyday Sunday at 7:00
                        </p>
                    </li>


                </ul>

            </div>
        </div>
        <!-- End Widget -->

                <!-- Begin Widget -->
        <div class="widget has-shadow">
            <div class="widget-body">

                <div class="category text-center">Event Days</div>
                <div class="em-separator separator-dashed"></div>
                <ul class="nav flex-column">
                    <li class="nav-item">


                        <a href="javascript:void(0)">Annivarsary Date</a>
                        <p>22/01/2019</p>

                    </li>
                    <li class="nav-item">


                        <a href="javascript:void(0)">Youth Trip</a>
                        <p>22/01/2019</p>

                    </li>
                </ul>

            </div>
        </div>
        <!-- End Widget -->
    </div>

    <div class="col-xl-9">
        <div class="widget has-shadow">
            <!-- Begin Widget Header -->
            <div class="widget-header d-flex align-items-center">
                <div class="user-image">
                    <img width="50" class="avatar rounded-circle d-block mx-auto note-photo" src="{{asset('church/img/avatar/avatar-09.jpg')}}" alt="...">
                </div>
                <div class="d-flex flex-column mr-auto">
                    <div class="title">
                        <span class="username">Michael Bradley</span>
                    </div>
                    <div class="time">1 hour ago</div>
                </div>
                <div class="widget-options">
                    <div class="dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                            <i class="la la-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu">

                            <a href="javascript:void(0);" class="dropdown-item"> 
                                <i class="la la-trash"></i>Delete Post
                            </a>

                  
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Widget Header -->
            <!-- Begin Widget Body -->
            <div class="widget-body">
                <p>
                    Aenean dignissim sit amet lectus vitae tempus. Morbi suscipit, tortor at mollis bibendum, mauris risus luctus orci, ut efficitur nisl dolor et orci. Morbi quis justo eu urna efficitur pellentesque vel quis neque. Duis non velit ut tellus luctus pellentesque sed ut est. Etiam convallis sollicitudin tincidunt. Ut iaculis lacus vel dolor faucibus, vitae commodo massa posuere. Fusce tempus iaculis mollis. Vivamus sodales placerat dui, a varius ipsum. Aenean pulvinar felis sit amet turpis gravida dapibus. Sed congue lorem vitae nunc commodo bibendum. Vestibulum quis egestas nunc. 
                </p>
            </div>
            <!-- End Widget Body -->


        </div>


                <div class="widget has-shadow">
            <!-- Begin Widget Header -->
            <div class="widget-header d-flex align-items-center">
                <div class="user-image">
                    <img width="50" class="avatar rounded-circle d-block mx-auto note-photo" src="{{asset('church/img/avatar/avatar-09.jpg')}}" alt="...">
                </div>
                <div class="d-flex flex-column mr-auto">
                    <div class="title">
                        <span class="username">Michael Bradley</span>
                    </div>
                    <div class="time">June 15th ,2019</div>
                </div>
                <div class="widget-options">
                    <div class="dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                            <i class="la la-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu">

                            <a href="javascript:void(0);" class="dropdown-item"> 
                                <i class="la la-trash"></i>Delete Post
                            </a>

                  
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Widget Header -->
            <!-- Begin Widget Body -->
            <div class="widget-body">
                <p>
                    Aenean dignissim sit amet lectus vitae tempus. Morbi suscipit, tortor at mollis bibendum, mauris risus luctus orci, ut efficitur nisl dolor et orci. Morbi quis justo eu urna efficitur pellentesque vel quis neque. Duis non velit ut tellus luctus pellentesque sed ut est. Etiam convallis sollicitudin tincidunt. Ut iaculis lacus vel dolor faucibus, vitae commodo massa posuere. Fusce tempus iaculis mollis. Vivamus sodales placerat dui, a varius ipsum. Aenean pulvinar felis sit amet turpis gravida dapibus. Sed congue lorem vitae nunc commodo bibendum. Vestibulum quis egestas nunc. 
                </p>
            </div>
            <!-- End Widget Body -->


        </div>

                <div class="widget has-shadow">
            <!-- Begin Widget Header -->
            <div class="widget-header d-flex align-items-center">
                <div class="user-image">
                    <img width="50" class="avatar rounded-circle d-block mx-auto note-photo" src="{{asset('church/img/avatar/avatar-09.jpg')}}" alt="...">
                </div>
                <div class="d-flex flex-column mr-auto">
                    <div class="title">
                        <span class="username">Michael Bradley</span>
                    </div>
                    <div class="time">1 hour ago</div>
                </div>
                <div class="widget-options">
                    <div class="dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                            <i class="la la-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu">

                            <a href="javascript:void(0);" class="dropdown-item"> 
                                <i class="la la-trash"></i>Delete Post
                            </a>

                  
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Widget Header -->
            <!-- Begin Widget Body -->
            <div class="widget-body">
                <p>
                    Aenean dignissim sit amet lectus vitae tempus. Morbi suscipit, tortor at mollis bibendum, mauris risus luctus orci, ut efficitur nisl dolor et orci. Morbi quis justo eu urna efficitur pellentesque vel quis neque. Duis non velit ut tellus luctus pellentesque sed ut est. Etiam convallis sollicitudin tincidunt. Ut iaculis lacus vel dolor faucibus, vitae commodo massa posuere. Fusce tempus iaculis mollis. Vivamus sodales placerat dui, a varius ipsum. Aenean pulvinar felis sit amet turpis gravida dapibus. Sed congue lorem vitae nunc commodo bibendum. Vestibulum quis egestas nunc. 
                </p>
            </div>
            <!-- End Widget Body -->


        </div>
    </div>
</div>
<!-- End Profile Row -->
</div>
<!-- End Container -->
@endsection

@push('alljs')
<script src="{{ asset('church/vendors/js/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/datatables/vfs_fonts.js') }}"></script>

<script>
    (function ($) {

        'use strict';

        $(function () {
            $('#sorting-table').DataTable({
                "lengthMenu": [
                [10, 15, 20, -1],
                [10, 15, 20, "All"]
                ],
                "order": [
                [3, "desc"]
                ]
            });
        });

    })(jQuery);
</script>
@endpush