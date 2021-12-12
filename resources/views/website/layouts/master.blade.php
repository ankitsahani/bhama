@php
$getPurchaseProduct = Helper::getPurchaseProduct(); 

@endphp
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from big-skins.com/frontend/bhama-html-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Oct 2021 20:09:10 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Bhama</title>
	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('website_assets/images/skins/fashion/logo2x.webp')}}" />
	<link href="{{asset('website_assets/css/vendor/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('website_assets/css/vendor/vendor.min.css')}}" rel="stylesheet">
	<link href="{{asset('website_assets/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('website_assets/fonts/icomoon/icons.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
	
	<style>
		.error{
			color:red;
		}
		.footer-top {
			padding-bottom: 0px;
		}
			.inline-coupon {
			display: inline-block;
			margin: 0 2px;
		}
		.coupon-code {
			padding: 5px 10px;
			border: 2px dashed #da3f7f;
			background-color: pink;
			font-weight: 600;
		}
		.best-offers {
			line-height: 20px;
		}
		p .best-offers{
			margin:0px;
			font-style: normal;
			line-height: 1.6em;
		}
		.page-content p, .modal-content p {
			margin: 0 0 0 0;
				margin-top: 0;
		}
		.prd-block_title{
			font-family: "Open Sans",sans-serif;
			font-weight: 400;
			font-style: normal;
			font-size: 28px;
			text-transform: none;
			line-height: 1.5;
			color: #000;
			display: block;
			letter-spacing: 1px;
			text-rendering: optimizeLegibility;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			margin-bottom:15px;
			clear: both;
			font-weight: 400;
			padding-top: 4px;
		}
		/*.footer-custom-grid{*/
		/*    float:right;*/
		/*}*/
		.footer-custom{
			margin-left:750px; 
			margin-top: 25px;
		}
		.paymenticons{
				margin-left:250px; 
		}
		.footer-bottom.footer-bottom--bg, .footer-bottom.footer--dark {
			padding: 18px 0;
			background-color: #fff;
		}
		.review-item{
			display: flex; 
			width: 20%;
		}
		.categorybox{
			display: flex;
			width:23%;
		}
		.product-wrap-imgbox{
			padding-left: 200px; 
			margin-top: 50px;
		}
		.product-wrap-imgbox img{
			height:"400px";
		}
		.headgallery{
			margin-left: 49%;
			font-family: "Open Sans",sans-serif;
			font-weight: 600;
			font-style: normal;
			font-size: 24px;
			text-transform: none;
			line-height: 1.5;
			color: #000;
			display: block;
			letter-spacing: 1px;
			margin-bottom: .75em;
		}
		.galleryrow{
			display: flex;
		   
		}
		.gallerycol{
			margin: 5px;
			width: 33%;
		}
		@media only screen and (max-width: 767px) {
			.product-wrap-imgbox{
				margin-left: 5%;
			padding-left: 0px; 
			margin-top: 0px;
		}
			.categorybox{
			display: flex;
			width:43%;
		}
			.footer-custom {
			margin-left: 20%;
			margin-top: 21px;
		}
		.review-item{
			display: flex; 
			width: 50%;
		}
		.paymenticons{
				margin-left:0px; 
		}
		.footimg {
				vertical-align: middle;
				border-style: none;
				width: 100%;
			}
		  }
		</style>
</head>

<body class="has-smround-btns has-loader-bg equal-height">
	<header class="hdr-wrap">
		@include('website.layouts.header');
	</header>
    
	<div class="header-side-panel">
		@include('website.layouts.header_side_panel');
	</div>

	<div class="page-content">
		@yield('page_content');
	</div>

	<footer class="page-footer footer-style-6 ">
        @include('website.layouts.footer');
	</footer>
	<div class="footer-sticky">
		<div class="sticky-addcart js-stickyAddToCart closed">
			<div class="container">
				<div class="row">
					<div class="col-auto sticky-addcart_image">
						<a href="product.html"> <img src="images/skins/fashion/products/product-01-1.html" alt="" /> </a>
					</div>
					<div class="col col-sm-5 col-lg-4 col-xl-5 sticky-addcart_info">
						<h1 class="sticky-addcart_title">Leather Pegged Pants</h1>
						<div class="sticky-addcart_price"> <span class="sticky-addcart_price--actual">₹180.00</span> <span class="sticky-addcart_price--old">₹210.00</span> </div>
					</div>
					<div class="col-auto sticky-addcart_options  prd-block prd-block_info--style1">
						<div class="select-wrapper">
							<select class="form-control form-control--sm">
								<option value="">--Please choose an option--</option>
							</select>
						</div>
					</div>
					<div class="col-auto sticky-addcart_actions">
						<div class="prd-block_qty"> <span class="option-label">Quantity:</span>
							<div class="qty qty-changer">
								<button class="decrease"></button>
								<input type="number" class="qty-input" value="1" data-min="1" data-max="1000">
								<button class="increase"></button>
							</div>
						</div>
						<div class="btn-wrap">
							<button class="btn js-prd-addtocart" data-fancybox data-src="#modalCheckOut">Add to cart </button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="popup-addedtocart js-popupAddToCart closed" data-close="50000">
			<div class="container">
				<div class="row">
					<div class="popup-addedtocart-close js-popupAddToCart-close"><i class="icon-close"></i></div>
					<div class="popup-addedtocart-cart js-open-drop" data-panel="#dropdnMinicart"><i class="icon-basket"></i></div>
					<div class="col-auto popup-addedtocart_logo"> <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/logo-white-sm.webp" class="lazyload fade-up" alt=""> </div>
					<div class="col popup-addedtocart_info">
						<div class="row">
							<a href="product.html" class="col-auto popup-addedtocart_image"> <span class="image-container w-100">
								<img src="images/skins/fashion/products/product-01-1.html" alt=""/>
							</span> </a>
							<div class="col popup-addedtocart_text">
								<a href="product.html" class="popup-addedtocart_title"></a> <span class="popup-addedtocart_message">Added to <a href="cart.html" class="underline">Cart</a></span> <span class="popup-addedtocart_error_message"></span> </div>
						</div>
					</div>
					<div class="col-auto popup-addedtocart_actions"> <span>You can continue</span> <a href="#" class="btn btn--grey btn--sm js-open-drop" data-panel="#dropdnMinicart"><i class="icon-basket"></i><span>Check Cart</span></a> <span>or</span> <a href="checkout.html" class="btn btn--invert btn--sm"><i class="icon-envelope-1"></i><span>Check out</span></a> </div>
				</div>
			</div>
		</div>
		<div class="sticky-addcart popup-selectoptions js-popupSelectOptions closed" data-close="500000">
			<div class="container">
				<div class="row">
					<div class="popup-selectoptions-close js-popupSelectOptions-close"><i class="icon-close"></i></div>
					<div class="col-auto sticky-addcart_image sticky-addcart_image--zoom">
						<a href="#" data-caption=""> <span class="image-container"><img src="#" alt=""/></span> </a>
					</div>
					<div class="col col-sm-5 col-lg-4 col-xl-5 sticky-addcart_info">
						<h1 class="sticky-addcart_title"><a href="#">&nbsp;</a></h1>
						<div class="sticky-addcart_price"> <span class="sticky-addcart_price--actual"></span> <span class="sticky-addcart_price--old"></span> </div>
						<div class="sticky-addcart_error_message">Error Message</div>
					</div>
					<div class="col-auto sticky-addcart_options prd-block prd-block_info--style1">
						<div class="select-wrapper">
							<select class="form-control form-control--sm sticky-addcart_options_select">
								<option value="none">Select Option please..</option>
							</select>
							<div class="invalid-feedback">Can't be blank</div>
						</div>
					</div>
					<div class="col-auto sticky-addcart_actions">
						<div class="prd-block_qty"> <span class="option-label">Quantity:</span>
							<div class="qty qty-changer">
								<button class="decrease"></button>
								<input type="number" class="qty-input" value="2" data-min="1" data-max="10000">
								<button class="increase"></button>
							</div>
						</div>
						<div class="btn-wrap">
							<button class="btn js-prd-addtocart">Add to cart</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="back-to-top js-back-to-top compensate-for-scrollbar" href="#" title="Scroll To Top"> <i class="icon icon-angle-up"></i> </a>
		<div class="loader-horizontal js-loader-horizontal">
			<div class="progress">
				<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
			</div>
		</div>
	</div>
	<div class="footer-sticky">
		<div class="payment-notification-wrap js-pn" data-visible-time="3000" data-hidden-time="3000" data-delay="500" data-from="Aberdeen,Bakersfield,Birmingham,Cambridge,Youngstown" data-products='[{"productname":"{{$getPurchaseProduct->product_name}}", "productlink":"{{url('/single-product/'.$getPurchaseProduct->id)}}","productimage":"{{asset('/images/backend_img/products/small/'.$getPurchaseProduct->image)}}","{{ \Carbon\Carbon::parse($getPurchaseProduct->created)->diffForhumans() }}"}]'>
			<div class="payment-notification payment-notification--squared">
				<div class="payment-notification-inside">
					<div class="payment-notification-container">
						<a href="{{url('/single-product/'.$getPurchaseProduct->id)}}" class="payment-notification-image js-pn-link"> <img src="{{asset('/images/backend_img/products/small/'.$getPurchaseProduct->image)}}" class="js-pn-image" alt=""> </a>
						<div class="payment-notification-content-wrapper">
							<div class="payment-notification-content">
								<div class="payment-notification-text">Someone purchased</div> <a href="{{url('/single-product/'.$getPurchaseProduct->id)}}" class="payment-notification-name js-pn-name js-pn-link">{{$getPurchaseProduct->product_name}}</a>
								<div class="payment-notification-bottom">
									<div class="payment-notification-when"><span>{{ \Carbon\Carbon::parse($getPurchaseProduct->created)->diffForhumans() }}<div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="payment-notification-close"><i class="icon-close-bold"></i></div>
					<div class="payment-notification-qw prd-hide-mobile js-prd-quickview" data-src="{{asset('website_assets/ajax/ajax-quickview.html')}}"><i class="icon-eye"></i></div>
				</div>
			</div>
		</div>
	</div>
	<div id="popupNewsletter" class="modal-info-content js-newslettermodal newslettermodal--classic p-0" style="display: none;" data-pause="12000" data-expires="0" data-only-index="false">
		<div class="row align-items-center">
			<div class="col-sm-8 d-none d-sm-block">
				<div class="popup-newsletter-image image-container" style="padding-bottom: 160.0%"> <img class="lazyload w-100" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/popup-image.webp" alt=""> </div>
			</div>
			<div class="col-sm-10">
				<div class="popup-newsletter-content">
					<form method="post" action="#" class="newslettermodal-content-form">
						<h3 class="newslettermodal-content-title">Be The First To Know</h3>
						<div class="newslettermodal-content-text">About our newest arrivals, special offers plus 10% off on your first order.</div>
						<div class="form-group mt-3">
							<input type="hidden" name="contact[tags]" value="newsletter">
							<div class="form-label">Email address</div>
							<input type="email" name="contact[email]" class="form-control form-control--sm" value="" placeholder="Email address"> </div>
						<button type="submit" class="btn w-100">Subscribe</button>
						<div class="popup-newsletter-info-sm mt-2">By subscribing, you accept the <a href="#" class="modal-info-link" data-src="#agreementInfo">Terms of Use</a></div>
					</form>
				</div>
			</div>
		</div>
		<div data-fancybox-close class="fancybox-close-small modal-close"><i class="icon-close"></i></div>
	</div>

<script src="{{asset('website_assets/js/vendor-special/lazysizes.min.js')}}"></script>
<script src="{{asset('website_assets/js/vendor-special/ls.bgset.min.js')}}"></script>
<script src="{{asset('website_assets/js/vendor-special/ls.aspectratio.min.js')}}"></script>
<script src="{{asset('website_assets/js/vendor-special/jquery.min.js')}}"></script>
<script src="{{asset('website_assets/js/vendor-special/jquery.ez-plus.js')}}"></script>
<script src="{{asset('website_assets/js/vendor/vendor.min.js')}}"></script>
<script src="{{asset('website_assets/js/app-html.js')}}"></script>
<script src="{{asset('js/frontend_js/formvalidation.js')}}"></script>
</body>

<!-- Mirrored from big-skins.com/frontend/bhama-html-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Oct 2021 20:09:50 GMT -->
</html>