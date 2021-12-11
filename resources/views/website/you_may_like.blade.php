
@foreach($relatedProducts as $row)
<div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="{{url('single-product/'.$row->id)}}" class="prd-img image-hover-scale image-container"> <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/images/backend_img/products/small/'.$row->image)}}" alt="Midi Dress with Belt" class="js-prd-img lazyload fade-up">
				<div class="bhama-loader"></div>
				<div class="prd-big-squared-labels"> </div>
			</a>
			<div class="prd-circle-labels">{{csrf_field()}}
			@php 
			$wishlist=\App\Wishlist::where('product_id',$row->id)->first();
			@endphp
			@if($wishlist)
			@if($wishlist->status==0)
			 <a href="javascript:void(0)" onclick="return addWishlist({{$row->id}});" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist">
			 	<i class="icon-heart-stroke"></i>
			</a>
			@else
			<a href="javascript:void(0);"  onclick="return addWishlist({{$row->id}});" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist">
				<i class="icon-heart-hover"></i>
			</a> 
			@endif
			@else
			<a href="javascript:void(0)" onclick="return addWishlist({{$row->id}});" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist">
			 	<i class="icon-heart-stroke"></i>
			</a>
			@endif
			
			<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="{{asset('website_assets/ajax/ajax-quickview.html')}}">
				<i class="icon-eye"></i>
				<span>QUICK VIEW</span>
			</a> 
		</div>
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
				<h2 class="prd-title"><a href="{{url('single-product/'.$row->id)}}">{{$row->product_name}}</a></h2>
				<div class="prd-info-top">
					<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				</div>
				<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
					<div style="color:#ee7db6af;"></div>
				</div>
				<div class="prd-description"> Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia. </div>
				<div class="prd-action">
					<form action="#">
						<a href="{{url('single-product/'.$row->id)}}" class="btn js-prd-addtocart" >Full View</a>
					</form>
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-old">₹ {{$row->price}}</div>
					<div class="price-new">₹ {{$row->selling_price}}</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<a href="{{url('single-product/'.$row->id)}}" class="btn js-prd-addtocart" >Full View</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach