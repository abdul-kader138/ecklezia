<div class="default-sidebar">
                    <!-- Begin Side Navbar -->
                    <nav class="side-navbar box-scroll sidebar-scroll" tabindex="1" style="overflow: hidden; outline: none;">
                        <span class="heading mt-3">Folders</span>
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0)"><i class="la la-pencil"></i>New Message</a></li>
                            <li><a href="javascript:void(0)"><i class="la la-inbox"></i>Inbox<span class="nb-new badge-rounded info badge-rounded-small pull-right">2</span></a>
                            </li>
                            <li><a href="javascript:void(0)"><i class="la la-send"></i>Sent</a></li>
                            <li><a href="javascript:void(0)"><i class="la la-file"></i>Drafts</a></li>
                            <li><a href="javascript:void(0)"><i class="la la-warning"></i>Spam</a></li>
                            <li><a href="javascript:void(0)"><i class="la la-trash"></i>Trash</a></li>
                        </ul>
                        <span class="heading">Labels</span>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
                                    <div class="text">
                                        <div class="link"><span class="badge-rounded mr-2"></span>Work</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="text">
                                        <div class="link"><span class="badge-rounded mr-2 info"></span>Friends</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="text">
                                        <div class="link"><span class="badge-rounded mr-2 success"></span>Social</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="text">
                                        <div class="link"><span class="badge-rounded mr-2 danger"></span>Promotions</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#modal-centered">
                                    <div class="text">
                                        <div class="link"><i class="la la-bullseye"></i>Settings</div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <span class="heading">Ecklezia</span>
                        <ul class="list-unstyled">
                            <li><a href="{{url('/admin/home')}}"><i class="la la-angle-left"></i>Go Back</a></li>
                        </ul>
                    </nav>
                    <!-- End Side Navbar -->
                <div id="ascrail2000" class="nicescroll-rails nicescroll-rails-vr" style="width: 6px; z-index: 999; cursor: default; position: absolute; top: 0px; left: 234px; height: 429px; display: block;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 6px; height: 80px; background-color: transparent; border: transparent; background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 6px; z-index: 999; top: 423px; left: 0px; position: absolute; display: none; cursor: default; width: 234px;"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 6px; width: 80px; background-color: transparent; border: transparent; background-clip: padding-box; border-radius: 5px; left: 0px;"></div></div></div>

                                                <!-- Begin Centered Modal -->
        <div id="modal-centered" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Email Settings</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" novalidate>

                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Email</label>
                                <div class="col-lg-8">
                                    <input type="email" class="form-control" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Encryption Type</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" placeholder="Enter Encryption Type">
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center">
                                <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Encryption Port</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" placeholder="Enter Encryption Port">
                                </div>
                            </div>

                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                         </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Centered Modal -->