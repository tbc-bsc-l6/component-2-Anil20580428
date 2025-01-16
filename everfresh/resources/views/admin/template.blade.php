<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Dashboard Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/feathericon.min.css') }}">
    <link rel="stylesheet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	 <!-- Favicon -->
	 <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">


<body>
	<div class="main-wrapper">
		<div class="header">
			<div class="header-left">
				<a href="{{route('admin.dashboard')}}" class="logo"> <span class="logoclass">EVERFRESH</span> </a>
				{{-- <a href="index.html" class="logo logo-small">  </a> --}}
			</div>
			<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
			<ul class="nav user-menu">
				<li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span> </a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header"> <span class="notification-title">Notifications</span> <a href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
							
							</ul>
						</div>
						<div class="topnav-dropdown-footer"> <a href="#">View all Notifications</a> </div>
					</div>
				</li>
				<li class="nav-item dropdown has-arrow">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-circle" src="{{asset('assets/img/profiles/avatar-01.jpg')}}" width="31" alt="Soeng Souy"></span> </a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm"> <img src="{{asset('assets/img/profiles/avatar-01.jpg')}}" alt="User Image" class="avatar-img rounded-circle"> </div>
							<div class="user-text">
								<h6>{{Auth::user()->name}}</h6>
								<p class="text-muted mb-0">Administrator</p>
							</div>
						</div> 
						<a class="dropdown-item" href="#">My Profile</a> 
						
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
					 </div>
				</li>
			</ul>
			
		</div>

		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
                        
						<li class="active"> <a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
						<li class="list-divider"></li>
						<li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Home Page </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{route('admin.homepage')}}">Slider </a></li>
								<li><a href="{{route('home.about')}}"> About </a></li>
                                <li><a href="{{route('admin.our.project')}}"> Our Project </a></li>
								<li><a href="{{route('admin.our.banner')}}"> Reviews </a></li>
                                <li><a href="{{route('admin.meet.team')}}"> Our Team </a></li>
								<li><a href="{{route('our.best.plans')}}"> Pricing </a></li>
                                <li><a href="{{route('admin.faq')}}"> FAQ </a></li>
								
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="bi bi-bricks"></i> <span> Footer </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{route('footer.banner.long')}}">  Long Description </a></li>
								<li><a href="{{route('footer.short.desc')}}"> Short Description </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{route('admin.user.contact')}}"> Contact </a></li>
								<li><a href="{{route('admin.service.service')}}"> Service Booking</a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="bi bi-person-raised-hand"></i> <span>  Services </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none">
								<li> <a href="{{route('admin.awesome.service')}}"> <span></span>Awesome Services</a> </li>
								<li> <a href="{{route('admin.service.whychoose')}}"><span></span>Why Choose Us</a> </li>


							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="bi bi-substack"></i> <span>  Blog </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none">
								<li> <a href="{{route('blog.add')}}"> <span></span>Blog Add</a> </li>
								<li> <a href="{{route('blog.author')}}"><span></span>By Author</a> </li>
								<li><a href="{{route('blog.latest.post')}}"><span></span>latest Post</a></li>
								<li><a href="{{route('blog.categories')}}"><span></span>categories</a></li>
								<li><a href="{{route('text.widget')}}"><span></span>widget</a></li>


							</ul>
						</li>

			
						<li> <a href="{{route('social.media.index')}}"><i class="bi bi-film"></i> <span>Social Media</span></a> </li>
						
						<li> <a href="{{route('call.to.action')}}"><i class="bi bi-info-square-fill"></i> <span>Call To Action</span></a> </li>
						<li> <a href="{{route('clint')}}"><i class="bi bi-boombox-fill"></i> <span>Clients</span></a> </li>
						{{-- <li> <a href="{{route('call.to.action')}}"><i class="bi bi-info-square-fill"></i> <span>About</span></a> </li> --}}

						<li> <a href="{{route('company.description')}}"><i class="bi bi-gear-fill"></i> <span>Company Description</span></a> </li>

					</ul>
				</div>
			</div>
		</div>
		<div class="page-wrapper">
			<div class="content container-fluid">
				
				
				
				<div class="mt-3">
					@if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
				</div>
                @yield('content')

			</div>
		</div>
	</div>
	<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('assets/js/chart.morris.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
{{-- <script src="https://cdn.ckbox.io/ckbox/2.6.1/ckbox.js"></script> --}}

<!-- Bootstrap JS and Icons -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>

  <!-- CKEditor Script -->
  <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
  <script>
	  // Initialize CKEditor for the textarea
	  CKEDITOR.replace('ckbox');
  </script>

</body>

</html>