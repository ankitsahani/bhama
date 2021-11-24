@php
	$adminName = getAdminName();
@endphp

<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
	<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
		<a class="navbar-brand brand-logo" href="{{route('dashboard')}}"><img src="https://pikachutechs.com/Bhama/images/skins/fashion/logo2x.webp" alt="logo" /></a>
		<a class="navbar-brand brand-logo-mini" href="{{route('dashboard')}}">
			<img src="{{asset('assets/images/logo-mini.png')}}" alt="logo" />
		</a>
	</div>
	<div class="navbar-menu-wrapper d-flex align-items-center">
		<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
			<span class="mdi mdi-menu"></span>
		</button>
		<ul class="navbar-nav navbar-nav-right">
		
			<li class="nav-item nav-profile dropdown">
				<a href="" class="nav-link" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<div class="nav-profile-img">
						<img src="{{asset('assets/images/'.$adminName->profile_image)}}" alt="image">
					</div>
					<div class="nav-profile-text">
						<p class="mb-1 text-white">{{$adminName->name}}</p>
					</div>
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="{{route('profile')}}"><i class="mdi mdi-key-variant mr-2"></i> My Profile</a>
					<a class="dropdown-item" href="{{route('change-password')}}"><i class="mdi mdi-key-variant mr-2"></i> Change Password</a>
					<a class="dropdown-item" href="{{route('logout')}}" data-toggle="modal" data-target="#logout"><i class="mdi mdi-logout mr-2"></i> Logout</a>
				</div>
			</li>
		</ul>
		<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
			<span class="mdi mdi-menu"></span>
		</button>
	</div>
</nav>