@extends('admin.layout.admin')

@section('content')

<div class="container-fluid p-0">
    <div class="row no-margin">
        <div class="col-xl-12">
            <!-- Begin Widget -->
            <div class="row widget mb-0">
                <!-- Begin Messages List -->
                <div class="col-xl-4 col-md-4 no-padding" id="sidebar">
                    <div class="sidebar-content w-100 h-100">
                        <!-- Begin List Group -->
                        <div id="list-group">
                            <ul class="messages-list list-group w-100 list-scroll auto-scroll" tabindex="3" style="height: 299px; overflow: hidden; outline: none;">
                                <li class="list-group-item">
                                    <a data-toggle="tab" href="#mail-1">
                                        <div class="media">
                                            <div class="media-left align-self-center">
                                                <img src="{{asset('church/img/avatar/avatar-02.jpg')}}" class="user-img rounded-circle" alt="...">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="username">
                                                    <h4>Brandon Smith<i class="la la-paperclip"></i></h4>
                                                </div>
                                                <div class="msg">
                                                    <h5>Suspendisse libero sapien ultrices</h5>
                                                    <p>
                                                        Suspendisse libero sapien, ultrices nec nibh sit amet, egestas accumsan nisl ...
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <span class="date-send">14:21</span>
                                                <span class="badge-rounded info mx-auto"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a data-toggle="tab" href="#mail-2">
                                        <div class="media">
                                            <div class="media-left align-self-center">
                                                <img src="{{asset('church/img/avatar/avatar-04.jpg')}}" class="user-img rounded-circle" alt="...">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="username">
                                                    <h4>Nathan Hunter<i class="la la-paperclip"></i></h4>
                                                </div>
                                                <div class="msg">
                                                    <h5>Lorem ipsum dolor sit amet</h5>
                                                    <p>
                                                        Suspendisse libero sapien, ultrices nec nibh sit amet, egestas accumsan nisl ...
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <span class="date-send">19 Feb</span>
                                                <span class="badge-rounded mx-auto"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a data-toggle="tab" href="#mail-3">
                                        <div class="media">
                                            <div class="media-left align-self-center">
                                                <img src="{{asset('church/img/avatar/avatar-07.jpg')}}" class="user-img rounded-circle" alt="...">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="username">
                                                    <h4>Lisa Garett</h4>
                                                </div>
                                                <div class="msg">
                                                    <h5>Nulla sollicitudin tempo</h5>
                                                    <p>
                                                        Suspendisse libero sapien, ultrices nec nibh sit amet, egestas accumsan nisl ...
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <span class="date-send">19 Feb</span>
                                                <span class="badge-rounded mx-auto"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- End List Group -->
                    </div>
                </div>
                <!-- End Messages List -->
                <!-- Begin Messages -->
                <div class="col-xl-8 col-md-8 bg-mail d-flex no-padding">
                    <!-- Begin Card -->
                    <div class="card w-100 has-shadow">
                        <!-- Begin Tab -->
                        <div class="tab-content">
                            <!-- Begin Tab 1 (Show) -->
                            <div class="tab-pane fade show active mail-scroll auto-scroll" id="mail-1" tabindex="4" style="height: 299px; overflow: hidden; outline: none;">
                                <!-- Begin Card Header -->
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-xl-10 col-sm-12 no-padding">
                                            <div class="message-avatar">
                                                <a href="pages-profile.html">
                                                    <img src="{{asset('church/img/avatar/avatar-02.jpg')}}" class="rounded-circle" style="width: 50px;" alt="...">
                                                </a>
                                            </div>
                                            <div class="message-infos">
                                                <div class="user-title">Brandon Smith</div>
                                                <div class="show-details">
                                                    <a data-toggle="collapse" href="#details-01" aria-expanded="false" aria-controls="details-01">Details</a>
                                                    <div class="collapse" id="details-01">
                                                        <ul>
                                                            <li>From: bsmith@example.com</li>
                                                            <li>To: dgreen@example.com</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-sm-12 no-padding d-flex justify-content-end">
                                            <ul class="list-inline pt-3">
                                                <li class="list-inline-item mr-3">
                                                    <a href="javascript:void(0)"> 
                                                        <i class="la la-mail-forward la-2x"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item mr-3">
                                                    <a href="javascript:void(0)"> 
                                                        <i class="la la-print la-2x"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item mr-3">
                                                    <a href="javascript:void(0)"> 
                                                        <i class="la la-trash la-2x"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card Header -->
                                <!-- Begin Card Body -->
                                <div class="card-body d-flex flex-column">
                                    <div class="mail-title">
                                        <h2>Suspendisse libero sapien ultrices</h2>
                                    </div>
                                    <p>
                                        Hello,<br><br>Pellentesque a dignissim ante. In a vulputate purus, vel ultrices lorem. Quisque in cursus tellus. Mauris malesuada commodo pellentesque. Etiam commodo quam purus, ut faucibus tortor consequat tincidunt. Sed facilisis dui libero, ac maximus urna efficitur sit amet. Nunc pretium tempor ornare. Donec mollis, urna ac gravida efficitur, eros tellus tincidunt tortor, et molestie ante neque in eros. Mauris vel leo iaculis, hendrerit tortor ut, vulputate dui. Donec maximus, turpis ut venenatis facilisis, felis purus vestibulum ipsum, vitae vehicula nisi ante nec orci. Integer convallis pellentesque dui, in bibendum nisl lobortis in. Pellentesque in pretium ex, nec rhoncus sapien. 
                                    </p>
                                    <p>
                                        Quisque posuere lacinia ex ullamcorper fringilla. Maecenas id pretium ipsum, vel interdum enim. Vivamus tristique pellentesque vehicula. Quisque gravida semper sagittis. Morbi massa tortor, rutrum eget tellus at, gravida sollicitudin quam. In aliquam orci ut erat vulputate, ut mollis est pretium. In sed ex et diam malesuada condimentum. Phasellus quis nibh tempus augue suscipit tristique vitae eget elit. Aliquam lacinia risus non elit luctus mattis. Donec vitae leo lacus. Proin porta augue scelerisque iaculis pulvinar. Aliquam erat volutpat. Maecenas euismod libero nulla. 
                                    </p>
                                    <p>
                                        Vestibulum laoreet congue elit. Sed sollicitudin elit malesuada posuere facilisis. In non malesuada mauris. Praesent tortor felis, mattis vitae urna ut, mollis efficitur diam. Nunc lobortis lacus vel ullamcorper pretium. Donec et mauris purus. Etiam porttitor id odio sed lacinia. In eu ante in massa imperdiet ullamcorper vel sollicitudin eros. Sed tempus pharetra lacinia. Vestibulum rutrum mi ut dignissim tempus. Phasellus viverra porta nibh nec vulputate. Donec eu est sit amet arcu viverra accumsan. Sed ut diam nec libero porttitor pulvinar. 
                                    </p>
                                    <p>
                                        Donec mollis, urna ac gravida efficitur, eros tellus tincidunt tortor, et molestie ante neque in eros.Mauris vel leo iaculis, hendrerit tortor ut, vulputate dui. Donec maximus, turpis ut venenatis facilisis, felis purus vestibulum ipsum, vitae vehicula nisi ante nec orci. Integer convallis pellentesque dui, in bibendum nisl lobortis in. Pellentesque in pretium ex, nec rhoncus sapien. 
                                    </p>
                                    <div class="attachments">
                                        <div class="title">
                                            <i class="la la-paperclip"></i>Attachments (3)
                                        </div>
                                        <div class="photoswipe" itemscope="" itemtype="http://schema.org/ImageGallery">
                                            <figure class="d-inline-block mr-1" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
                                                <a href="{{asset('church/img/background/03.jpg')}}" itemprop="contentUrl" data-size="1920x1080"> 
                                                    <img src="{{asset('church/img/background/03.jpg')}}" style="width: 140px;" itemprop="thumbnail" alt="...">
                                                </a>
                                            </figure>
                                            <figure class="d-inline-block mr-1" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
                                                <a href="{{asset('church/img/background/04.jpg')}}" itemprop="contentUrl" data-size="1920x1080"> 
                                                    <img src="{{asset('church/img/background/04.jpg')}}" style="width: 140px;" itemprop="thumbnail" alt="...">
                                                </a>
                                            </figure>
                                            <figure class="d-inline-block mr-1" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
                                                <a href="{{asset('church/img/background/05.jpg')}}" itemprop="contentUrl" data-size="1920x1080"> 
                                                    <img src="{{asset('church/img/background/05.jpg')}}" style="width: 140px;" itemprop="thumbnail" alt="...">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card Body -->
                                <!-- Begin Publisher -->
                                <div class="publisher publisher-multi bg-white">
                                    <textarea class="publisher-input" rows="4" placeholder="Your message"></textarea>
                                    <div class="publisher-bottom d-flex justify-content-end">
                                        <a class="publisher-btn" href="#"><i class="la la-smile-o"></i></a>
                                        <a class="publisher-btn" href="#"><i class="la la-paperclip"></i></a>
                                        <button class="btn btn-gradient-01">Reply</button>
                                    </div>
                                </div>
                                <!-- End Publisher -->
                            </div>
                            <!-- End Tab 1 -->
                            <!-- Begin Tab 2 -->
                            <div class="tab-pane fade mail-scroll auto-scroll" id="mail-2" tabindex="5" style="height: 299px; overflow: hidden; outline: none;">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-xl-10 no-padding">
                                            <div class="message-avatar">
                                                <a href="pages-profile.html">
                                                    <img src="{{asset('church/img/avatar/avatar-04.jpg')}}" class="rounded-circle" style="width: 50px;" alt="...">
                                                </a>
                                            </div>
                                            <div class="message-infos">
                                                <div class="user-title">Nathan Hunter</div>
                                                <div class="show-details">
                                                    <a data-toggle="collapse" href="#details-02" aria-expanded="false" aria-controls="details-02">Details</a>
                                                    <div class="collapse" id="details-02">
                                                        <ul>
                                                            <li>From: nhunter@example.com</li>
                                                            <li>To: dgreen@example.com</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-sm-12 no-padding d-flex justify-content-end">
                                            <ul class="list-inline pt-3">
                                                <li class="list-inline-item mr-3">
                                                    <a href="javascript:void(0)"> 
                                                        <i class="la la-mail-forward la-2x"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item mr-3">
                                                    <a href="javascript:void(0)"> 
                                                        <i class="la la-print la-2x"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item mr-3">
                                                    <a href="javascript:void(0)"> 
                                                        <i class="la la-trash la-2x"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="mail-title">
                                        <h3>Lorem ipsum dolor sit amet</h3>
                                    </div>
                                    <p>
                                        Hello,<br><br>Pellentesque a dignissim ante. In a vulputate purus, vel ultrices lorem. Quisque in cursus tellus. Mauris malesuada commodo pellentesque. Etiam commodo quam purus, ut faucibus tortor consequat tincidunt. Sed facilisis dui libero, ac maximus urna efficitur sit amet. Nunc pretium tempor ornare. Donec mollis, urna ac gravida efficitur, eros tellus tincidunt tortor, et molestie ante neque in eros. Mauris vel leo iaculis, hendrerit tortor ut, vulputate dui. Donec maximus, turpis ut venenatis facilisis, felis purus vestibulum ipsum, vitae vehicula nisi ante nec orci. Integer convallis pellentesque dui, in bibendum nisl lobortis in. Pellentesque in pretium ex, nec rhoncus sapien. 
                                    </p>
                                    <p>
                                        Quisque posuere lacinia ex ullamcorper fringilla. Maecenas id pretium ipsum, vel interdum enim. Vivamus tristique pellentesque vehicula. Quisque gravida semper sagittis. Morbi massa tortor, rutrum eget tellus at, gravida sollicitudin quam. In aliquam orci ut erat vulputate, ut mollis est pretium. In sed ex et diam malesuada condimentum. Phasellus quis nibh tempus augue suscipit tristique vitae eget elit. Aliquam lacinia risus non elit luctus mattis. Donec vitae leo lacus. Proin porta augue scelerisque iaculis pulvinar. Aliquam erat volutpat. Maecenas euismod libero nulla. 
                                    </p>
                                    <div class="attachments">
                                        <div class="title"><i class="la la-paperclip"></i><span>Attachments (2)</span></div>
                                        <div class="file-attachment">
                                            <div class="item"><i class="la la-file-pdf-o"></i>Elisyam.pdf</div>
                                            <div class="item pb-0"><i class="la la-file-movie-o"></i>Video.mp4</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Begin Publisher -->
                                <div class="publisher publisher-multi bg-white">
                                    <textarea class="publisher-input" rows="4" placeholder="Your message"></textarea>
                                    <div class="publisher-bottom d-flex justify-content-end">
                                        <a class="publisher-btn" href="#"><i class="la la-smile-o"></i></a>
                                        <a class="publisher-btn" href="#"><i class="la la-paperclip"></i></a>
                                        <button class="btn btn-gradient-01">Reply</button>
                                    </div>
                                </div>
                                <!-- End Publisher -->
                            </div>
                            <!-- End Tab 2 -->
                            <!-- Begin Tab 3 -->
                            <div class="tab-pane fade mail-scroll auto-scroll" id="mail-3" tabindex="6" style="height: 299px; overflow: hidden; outline: none;">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-xl-10 no-padding">
                                            <div class="message-avatar">
                                                <a href="pages-profile.html">
                                                    <img src="{{asset('church/img/avatar/avatar-07.jpg')}}" class="rounded-circle" style="width: 50px;" alt="...">
                                                </a>
                                            </div>
                                            <div class="message-infos">
                                                <div class="user-title">Lisa Garett</div>
                                                <div class="show-details">
                                                    <a data-toggle="collapse" href="#details-03" aria-expanded="false" aria-controls="details-03">Details</a>
                                                    <div class="collapse" id="details-03">
                                                        <ul>
                                                            <li>From: lgarett@example.com</li>
                                                            <li>To: dgreen@example.com</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-sm-12 no-padding d-flex justify-content-end">
                                            <ul class="list-inline pt-3">
                                                <li class="list-inline-item mr-3">
                                                    <a href="javascript:void(0)"> 
                                                        <i class="la la-mail-forward la-2x"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item mr-3">
                                                    <a href="javascript:void(0)"> 
                                                        <i class="la la-print la-2x"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item mr-3">
                                                    <a href="javascript:void(0)"> 
                                                        <i class="la la-trash la-2x"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="mail-title">
                                        <h3>Nulla sollicitudin tempo</h3>
                                    </div>
                                    <p>
                                        Hello,<br><br>Pellentesque a dignissim ante. In a vulputate purus, vel ultrices lorem. Quisque in cursus tellus. Mauris malesuada commodo pellentesque. Etiam commodo quam purus, ut faucibus tortor consequat tincidunt. Sed facilisis dui libero, ac maximus urna efficitur sit amet. Nunc pretium tempor ornare. Donec mollis, urna ac gravida efficitur, eros tellus tincidunt tortor, et molestie ante neque in eros. Mauris vel leo iaculis, hendrerit tortor ut, vulputate dui. Donec maximus, turpis ut venenatis facilisis, felis purus vestibulum ipsum, vitae vehicula nisi ante nec orci. Integer convallis pellentesque dui, in bibendum nisl lobortis in. Pellentesque in pretium ex, nec rhoncus sapien. 
                                    </p>
                                    <p>
                                        Quisque posuere lacinia ex ullamcorper fringilla. Maecenas id pretium ipsum, vel interdum enim. Vivamus tristique pellentesque vehicula. Quisque gravida semper sagittis. Morbi massa tortor, rutrum eget tellus at, gravida sollicitudin quam. In aliquam orci ut erat vulputate, ut mollis est pretium. In sed ex et diam malesuada condimentum. Phasellus quis nibh tempus augue suscipit tristique vitae eget elit. Aliquam lacinia risus non elit luctus mattis. Donec vitae leo lacus. Proin porta augue scelerisque iaculis pulvinar. Aliquam erat volutpat. Maecenas euismod libero nulla. 
                                    </p>
                                    <p>
                                        Nam sollicitudin accumsan lacus vel placerat. Donec vel aliquet lectus. Donec sagittis quam ut aliquet laoreet. Fusce vehicula hendrerit ultricies. Morbi finibus, tortor in scelerisque ultricies, lorem orci consectetur nisi, vel blandit lectus magna nec orci. Duis urna dolor, pretium eu velit quis, tempus condimentum nisl. Proin vitae gravida odio. Phasellus aliquam eros in fermentum aliquam. Morbi aliquet dolor in tristique mollis. Ut tincidunt diam vel nunc efficitur, eget vehicula urna faucibus. Sed pellentesque justo vel nisl aliquam, id porta nunc mollis. Aliquam pretium felis at enim pretium consequat. Phasellus sollicitudin auctor ipsum eget semper.
                                    </p>
                                    <p>
                                        Duis id vehicula odio. Nulla sollicitudin dolor eu lorem vulputate tempor. Morbi scelerisque maximus lacinia. Curabitur eu magna in velit pulvinar vulputate. Mauris rhoncus scelerisque risus id rhoncus. Vivamus sed consectetur risus. Quisque nec dolor sit amet nisl iaculis laoreet. Mauris euismod eros vitae libero feugiat malesuada. 
                                    </p>
                                    <div class="attachments">
                                        <div class="title"><i class="la la-paperclip"></i><span>Attachments (2)</span></div>
                                        <div class="file-attachment">
                                            <div class="item"><i class="la la-file-pdf-o"></i>Elisyam.pdf</div>
                                            <div class="item pb-0"><i class="la la-file-movie-o"></i>Video.mp4</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Begin Publisher -->
                                <div class="publisher publisher-multi bg-white">
                                    <textarea class="publisher-input" rows="4" placeholder="Your message"></textarea>
                                    <div class="publisher-bottom d-flex justify-content-end">
                                        <a class="publisher-btn" href="#"><i class="la la-smile-o"></i></a>
                                        <a class="publisher-btn" href="#"><i class="la la-paperclip"></i></a>
                                        <button class="btn btn-gradient-01">Reply</button>
                                    </div>
                                </div>
                                <!-- End Publisher -->
                            </div>
                            <!-- End Tab 3 -->
                            
                        </div>
                        <!-- End Tab -->
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Messages -->
            </div>
            <!-- End Widget -->
        </div>
        <!-- End Col -->
    </div>
    <!-- End Row -->
</div>


@endsection