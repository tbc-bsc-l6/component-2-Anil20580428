

<section class="headerTop">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="headertopIn">
                    <div class="row">
                        <div class="col-lg-4 col-sm-3">
                            <div class="logo">
                                <a href="{{url('/')}}"><img src="{{asset('storage/'.$homeTop->logo)}}" alt></a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-9">
                            <div class="rightheadtop">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="topinfo boright">
                                            <i class="icon-Phone2"></i>
                                            <h5>get in touch</h5>
                                            <h6>+977 {{$homeTop->number}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="topinfo boright">
                                            <i class="icon-Pointer"></i>
                                            <h5>OUR OFFICE</h5>
                                            <h6>{{$homeTop->location}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-right topbtnpos">
                                        <a href="#" class="cleanBtn_style1">Get free Estimate <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<header class="header1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2 logoHidden">
                <div class="logohi">
                    <a href="{{url('/')}}"><img src="images/LOGO1.png" alt></a>
                </div>
            </div>

            <div class="col-md-9 text-center">
                <nav class="mainNav">
                    <div class="mobileMenu hidden-lg hidden-md">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <ul>
                        <li class="has-menu-items"><a href="{{url('/')}}">home</a>
                            {{-- <ul class="sub-menu">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index2.html">Home Two</a></li>
                                <li><a href="index3.html">Home Three</a></li>
                            </ul> --}}
                        </li>
                        <li class="has-menu-items"><a href="{{route('everfresh.home.about')}}">About Us</a>
                            {{-- <ul class="sub-menu">
                                <li><a href="about.html">About One</a></li>
                                <li><a href="about_2.html">About Two</a></li>
                            </ul> --}}
                        </li>
                        <li class="has-menu-items"><a href="{{route('everfresh.home.service')}}">services</a>
                            {{-- <ul class="sub-menu">
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="services.html">services One</a></li>
                                <li><a href="services_2.html">services Two</a></li>
                                <li><a href="services_single.html">services Single</a></li>
                            </ul> --}}
                        </li>
                        <li class="has-menu-items"><a href="{{route('everfresh.home.gallery')}}">Gallery</a>
                            {{-- <ul class="sub-menu">
                                <li class="has-menu-items"><a href="#">gallery Regular</a>
                                    <ul class="sub-menu">
                                        <li><a href="gallery_2c.html">Two Column</a></li>
                                        <li><a href="gallery_3c.html">Three Column</a></li>
                                        <li><a href="gallery_4c.html">Four Column</a></li>
                                    </ul>
                                </li>
                                <li class="has-menu-items"><a href="#">gallery Grid</a>
                                    <ul class="sub-menu">
                                        <li><a href="gallery_grid_2c.html">Two Column</a></li>
                                        <li><a href="gallery_grid_3c.html">Three Column</a></li>
                                    </ul>
                                </li>
                                <li class="has-menu-items"><a href="#">gallery Post</a>
                                    <ul class="sub-menu">
                                        <li><a href="gallery_single.html">Gallery Single</a></li>
                                        <li><a href="gallery_video.html">Gallery Video</a></li>
                                    </ul>
                                </li>
                            </ul> --}}
                        </li>
                        <li class="has-menu-items"><a href="{{route('everfresh.home.blog')}}">Blog</a>
                            {{-- <ul class="sub-menu">
                                <li><a href="blog_rightsidebar.html">blog rightsidebar</a></li>
                                <li><a href="blog_leftsidebar.html">blog leftsidebar</a></li>
                                <li><a href="blog_grid_right.html">blog grid right</a></li>
                                <li><a href="blog_grid_left.html">blog grid left</a></li>
                                <li><a href="blog_details.html">blog details</a></li>
                            </ul> --}}
                        </li>

                        <li><a href="{{route('everfresh.home.contact')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>