@extends('website.layouts.master')
@section('page_content')
<div class="page-content">
	<div class="holder breadcrumbs-wrap mt-0">
	<div class="container">
		<ul class="breadcrumbs">
			<li><a href="index.html">Home</a></li>
			<li><span>My account</span></li>
		</ul>
	</div>
</div>
@if(Session::has('flash_message_error'))
<div class="alert alert-error alert-block">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
  </button>
<strong>{{ session('flash_message_error') }}</strong>
</div>
@endif
@if(Session::has('flash_message_success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
  </button>
<strong>{{ session('flash_message_success') }}</strong>
</div>
@endif
	<div class="holder">
	<div class="container">
		<div class="row">
			<div class="col-md-4 aside aside--left">
			
				  @include('website.user.sidebar');
			
			</div>
			<div class="col-md-14 aside">
				<h1 class="mb-3">Account Details</h1>
				<div class="row vert-margin">
					<div class="col-sm-9">
						<div class="card">
							<div class="card-body">
								<h3>Personal Info</h3>
                                @php 
                                $name=explode(" ",$user->name);
                                @endphp
								<p><b>First Name:</b> {{$name[0]}}<br>
									<b>Last Name:</b> {{$name[1]}}<br>
									<b>E-mail:</b> {{$user->email}}<br>
									<b>Phone:</b>{{$user->mobile}}</p>
								<div class="mt-2 clearfix">
									<a href="#" class="link-icn js-show-form" data-form="#updateDetails"><i class="icon-pencil"></i>Edit</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card mt-3 d-none" id="updateDetails">
					<div class="card-body">
						<h3>Update Account Details</h3>
                        <form action="{{route('user-account-update')}}" method="post">
                            @csrf
                            <div class="row mt-2">
                                <div class="col-sm-9">
                                    <label class="text-uppercase">First Name:</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control--sm" name="first_name"placeholder="Please enter first name">
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <label class="text-uppercase">Last Name:</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control--sm" name="last_name"placeholder="Please enter last name">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-9">
                                    <label class="text-uppercase">E-mail:</label>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control--sm" name="email" placeholder="Plaese enter email">
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <label class="text-uppercase">Phone:</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control--sm" name="mobile" placeholder="Please enter mobile number">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="reset" class="btn btn--alt js-close-form" data-form="#updateDetails">Cancel</button>
                                <button type="submit" class="btn ml-1">Update</button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection