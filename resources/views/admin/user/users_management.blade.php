@extends('admin.layouts.master_after_login')
@section('content')

<div class="content-wrapper">
						<div class="heading mt-3 mb-4">
						<h3 class="text-default weight-700">User Management</h3>
					</div>
						<div class="card mb-4 px-4 py-4">
							<div class="card-heading d-flex align-items-center justify-content-between mb-3  ">
								<div class="weight-700 font-20 text-default">Users</div>
								
							</div>
							<div class="right d-flex align-items-center border-bottom border-dark border-solid pb-3 mb-3">
									<div class="flex-fill d-flex align-items-center">
										<form class="d-flex flex-fill align-items-center" method="post">
											<div class="form-group my-0 mr-2">
												<select class="form-control"  id="filter" name="field">
													<option value="all" {{ $field == "all" ? 'selected="selected"' : '' }} selected>All</option>
													<option value="user_name" {{ $field == "user_name" ? 'selected="selected"' : '' }}>Username</option>
													<option value="first_name"{{ $field == "first_name" ? 'selected="selected"' : '' }} >Name</option>
													<option value="email" {{ $field == "email" ? 'selected="selected"' : '' }}>Email</option>
												

												</select>
											</div>
											<div class="form-group my-0">
											@csrf
    							<input type="hidden" name="_token" value="{!! csrf_token() !!}">

												<input type="text" class="form-control " id="search_value" name="search_value"placeholder="Search" value="{{ old('search_value' . $searchValue, $searchValue) }}">
												
											</div>
											<div class="form-group my-0">
											
											<button type="submit" class="btn btn-primary bordered ml-2 weight-300" ><b>Search</b></submit>
											</div>
											<div class="form-group my-0">
											<a href="{{route('users-list')}}" class="btn btn-primary bordered ml-2 weight-300" ><b>Reset</b></a>
											</div>
										</form>
									</div>
									<div class="justify-content-end align-items-center">
										<a href="{{route('add-users')}}" class="btn btn-primary bordered ml-2 weight-300"><b>Add User</b></a>
										<a href="{{route('export', ['searchValue' => $searchValue, 'field' => $field])}}" class="btn btn-primary bordered bg-transparent ml-2 px-3 weight-300"><b>Download CSV</b></a>
									</div>
								</div>
							<table class="table table-striped trim" id="userTable" width="100%">
								<thead>
									<tr>
										<th>S.No.</th>
										<th>Username</th>
										<th>Name</th>
										<th>Email</th>
										
										<th>Subscription</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

									@foreach($users as $key=>$user)
									<tr>
										<td>{{$key+1}}</td>
										<td>{{$user->user_name}}</td>
										<td>{{$user->first_name }}  {{$user->last_name}}</td>
										<td>{{$user->email}}</td>
									
										@if($user->is_subscribed==1)
										<td>Yes</td>
										@else
										<td>No</td>
										@endif
										<td>
											<div class="action">
												<a href="{{route('view-users',['id' => $user['id']])}}" class="mr-2"><img src="{{asset('assets/images/icons/view.svg')}}"></a>
												<a href="{{route('edit-users',['id'=> $user['id']])}}" class="mr-2"><img src="{{asset('assets/images/icons/edit.svg')}}"></a>
												<a href="javascript:void(0);"data-toggle="modal" data-target="#deleteUsers{{$user->id}}"><img src="{{asset('assets/images/icons/delete.svg')}}"></a>
												
											</div>
										</td>
										<!-- Delete Allergy Modal -->
										<div class="modal fade" id="deleteUsers{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-md modal-center" role="document">
													<div class="modal-content">
														<div class="modal-body text-center my-4 py-4">
															<h3 class="text-dark font-22">Delete user</h3>
															<h6 class="text-dark mt-3">Are you sure you want to delete this user?</h6>
															<div class="col-sm-12 mx-auto d-flex align-items-center mt-4 row">
																<div class="col-6 px-2">
																	<button type="button" class="btn btn-primary btn-lg btn-block font-16" data-dismiss="modal">No</button>	
																</div>
																<div class="col-6 px-2">
																	<a href="{{route('delete-users',['id'=> $user['id']])}}" type="button" class="btn btn-primary btn-lg btn-block font-16">Yes</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Delete Allergy Modal -->
									
									</tr>
									@endforeach
								
								
								</tbody>
							</table>
						
						</div>
						
				</div>
	
@endsection