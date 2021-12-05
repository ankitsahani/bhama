<div class="dropdn-content-block">
		<div class="dropdn-close"><span class="js-dropdn-close">Close</span></div>
		<div class="minicart-drop-content js-dropdn-content-scroll">
             @php $cart=\Cart::content(); 
             @endphp @foreach($cart as $carts)
			<div class="minicart-prd row">
				<div class="minicart-prd-image image-hover-scale-circle col"> <a href="product.html"><img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/images/backend_img/products/small/'.$carts->options->image)}}" alt=""></a> </div>
				<div class="minicart-prd-info col">
					<h2 class="minicart-prd-name"><a href="#">{{$carts->name}}</a></h2>
					<div class="minicart-prd-qty"><span class="minicart-prd-qty-label">Quantity:</span><span class="minicart-prd-qty-value">{{$carts->qty}}</span></div>
					<div class="minicart-prd-price prd-price">
						<div class="price-old">₹{{$carts->selling_price}}</div>
						<div class="price-new">₹{{$carts->price}}</div>
					</div>
				</div>
				<input type="hidden" value="{{ $carts->rowId }}" name="update_id" id="update_id"> {{ csrf_field() }}
				<div class="minicart-prd-action"> <a href="javascript:void(0);" onclick="return removeCart();" class="js-product-remove" data-line-number="1"><i class="icon-recycle"></i></a> </div>
			</div> 
            @endforeach
			<div class="minicart-empty js-minicart-empty d-none">
				<div class="minicart-empty-text">Your cart is empty</div>
				<div class="minicart-empty-icon"> <i class="icon-shopping-bag"></i>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 306 262" style="enable-background:new 0 0 306 262;" xml:space="preserve">
						<path class="st0" d="M78.1,59.5c0,0-37.3,22-26.7,85s59.7,237,142.7,283s193,56,313-84s21-206-69-240s-249.4-67-309-60C94.6,47.6,78.1,59.5,78.1,59.5z" /> </svg>
				</div>
			</div>
			<a href="#" class="minicart-drop-countdown mt-3">
				<div class="countdown-box-full">
					<div class="row no-gutters align-items-center">
						<div class="col-auto"><i class="icon-gift icon--giftAnimate"></i></div>
						<div class="col">
							<div class="countdown-txt">WHEN BUYING TWO THINGS A THIRD AS A GIFT </div>
							<div class="countdown js-countdown" data-countdown="2021/07/01"></div>
						</div>
					</div>
				</div>
			</a>
			<div class="minicart-drop-info d-none d-md-block">
				<div class="shop-feature-single row no-gutters align-items-center">
					<div class="shop-feature-icon col-auto"><i class="icon-truck"></i></div>
					<div class="shop-feature-text col"><b>SHIPPING!</b> Continue shopping to add more products and receive free shipping</div>
				</div>
			</div>
		</div>
		<div class="minicart-drop-fixed js-hide-empty">
			<div class="loader-horizontal-sm js-loader-horizontal-sm" data-loader-horizontal=""><span></span></div>
			<div class="minicart-drop-total js-minicart-drop-total row no-gutters align-items-center">
				<div class="minicart-drop-total-txt col-auto heading-font">Subtotal</div>
				<div class="minicart-drop-total-price col" data-header-cart-total="">₹{{\Cart::priceTotal()}}</div>
			</div>
			<div class="minicart-drop-actions"> <a href="{{route('cart')}}" class="btn btn--md btn--grey"><i class="icon-basket"></i><span>Cart Page</span></a> <a href="checkout.html" class="btn btn--md"><i class="icon-checkout"></i><span>Check out</span></a> </div>
			<ul class="payment-link mb-2">
				<li><i class="icon-amazon-logo"></i></li>
				<li><i class="icon-visa-pay-logo"></i></li>
				<li><i class="icon-skrill-logo"></i></li>
				<li><i class="icon-klarna-logo"></i></li>
				<li><i class="icon-paypal-logo"></i></li>
				<li><i class="icon-apple-pay-logo"></i></li>
			</ul>
		</div>
</div>

    <script>
function removeCart()
{
	var update_id=$('#update_id').val();
	var _token = $('input[name="_token"]').val();
	$.ajax({
	url:"{{ route('remove.from.cart') }}",
	method:"POST",
	data:{update_id:update_id, _token:_token},
	dataType: "json",
	success:function(data)
	{
		//console.log(data.cartData);
		jQuery(".update_cart").html(data.cartData);
		$('.minicart-total').html(data.price);
		$('.minicart-qty').html(data.count);
		$("#message").text(data.message).css("color", "red").delay(5000).fadeOut();;

	}
	});
}
</script>