@extends('admin.layouts.master_after_login')
@section('content')
<div class="content-wrapper">
	<div class="heading mt-3 mb-4">
		<h3 class="text-default weight-700">Dashboard</h3>
	</div>
	<div class="row mx-n2">
			<div class="col-md-3 px-2 stretch-card grid-margin">
				<div class="card card-img-holder text-default">
					<div class="card-body d-flex align-items-center justify-content-between px-3">
						<div class="left">
							<h6 class="font-weight-normal mb-2">Total Users</h6>
							<h3 class="mb-0 text-black">{{$totalUsers}}</h3>
						</div>
						<div class="right">
							<img src="assets/images/icons/group.svg">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 px-2 stretch-card grid-margin">
							<div class="card card-img-holder text-default">
								<div class="card-body d-flex align-items-center justify-content-between px-3">
									<div class="left">
										<h6 class="font-weight-normal mb-2">Total Unsubscribed  Users </h6>
										<h3 class="mb-0 text-black"></h3>
									</div>
									<div class="right">
										<img src="assets/images/icons/group.svg">
									</div>
								</div>
							</div>
						</div>
			<div class="col-md-3 px-2 stretch-card grid-margin">
				<div class="card card-img-holder text-default">
					<div class="card-body d-flex align-items-center justify-content-between px-3">
						<div class="left">
							<h6 class="font-weight-normal mb-2">Total Recipes</h6>
							<h3 class="mb-0 text-black"></h3>
						</div>
						<div class="right">
							<img src="{{asset('assets/images/icons/recipe.svg')}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 px-2 stretch-card grid-margin">
				<div class="card card-img-holder text-default">
					<div class="card-body d-flex align-items-center justify-content-between px-3">
						<div class="left">
							<h6 class="font-weight-normal mb-2">Total Subscriptions</h6>
							<h3 class="mb-0 text-black"></h3>
						</div>
						<div class="right">
							<img src="{{asset('assets/images/icons/rss-social-badge.svg')}}">
						</div>
					</div>
				</div>
			</div>
		<!-- <div class="col-md-4 px-2 stretch-card grid-margin">
			<div class="card card-img-holder text-default text-right">
				<div class="card-body d-flex align-items-center justify-content-between">
					<div class="left">
						<h4 class="font-weight-normal mb-2">Total Users</h4>
						<h3 class="mb-0">{{$totalUsers}}</h3>
					</div>
					<div class="right">
						<img src="{{asset('assets/images/icons/group.svg')}}">
					</div>
				</div>
			</div>
		</div> -->
		<!-- <div class="col-md-4 stretch-card grid-margin">
			<div class="card card-img-holder text-default text-right">
				<div class="card-body d-flex align-items-center justify-content-between">
					<div class="left">
						<h4 class="font-weight-normal mb-2">Total Recipes</h4>
						<h3 class="mb-0"></h3>
					</div>
					<div class="right">
						<img src="{{asset('assets/images/icons/recipe.svg')}}">
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 stretch-card grid-margin">
			<div class="card card-img-holder text-default text-right">
				<div class="card-body d-flex align-items-center justify-content-between">
					<div class="left">
						<h4 class="font-weight-normal mb-2">Total Subscriptions</h4>
						<h3 class="mb-0"></h3>
					</div>
					<div class="right">
						<img src="{{asset('assets/images/icons/rss-social-badge.svg')}}">
					</div>
				</div>
			</div>
		</div> -->
	</div>
	<!-- <div class="row">
		<div class="col-md-12 stretch-card grid-margin">
			<div class="card card-img-holder chart-tabs px-3 py-4">
				<div class="weight-700 font-20 border-bottom border-dark border-solid pb-3 mb-3 text-default">
					Earnings
				</div>
				<div class="chart mt-2">
					<ul class="nav nav-pills mb-4">
						<li class="nav-item">
							<a class="nav-link active px-4" data-toggle="tab"  href="#"><span class="mx-2">All Time</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-4" data-toggle="tab"  href="#"><span class="mx-2">This year</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-4" data-toggle="tab"  href="#"><span class="mx-2">All week</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-4" data-toggle="tab"  href="#"><span class="mx-2">Today</span></a>
						</li>
					</ul>
					<div id="earnings" class="flex-fill" style="height: 250px"></div>
				</div>
			</div>
		</div>
	</div> -->
	<div class="row">
						<div class="col-md-12 stretch-card grid-margin">
							<div class="card card-img-holder chart-tabs px-3 py-4">
								<div class="weight-700 font-20 border-bottom border-dark border-solid pb-3 mb-3 text-default">
									Earnings
								</div>
								<div class="chart mt-2">
									<ul class="nav nav-pills mb-4">
										<li class="nav-item">
											<a class="nav-link active px-4 all"  data-toggle="tab"  href="#tab-1"><span class="mx-2">All Time</span></a>
										</li>
										<li class="nav-item">
											<a class="nav-link px-4 year" data-toggle="tab"  href="#tab-2"><span class="mx-2">This year</span></a>
										</li>
										<li class="nav-item">
											<a class="nav-link px-4 week" data-toggle="tab"  href="#tab-3"><span class="mx-2">This week</span></a>
										</li>
										<li class="nav-item">
											<a class="nav-link px-4 today" data-toggle="tab"  href="#tab-4"><span class="mx-2">Today</span></a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane fade show active" id="tab-1">
											<div id="earnings" class="flex-fill earnings" style="height: 250px"></div>	
										</div>
										<div class="tab-pane fade" id="tab-2">
											<div id="earnings1" class="flex-fill earnings" style="height: 250px"></div>
										</div>
										<div class="tab-pane fade" id="tab-3">
											<div id="earnings2" class="flex-fill earnings" style="height: 250px"></div>
										</div>
										<div class="tab-pane fade" id="tab-4">
											<div id="earnings3" class="flex-fill earnings" style="height: 250px"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<!-- content-wrapper ends -->
@endsection