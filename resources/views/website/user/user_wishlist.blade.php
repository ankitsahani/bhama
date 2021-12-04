@extends('website.layouts.master')
@section('page_content')
<div class="page-content">
	<div class="holder breadcrumbs-wrap mt-0">
		<div class="container">
			<ul class="breadcrumbs">
				<li><a href="{{route('index')}}">Home</a></li>
				<li><span>My account</span></li>
			</ul>
		</div>
	</div>
	<div class="holder">
		<div class="container">
			<div class="row">
				<div class="col-md-4 aside aside--left">
					@include('website.user.sidebar');
				</div>
				<div class="col-md-14 aside">
					<h1 class="mb-3">My Wishlist</h1>
					<div class="empty-wishlist js-empty-wishlist text-center py-3 py-sm-5 d-none" style="opacity: 0;">
						<h3>Your Wishlist is empty</h3>
						<div class="mt-5"> <a href="{{route('product.listing')}}" class="btn">Continue shopping</a> </div>
					</div>
					<div class="prd-grid-wrap position-relative">
						<div class="prd-grid prd-grid--wishlist data-to-show-3 data-to-show-lg-3 data-to-show-md-2 data-to-show-sm-2 data-to-show-xs-1">
							@foreach($wishlistProduct as $row)
							<div class="prd prd--in-wishlist prd--style2 prd-labels--max prd-labels-shadow ">
								<div class="prd-inside">
									<div class="prd-img-area">
										<a href="{{url('single-product/'.$row->id)}}" class="prd-img image-hover-scale image-container"> <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/images/backend_img/products/small/'.$row->image)}}" alt="Suede Leather Mini Skirt" class="js-prd-img lazyload fade-up">
											<div class="bhama-loader"></div>
											<div class="prd-big-squared-labels"> </div>
										</a>
										<div class="prd-circle-labels"> {{csrf_field()}}<a href="javascript:void(0);" onclick="return removeWishlist({{$row->id}});" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist" title="Remove From Wishlist"><i class="icon-recycle"></i></a> <a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a> </div>
										<ul class="list-options color-swatch">
										@php 
										$productImages=App\ProductsImage::where('product_id',$row->id)->take(2)->get();
										@endphp
										@foreach($productImages as $row1)
										<li data-image="{{asset('/images/backend_img/products/small/'.$row1->image)}}" class="active">
											<a href="#" class="js-color-toggle" data-toggle="tooltip{{$row->id}}" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/images/backend_img/products/small/'.$row1->image)}}" class="lazyload fade-up" alt="Color Name"></a>
										</li>
										@endforeach
										<li data-image="{{asset('/images/backend_img/products/small/'.$row->image)}}">
											<a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/images/backend_img/products/small/'.$row->image)}}" class="lazyload fade-up" alt="Color Name"></a>
										</li>
									
									</ul>
									</div>
									<div class="prd-info">
										<div class="prd-info-wrap">
											
											<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
											
											<h2 class="prd-title"><a href="{{url('single-product/'.$row->id)}}">{{$row->product_name}}</a></h2>
											<div class="prd-description"> Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia. </div>
										</div>
										<div class="prd-hovers">
											<div class="prd-circle-labels">
												<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
												<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" ><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
											</div>
											<div class="prd-price">
											<div class="price-old">₹ {{$row->price}}</div>
											<div class="price-new">₹ {{$row->selling_price}}</div>
										</div>
											<div class="prd-action">
												<div class="prd-action-left">
														<a href="{{url('single-product/'.$row->id)}}" class="btn">View Full Info</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


<script>
function removeWishlist(id){
	//alert(id);
	var _token = $('input[name="_token"]').val();
	$.ajax({
			url:"{{ route('remove-wishlist') }}",
			method:"POST",
			data:{id:id,_token:_token},
			dataType: "json",
			success:function(data)
			{
				// console.log(data.data);
				// $('#loadMorePendigPayment').html(data.html);
				//toastr.success('Retail Price Setting Updated', 'Success');
			}
		
		});
}
</script>
