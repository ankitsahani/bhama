@extends('admin.layouts.master_after_login')
@section('content')
<div class="content-wrapper">
	
					<div class="profile-header px-3 mb-4 pb-3">
						<div class="header-bg" style="background-image: url({{asset('assets/images/profile-header.jpg')}})"></div>
						<form action="{{route('edit-profile',['id'=>$admin['id']])}}" method="post" class="row px-3 profile-card mb-5 mt-3" name="profile" id="Profile"  enctype="multipart/form-data">
						@csrf
						<div class="profile-pic mt-5">
							
							<div class="tumbnail">
								<img src="{{asset('assets/images/'.$admin->profile_image)}}" alt="avatar" id="blah">
							
							<div class="upload-avatar">
									<img src="{{asset('assets/images/icons/edit.svg')}}">
									<input type="file" name="profile_image" id="profile_image" class="demoInputBox" onchange="readURL(this);">
								</div>
							</div>
						
						</div>

					</div>
					
                        <div class="col-sm-6 col-lg-6 mb-3">
							<div class="card xs-shadow border-radius-xs">
								<div class="card-body px-4 pt-4 py-2">
									<h6 class="text-black mb-1">Admin Name</h6>
									<input type="text" class="h4 text-black no-border w-100" value="{{$admin->name}}" name="name"  id="name" maxlength="30" pattern="^([A-Za-z]+ )+[A-Za-z]+$|^[A-Za-z]+$"minlength="3" title="Only one space enter between string">
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-6 mb-3">
							<div class="card xs-shadow border-radius-xs">
								<div class="card-body px-4 pt-4 py-2">
									<h6 class="text-black mb-1">Email</h6>
									<input type="email" class="h4 text-black no-border w-100" value="{{$admin->email}}" name="email" id="email">
								</div>
							</div>
						</div>
						
						<div class="col-sm-6 col-lg-6 mb-3">
							<div class="card xs-shadow border-radius-xs">
								<div class="card-body px-4 pt-4 py-2 ">
									<h6 class="text-black mb-1">Phone</h6>
									<input type="text" class="h4 text-black no-border w-100" value="{{$admin->mobile}}" name="mobile" id="mobile" maxlength="14" minlength="7" >
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-lg-4  mt-2 pt-1">
							<button type="submit" class="btn btn-primary btn-block font-18">Save</button>
						</div>
					</form>
				</div>

				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
				<script type="text/javascript">
					function readURL(input) {
							if (input.files && input.files[0]) {
								var reader = new FileReader();

								reader.onload = function (e) {
									$('#blah')
										.attr('src', e.target.result)
										.width(250)
										.height(250);

								};

								reader.readAsDataURL(input.files[0]);
							}
						}
				</script>
				
@endsection

