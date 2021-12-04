@extends('website.layouts.master')
@section('page_content')
<div class="page-content">
	<div class="holder breadcrumbs-wrap mt-0">
	<div class="container">
		<ul class="breadcrumbs">
			<li><a href="index.html">Home</a></li>
			<li><span>Login</span></li>
		</ul>
	</div>
</div>
	<div class="holder">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-18 col-lg-12">
				<h2 class="text-center">Login</h2>
				<div class="form-wrapper">
					<!-- <p>To access your whishlist, address book and contact preferences and to take advantage of our speedy checkout, create an account with us now.</p> -->
					<form action="{{route('user-login')}}" method="post">
						@csrf
						<div class="form-group">
							<input type="text" class="form-control" name="email"placeholder="E-mail or Contact">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>
						<div class="clearfix">
							<input id="checkbox1" name="checkbox1" type="checkbox" checked="checked">
							<label for="checkbox1">Remember Me<a href="#" class="custom-color" ></a></label>
						</div>
						<div class="text-center">
							<button class="btn">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection