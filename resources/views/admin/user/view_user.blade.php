@extends('admin.layouts.master_after_login')
@section('content')

<div class="content-wrapper">
						<div class="heading mt-3 mb-3 d-flex align-items-center justify-content-between">
							<h3 class="text-default weight-700 my-0">User Details</h3>
						</div>
						<form action="" method="">
							<div class="card mb-4 p-4">
								<div class="card-heading d-flex align-items-center justify-content-between mb-3 border-bottom border-dark border-solid pb-3 mb-3">
									<div class="weight-700 font-20 text-default">Why are you here?</div>
								</div>
								<div class="card-body row p-0">
									<div class="col-sm-4 mt-4">
										<h5 class="weight-400"><b>Username</b></h5>
										<p>{{$user->user_name}} </p>
									</div>
									<div class="col-sm-4 mt-4">
										<h5 class="weight-400"><b>Name</b></h5>
										<p>{{$user->first_name}} {{$user->last_name}}</p>
									</div>
                                    <div class="col-sm-4 mt-4">
										<h5 class="weight-400"><b>Email</b></h5>
										<p>{{$user->email}} </p>
									</div>
                                   
								</div>
                                <div class="card-body row p-0">
									
									<div class="col-sm-4 mt-4">
										<h5 class="weight-400"><b>Subscription</b></h5>
                                        @if($user->is_subscribed==1)
										<p>Yes</p>
										@else
										<p>No</p>
										@endif
									</div>
           
								</div>
							</div>
							
						</form>
				</div>
				
@endsection