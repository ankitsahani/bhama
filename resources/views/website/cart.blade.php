@extends('website.layouts.master')
@section('page_content')
<div class="page-content">
	<div class="holder breadcrumbs-wrap mt-0">
		<div class="container">
			<ul class="breadcrumbs">
				<li><a href="index.html">Home</a> </li>
				<li><span>Cart</span> </li>
			</ul>
		</div>
	</div>
	<div class="holder update_cart">
		<div class="container cartData" >
			<div class="page-title text-center">
				<h1>Shopping Cart</h1> </div>
			<div class="row">
				<div class="col-lg-11 col-xl-13">
					<div class="cart-table">
						<div class="cart-table-prd cart-table-prd--head py-1 d-none d-md-flex">
							<div class="cart-table-prd-image text-center">Image</div>
							<div class="cart-table-prd-content-wrap">
								<div class="cart-table-prd-info">Name</div>
								<div class="cart-table-prd-qty">Qty</div>
								<div class="cart-table-prd-price">Price</div>
								<div class="cart-table-prd-action">&nbsp;</div>
							</div>
						</div> 
						@foreach($cart as $carts)
						
						<div class="cart-table-prd">
							<div class="cart-table-prd-image">
								<a href="javascript:void(0)" class="prd-img"> <img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/images/backend_img/products/small/'.$carts->options->image)}}" alt=""> </a>
							</div>
							<div class="cart-table-prd-content-wrap">
								<div class="cart-table-prd-info">
									<div class="cart-table-prd-price">
										<div class="price-old">${{$carts->options->selling_price}}</div>
										<div class="price-new">${{$carts->price}}</div>
									</div>
									<h2 class="cart-table-prd-name"><a href="javascript:void(0)">{{$carts->product_name}}</a></h2> </div>
								<div class="cart-table-prd-qty">
									<div class="qty qty-changer">
										{{csrf_field()}}
										<button class="decrease" onclick="decrementValue('{{ $carts->rowId }}');"></button>
										<input type="text" id="qty{{ $carts->rowId }}" name="qty" class="qty-input" value="{{$carts->qty}}" data-min="0" data-max="1000">
										<button  class="increase" onclick="incrementValue('{{ $carts->rowId }}');" ></button>
									</div>
								</div>
								<div class="cart-table-prd-price-total">${{$carts->qty*$carts->price}}</div>
							</div>
							<input type="hidden" value="{{ $carts->rowId }}" name="update_id" id="update_id"> {{ csrf_field() }}
							<div class="cart-table-prd-action"> <a href="javascript:void(0);" onclick="return removeCart();" class="cart-table-prd-remove" data-tooltip="Remove Product"><i class="icon-recycle"></i></a> </div>
						</div> @endforeach </div>
					<div class="text-center mt-1"><a href="#" class="btn btn--grey">Clear All</a> </div>
					<div class="d-none d-lg-block">
						<div class="mt-4"></div>
						<div class="holder">
							<div class="container">
								<div class="title-wrap text-center">
									<h2 class="h1-style">You may also like</h2>
									<div class="carousel-arrows carousel-arrows--center"></div>
								</div>
								<div class="prd-grid prd-carousel js-prd-carousel slick-arrows-aside-simple slick-arrows-mobile-lg data-to-show-4 data-to-show-md-3 data-to-show-sm-3 data-to-show-xs-2" data-slick='{"slidesToShow": 4, "slidesToScroll": 2, "responsive": [{"breakpoint": 992,"settings": {"slidesToShow": 3, "slidesToScroll": 1}},{"breakpoint": 768,"settings": {"slidesToShow": 2, "slidesToScroll": 1}},{"breakpoint": 480,"settings": {"slidesToShow": 2, "slidesToScroll": 1}}]}'>
									
									<div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
										<div class="prd-inside">
											<div class="prd-img-area">
												<a href="product.html" class="prd-img image-hover-scale image-container"> <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('website_assets/images/skins/fashion/products/product-06-1.webp')}}" alt="Midi Dress" class="js-prd-img lazyload fade-up">
													<div class="bhama-loader"></div>
													<div class="prd-big-squared-labels"></div>
												</a>
												<div class="prd-circle-labels"> <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a> <a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
													<div class="colorswatch-label colorswatch-label--variants js-prd-colorswatch"> <i class="icon-palette"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>
														<ul>
															<li data-image="images/skins/fashion/products/product-06-1.webp">
																<a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name"> <img src="{{asset('website_assets/images/colorswatch/color-grey.html')}}" alt=""> </a>
															</li>
															<li data-image="images/skins/fashion/products/product-06-color-2.webp">
																<a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name"> <img src="{{asset('website_assets/images/colorswatch/color-green.html')}}" alt=""> </a>
															</li>
															<li data-image="images/skins/fashion/products/product-06-color-3.webp">
																<a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name"> <img src="{{asset('website_assets/images/colorswatch/color-black.html')}}" alt=""> </a>
															</li>
														</ul>
													</div>
												</div>
												<ul class="list-options color-swatch">
													<li data-image="{{asset('website_assets/images/skins/fashion/products/product-06-1.webp')}}" class="active">
														<a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"> <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('website_assets/images/skins/fashion/products/product-06-1.webp')}}" class="lazyload fade-up" alt="Color Name"> </a>
													</li>
													<li data-image="{{asset('website_assets/images/skins/fashion/products/product-06-2.webp')}}">
														<a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"> <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('website_assets/images/skins/fashion/products/product-06-2.webp')}}" class="lazyload fade-up" alt="Color Name"> </a>
													</li>
													<li data-image="{{asset('website_assets/images/skins/fashion/products/product-06-3.webp')}}">
														<a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"> <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('website_assets/images/skins/fashion/products/product-06-3.webp')}}" class="lazyload fade-up" alt="Color Name"> </a>
													</li>
												</ul>
											</div>
											<div class="prd-info">
												<div class="prd-info-wrap">
													<div class="prd-info-top">
														<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i> </div>
													</div>
													<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i> </div>
													<div class="prd-tag"><a href="#">Seiko</a> </div>
													<h2 class="prd-title"><a href="product.html">Midi Dress</a></h2>
													<div class="prd-description">Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.</div>
													<div class="prd-action">
														<form action="#">
															<button class="btn js-prd-addtocart" data-product='{"name": "Midi Dress", "path":"images/skins/fashion/products/product-06-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
														</form>
													</div>
												</div>
												<div class="prd-hovers">
													<div class="prd-circle-labels">
														<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a> </div>
														<div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a> </div>
													</div>
													<div class="prd-price">
														<div class="price-new">$ 180</div>
													</div>
													<div class="prd-action">
														<div class="prd-action-left">
															<form action="#">
																<button class="btn js-prd-addtocart" data-product='{"name": "Midi Dress", "path":"images/skins/fashion/products/product-06-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-7 col-xl-5 mt-3 mt-md-0">
					<div class="cart-promo-banner">
						<div class="cart-promo-banner-inside">
							<div class="txt1">Save 50%</div>
							<div class="txt2">Only Today!</div>
						</div>
					</div>
					<div class="card-total">
					<!-- <div class="text-right">
								<button onclick="return updateCart('{{ $carts->rowId }}');" class="btn btn--grey"><span>UPDATE CART</span><i class="icon-refresh"></i>
								</button>
							</div> -->
						<div class="row d-flex">
							
							<div class="col card-total-txt">Total</div>
							<div class="col-auto card-total-price text-right" >$ {{\Cart::priceTotal()}}</div>
						</div>
						<a href="javascript:void(0)" onclick="return payment();"class="btn btn--full btn--lg buy_now">Checkout</a>
						<div class="card-text-info text-right">
							<h5>Standart shipping</h5>
							<p><b>10 - 11 business days</b>
								<br>1 item ships from the U.S. and will be delivered in 10 - 11 business days</p>
						</div>
					</div>
					<div class="mt-2"></div>
					<div class="panel-group panel-group--style1 prd-block_accordion" id="productAccordion">
						<div class="panel">
							<div class="panel-heading active">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#productAccordion" href="#collapse1">Shipping options</a>
									<span class="toggle-arrow"><span></span><span></span></span>
								</h4> </div>
							<div id="collapse1" class="panel-collapse collapse show">
								<div class="panel-body">
									<label>Country:</label>
									<div class="form-group select-wrapper select-wrapper-sm">
										<select class="form-control form-control--sm">
											<option value="United States">United States</option>
											<option value="Canada">Canada</option>
											<option value="China">China</option>
											<option value="India">India</option>
											<option value="Italy">Italy</option>
											<option value="Mexico">Mexico</option>
										</select>
									</div>
									<label>State:</label>
									<div class="form-group select-wrapper select-wrapper-sm">
										<select class="form-control form-control--sm">
											<option value="AL">Alabama</option>
											<option value="AK">Alaska</option>
											<option value="AZ">Arizona</option>
											<option value="AR">Arkansas</option>
											<option value="CA">California</option>
											<option value="CO">Colorado</option>
											<option value="CT">Connecticut</option>
											<option value="DE">Delaware</option>
											<option value="DC">District Of Columbia</option>
											<option value="FL">Florida</option>
											<option value="GA">Georgia</option>
											<option value="HI">Hawaii</option>
											<option value="ID">Idaho</option>
											<option value="IL">Illinois</option>
											<option value="IN">Indiana</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
											<option value="LA">Louisiana</option>
										</select>
									</div>
									<label>Zip/Postal code:</label>
									<div class="form-group">
										<input type="text" class="form-control form-control--sm"> </div>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-heading active">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#productAccordion" href="#collapse2">Discount Code</a>
									<span class="toggle-arrow"><span></span><span></span></span>
								</h4> </div>
							<div id="collapse2" class="panel-collapse collapse show">
								<div class="panel-body">
									<p>Got a promo code? Then you're a few randomly combined numbers & letters away from fab savings!</p>
									<form action="{{route('apply.coupon')}}" method="post">
										@csrf
										<div class="form-inline mt-2">
											<input type="text" class="form-control form-control--sm" name="coupon_code" placeholder="Promotion/Discount Code">
											<button type="submit" class="btn">Apply</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-heading active">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#productAccordion" href="#collapse3">Note for the seller</a>
									<span class="toggle-arrow"><span></span><span></span></span>
								</h4> </div>
							<div id="collapse3" class="panel-collapse collapse show">
								<div class="panel-body">
									<textarea class="form-control form-control--sm textarea--height-100" placeholder="Text here"></textarea>
									<div class="card-text-info mt-2">
										<p>*Savings include promotions, coupons, rueBUCKS, and shipping (if applicable).</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@php 
$user=\Auth::user();

@endphp
@endsection
<input type="hidden" value="{{\Cart::priceTotal()}}" id="amount">
<input type="hidden" value="{{$user->mobile}}" id="mobile">
<input type="hidden" value="{{$user->email}}" id="email">
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
function payment(){    
	var _token = $('input[name="_token"]').val();
		var totalAmount = $("#amount").val();
		var mobile = $("#mobile").val();
		var email = $("#email").val();
		var amount=Number(totalAmount.split(',').join(''));
	var options = {
		"key": "rzp_test_SBjU8n5MJUf7Fz",
		"amount": (amount*100), // 2000 paise = INR 20
		"name": "Bhama",
		"description": "Payment",
		"image": "//www.tutsmake.com/wp-content/uploads/2018/12/cropped-favicon-1024-1-180x180.png",
		"handler": function (response){
			$.ajax({
				url: "{{route('paysuccess')}}",
				type: 'post',
				dataType: 'json',
				data: {
				razorpay_payment_id: response.razorpay_payment_id , 
				totalAmount : totalAmount ,_token:_token,
				}, 
				success: function (msg) {
					console.log(msg);
					window.location.href = "{{route('razor-thank-you')}}";
				}
			});
		},
		"prefill": {
		"contact": mobile,
		"email":   email,
		},
		"theme": {
		"color": "#528FF0"
		}
	};
	var rzp1 = new Razorpay(options);
	rzp1.open();
	e.preventDefault();
}
// function updateCart(update_id)
// {
// 	alert(updated_id);
// 	var quantity = $('#qty'+update_id).val();
	
// 	var _token = $('input[name="_token"]').val();
//  $.ajax({
//   url:"{{ route('update.cart') }}",
//   method:"POST",
//   data:{quantity:quantity,update_id:update_id, _token:_token},
//   dataType: "json",
//   success:function(data)
//   {
//   // $('#qty').append(data.cartData.qty);
//    $('.update_cart').html(data.html);
//   //console.log(data.cartData.qty);
//    $("#message").text(data.message).css("color", "green");
//   }
//  });
// }
function incrementValue(update_id)
{   var value = $('#qty'+update_id).val();
//alert(value);
    //var value = parseInt(document.getElementById('qty').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('qty'+update_id).value = value;
	var _token = $('input[name="_token"]').val();
 $.ajax({
  url:"{{ route('update.cart') }}",
  method:"POST",
  data:{quantity:value,update_id:update_id, _token:_token},
  dataType: "json",
  success:function(data)
  {
  // $('#qty').append(data.cartData.qty);
        jQuery(".cartData").html(data.html);
		$('.minicart-total').html(data.price);
		$('.minicart-qty').html(data.count);
		
   		$("#message").text(data.message).css("color", "green");
  }
 });
}
function decrementValue(update_id){
	var value = $('#qty'+update_id).val();
	//alert(value);
	//var value = parseInt(document.getElementById('qty').value, 10);
    value = isNaN(value) ? 1 : value;
	if(value==1){
		value=1;
	}else{
		value--;
	}
  
    document.getElementById('qty'+update_id).value = value;
	var _token = $('input[name="_token"]').val();
 $.ajax({
  url:"{{ route('update.cart') }}",
  method:"POST",
  data:{quantity:value,update_id:update_id, _token:_token},
  dataType: "json",
  success:function(data)
  {
  // $('#qty').append(data.cartData.qty);
  		jQuery(".cartData").html(data.html);
		$('.minicart-total').html(data.price);
		$('.minicart-qty').html(data.count);
   		$("#message").text(data.message).css("color", "green");
  }
 });
}
</script>
