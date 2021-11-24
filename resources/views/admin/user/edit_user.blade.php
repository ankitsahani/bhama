@extends('admin.layouts.master_after_login')
@section('content')

<div class="content-wrapper">
						<div class="heading mt-3 mb-3 d-flex align-items-center justify-content-between">
							<h3 class="text-default weight-700 my-0">Update User</h3>
						</div>
                        <form action="{{route('edit-users',['id'=>$user['id']])}}" method="post" id="addUserform">
                        @csrf
                        <div class="card mb-4 px-4 py-4">
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label>Username</label>
										<input class="form-control bg-gray no-border" name="user_name" value="{{$user->user_name}}" readonly>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label>First Name</label>
										<input type="text" class="form-control bg-gray no-border" name="first_name" value="{{$user->first_name}}" minlength="3" maxlength="25">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label>Last Name</label>
										<input type="text" class="form-control bg-gray no-border" name="last_name" value="{{$user->last_name}}" minlength="3" maxlength="25">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label>Email Address</label>
										<input type="email" class="form-control bg-gray no-border" name="email" value="{{$user->email}}" readonly>
									</div>
								</div>
							
							
								<div class="col-sm-4">
									<div class="form-group">
										<label>Password</label>
										<input type="text" class="form-control bg-gray no-border" name="upassword" minlength="8" onkeypress="return AvoidSpace(event);" placeholder="********">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label>Subscription Plan</label>
										<select class="form-control bg-gray no-border" name="subscription_id" >
											@if($user->is_subscribed !=1)
												<option value="" selected disabled>Select Plan</option>
	                                            @foreach($subscriptionPlan as $subscribe)
												<option value="{{$subscribe->id}}" {{$subscribe->id == $user->subscription_id	 ? 'selected="selected"' : '' }}>{{$subscribe->name}}</option>
												@endforeach
											@else
											<option value="" selected disabled>Select Plan</option>
	                                            @foreach($subscriptionPlan as $subscribe)
												<option value="{{$subscribe->id}}" {{$subscribe->id == $user->subscription_id	 ? 'selected="selected"' : '' }}>{{$subscribe->name}}</option>
												@endforeach
											@endif
										</select>
									</div>
								</div>
								
								<div class="col-sm-4">
									<div class="form-group">
										<label>&nbsp;</label>
										<button type="submit" class="btn btn-primary btn-block h-45">Update Now</button>
									</div>
								</div>
							</div>
						
                        </form>
						</div>
				</div>
          <!-- content-wrapper ends -->
<script>
    
    
    function AvoidSpace(event) {
    var k = event ? event.which : window.event.keyCode;
    if (k == 32) return false;
}

/* Remove Blank Space Automatically Before, After & middle of String */

function removeSpaces(string) {
 return string.split(' ').join('');
}
</script>
@endsection