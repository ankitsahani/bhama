@extends('admin.layouts.master_after_login')
@section('content')
<div class="content-wrapper">
					<div class="profile-header px-3 mb-4 pb-3">
						<div class="header-bg" style="background-image: url({{asset('assets/images/profile-header.jpg')}})"></div>
						<div class="profile-pic mt-5">
							<div class="tumbnail">
								<img src="{{asset('assets/images/'.$admin->profile_image)}}" alt="avatar">
							</div>
						</div>
						<div class="right">
							<a href="{{route('edit-profile',['id'=>$admin['id']])}}" class="btn btn-white rounded-sm px-5">Edit</a>
						</div>
					</div>
					<div class="row px-3 profile-card mb-5 mt-3">
						<div class="col-sm-6 col-lg-6 mb-3">
							<div class="card xs-shadow border-radius-xs">
								<div class="card-body px-4 py-4">
									<h6 class="text-black">Admin Name</h6>
									<h4 class="text-black mb-0">{{$admin->name}}</h4>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-6 mb-3">
							<div class="card xs-shadow border-radius-xs">
								<div class="card-body px-4 py-4">
									<h6 class="text-black">Email</h6>
									<h4 class="text-black mb-0">{{$admin->email}}</h4>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-6 mb-3">
							<div class="card xs-shadow border-radius-xs">
								<div class="card-body px-4 py-4">
									<h6 class="text-black">Phone</h6>
									<h4 class="text-black mb-0">{{$admin->mobile}}</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
@endsection

