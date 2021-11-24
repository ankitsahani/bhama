@extends('admin.layouts.master_before_login')
@section('content')
<div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper login-bg">
        <div class="row flex-grow">
            <div class="col-lg-6 loginRight mx-auto d-flex align-items-center">
                    <div class="auth-form-light text-left w-100">
                        <h3 class="text-black mt-4 mt-md-0 text-center">Login</h3>
                        <form action="{{route('login')}}" method="post" id="loginForm">
                        @csrf
                            <div class="form-group over-label lg">
                                <input type="email" class="form-control font-16" onkeypress="return AvoidSpace(event);" id="" name="email" value="{{old('email')}}"placeholder="Username">
                            </div>
                            <div class="form-group over-label lg password-field">
                                <input type="password" class="form-control font-16 unlock-icon" onkeypress="return AvoidSpace(event);" name="password" id="" placeholder="Password">
                                <i class="showPassword text-black"></i>
                            </div>
                            <div class="col-sm-11 mx-auto text-center">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
      </div>
    </div>
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

