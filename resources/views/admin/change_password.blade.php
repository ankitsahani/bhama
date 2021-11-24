@extends('admin.layouts.master_after_login')
@section('content')
<div class="content-wrapper">
					<div class="profile-header px-3 pb-3">
						<div class="header-bg" style="background-image: url(assets/images/profile-header.jpg)"></div>
						<div class="profile-pic mt-5 mx-auto">
							<div class="tumbnail">
								<img src="assets/images/faces/face1.jpg" alt="avatar">
							</div>
						</div>
					</div>
					<div class="col-sm-7 mx-auto px-4">
						<h4 class="text-center mb-3">Change Your Password</h4>
						<form class="card forms-sample" method="post" action="{{route('change-password')}}" id="change_password" novalidate="novalidate">
						@csrf
							<div class="card-body">
							<div class="form-group col-sm-12 mt-3 mb-4 password-field" >
								<input type="password" class="form-control unlock-icon" name="current_password" id="current_pwd" placeholder="Current Password" required="">
								<i  class="showPassword text-black mr-3"></i>
							</div>
							<div class="form-group col-sm-12 mt-3 mb-4 password-field">
								<input type="password" class="form-control" name="password" id="password" placeholder="New Password" required="">
								<i  class="showPassword text-black mr-3"></i>							
							</div>
							<div class="form-group col-sm-12 mt-3 mb-4 password-field">
								<input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" >
								<i  class="showPassword text-black mr-3"></i>
							</div>
							<div class="mt-3 d-flex justify-content-center">
								<button type="submit" class="btn btn-primary mr-2 col-4">Submit</button>
								<a href="{{route('dashboard')}}" class="btn btn-default col-4">Cancel</a>
							</div>
						</div>
					</form>
					</div>
				</div>
@endsection

