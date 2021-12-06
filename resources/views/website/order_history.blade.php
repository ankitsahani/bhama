@extends('website.layouts.master')
@section('page_content')
<div class="holder">
	<div class="container">
		<div class="row">
			<div class="col-md-4 aside aside--left">
				@include('website.user.sidebar')
			</div>
			<div class="col-md-14 aside">
			<h1 class="mb-3">Order History</h1>
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-order-history">
						<thead>
						<tr>
							<th scope="col"># </th>
							<th scope="col">Order Number</th>
							<th scope="col">Order Date </th>
							<th scope="col">Status</th>
							<th scope="col">Total Price</th>
							<th scope="col"></th>
						</tr>
						</thead>
						<tbody>
					    @if(!empty($orders))		
						@foreach($orders as $key=>$order)
						<tr>
							<td>{{$key+1}}</td>
							<td><b>{{$order->order_number}}</b> <a href="{{route('invoice-history')}}" class="ml-1">View Details</a></td>
							<td>{{date('d.m.Y',strtotime($order->created_at))}}</td>
							<td>{{$order->order_status}}</td>
							<td><span class="color">₹{{$order->grand_total}}</span></td>
							<td><a href="#" class="btn btn--grey btn--sm">REORDER</a></td>
						</tr>
						@endforeach
						@endif
						</tbody>
					</table>
				</div>
				<div class="text-right mt-2">
					<a href="{{route('clear-order-history')}}" class="btn btn--alt">Clear History</a>
				</div>
			</div>
		</div>
	</div>

   @endsection 