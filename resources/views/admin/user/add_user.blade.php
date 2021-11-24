@extends('admin.layouts.master_after_login')
@section('content')

<div class="content-wrapper">
						<div class="heading mt-3 mb-3 d-flex align-items-center justify-content-between">
							<h3 class="text-default weight-700 my-0">Add User</h3>
						</div>
                        <form action="{{route('add-users')}}" method="post" id="addUserform">
                        @csrf
                        <div class="card mb-4 px-4 py-4">
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label>Username</label>
										<input class="form-control bg-gray no-border" name="user_name"  value="{{ old('user_name') }}" minlength="3" maxlength="25">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label>First Name</label>
										<input type="text" class="form-control bg-gray no-border" name="first_name" value="{{ old('first_name') }}" minlength="3" maxlength="25">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label>Last Name</label>
										<input type="text" class="form-control bg-gray no-border" name="last_name"value="{{ old('last_name') }}" minlength="3" maxlength="25">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label>Email Address</label>
										<input type="text" class="form-control bg-gray no-border" name="email"value="{{ old('email') }}">
									</div>
								</div>
								<div class="col-sm-4">
									
									 <div class="form-group password-field">
									 	<label>Password</label>
		                                <input type="password" class="form-control bg-gray no-border unlock-icon" onkeypress="return AvoidSpace(event);" name="password"minlength="8" value="{{ old('password') }}">
		                                <i style="top: 30px;" class="showPassword text-black"></i>
                            		</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group password-field">
										<label>Confirm Password</label>
									 <input type="password" class="form-control bg-gray no-border unlock-icon" onkeypress="return AvoidSpace(event);" name="confirm_password" value="{{ old('password') }}">
		                                <i class="showPassword text-black" style="top: 30px;"></i>
		                            </div>
								</div>
							
								<div class="col-sm-4">
									<div class="form-group">
										<label>Subscription Plan</label>
										<select class="form-control bg-gray no-border" name="subscription_id">
											<option value="">Select Plan</option>
                                            @foreach($subscriptionPlan as $subscribe)
											<option value="{{$subscribe->id}}" {{(old('subscription_id')== $subscribe->id)	 ? 'selected="selected"' : '' }}>{{$subscribe->name}}</option>
											@endforeach
										</select>
									</div>
								</div>
							
								<div class="col-sm-4">
									<div class="form-group">
										<label>&nbsp;</label>
										<button type="submit" class="btn btn-primary btn-block h-45">Add Now</button>
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