@extends('website.layouts.master')
@section('page_content')

<div class="header-side-panel">
		<div class="mobilemenu js-push-mbmenu">
			<div class="mobilemenu-content">
				<div class="mobilemenu-close mobilemenu-toggle">Close</div>
				<div class="mobilemenu-scroll">
					<div class="mobilemenu-search"></div>
					<div class="nav-wrapper show-menu">
						<div class="nav-toggle">	<span class="nav-back"><i class="icon-angle-left"></i></span>
							<span class="nav-title"></span>
							<a href="#" class="nav-viewall">view all</a>
						</div>
						<ul class="nav nav-level-1">
							<li><a href="category.html">New Arrivals<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-2">
									<li><a href="category.html">Shoes<span class="arrow"><i class="icon-angle-right"></i></span></a>
										<ul class="nav-level-3">
											<li><a href="category.html">Heels</a>
											</li>
											<li><a href="category.html">Boots</a>
											</li>
											<li><a href="category.html">Flats</a>
											</li>
											<li><a href="category.html">Sneakers &amp; Athletic</a>
											</li>
											<li><a href="category.html">Clogs &amp; Mules</a>
											</li>
										</ul>
									</li>
									<li><a href="category.html">Tops<span class="arrow"><i class="icon-angle-right"></i></span></a>
										<ul class="nav-level-3">
											<li><a href="category.html">Dresses</a>
											</li>
											<li><a href="category.html">Shirts &amp; Tops</a>
											</li>
											<li><a href="category.html">Coats &amp; Outerwear</a>
											</li>
											<li><a href="category.html">Sweaters</a>
											</li>
										</ul>
									</li>
									<li><a href="category.html">Shoes<span class="arrow"><i class="icon-angle-right"></i></span></a>
										<ul class="nav-level-3">
											<li><a href="category.html">Heels</a>
											</li>
											<li><a href="category.html">Boots</a>
											</li>
											<li><a href="category.html">Flats</a>
											</li>
											<li><a href="category.html">Sneakers &amp; Athletic</a>
											</li>
											<li><a href="category.html">Clogs &amp; Mules</a>
											</li>
										</ul>
									</li>
									<li><a href="category.html">Bottoms<span class="arrow"><i class="icon-angle-right"></i></span></a>
										<ul class="nav-level-3">
											<li><a href="category.html">Jeans</a>
											</li>
											<li><a href="category.html">Pants</a>
											</li>
											<li><a href="category.html">slippers</a>
											</li>
											<li><a href="category.html">suits</a>
											</li>
											<li><a href="category.html">socks</a>
											</li>
										</ul>
									</li>
									<li><a href="category.html">Accessories<span class="arrow"><i class="icon-angle-right"></i></span></a>
										<ul class="nav-level-3">
											<li><a href="category.html">Sunglasses</a>
											</li>
											<li><a href="category.html">Hats</a>
											</li>
											<li><a href="category.html">Watches</a>
											</li>
											<li><a href="category.html">Jewelry</a>
											</li>
											<li><a href="category.html">Belts</a>
											</li>
										</ul>
									</li>
									<li><a href="category.html">Bags<span class="arrow"><i class="icon-angle-right"></i></span></a>
										<ul class="nav-level-3">
											<li><a href="category.html">Handbags</a>
											</li>
											<li><a href="category.html">Backpacks</a>
											</li>
											<li><a href="category.html">Luggage</a>
											</li>
											<li><a href="category.html">wallets</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<!--<li><a href="https://bit.ly/3iLAAEp" target="_blank">Buy Theme<span class="menu-label menu-label--color3">Hurry Up!</span><span class="arrow"><i class="icon-angle-right"></i></span></a></li>-->
						</ul>
					</div>
					<div class="mobilemenu-bottom">
						<div class="mobilemenu-currency"></div>
						<div class="mobilemenu-language"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="dropdn-content account-drop" id="dropdnAccount">
			<div class="dropdn-content-block">
				<div class="dropdn-close"><span class="js-dropdn-close">Close</span>
				</div>
				<ul>
					<li><a href="account-create.html"><span>Log In</span><i class="icon-login"></i></a>
					</li>
					<li><a href="account-create.html"><span>Register</span><i class="icon-user2"></i></a>
					</li>
					<li><a href="checkout.html"><span>Checkout</span><i class="icon-card"></i></a>
					</li>
				</ul>
				<div class="dropdn-form-wrapper">
					<h5>Quick Login</h5>
					<form action="#">
						<div class="form-group">
							<input type="text" class="form-control form-control--sm is-invalid" placeholder="Enter your e-mail">
							<div class="invalid-feedback">Can't be blank</div>
						</div>
						<div class="form-group">
							<input type="password" class="form-control form-control--sm" placeholder="Enter your password">
						</div>
						<button type="submit" class="btn">Enter</button>
					</form>
				</div>
			</div>
			<div class="drop-overlay js-dropdn-close"></div>
		</div>
		<div class="dropdn-content minicart-drop" id="dropdnMinicart">
			<div class="dropdn-content-block">
				<div class="dropdn-close"><span class="js-dropdn-close">Close</span>
				</div>
				<div class="minicart-drop-content js-dropdn-content-scroll">
					<div class="minicart-prd row">
						<div class="minicart-prd-image image-hover-scale-circle col">
							<a href="product.html">
								<img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-01-1.webp" alt="">
							</a>
						</div>
						<div class="minicart-prd-info col">
							<div class="minicart-prd-tag">bhama</div>
							<h2 class="minicart-prd-name"><a href="#">Leather Pegged Pants</a></h2>
							<div class="minicart-prd-qty"><span class="minicart-prd-qty-label">Quantity:</span><span class="minicart-prd-qty-value">1</span>
							</div>
							<div class="minicart-prd-price prd-price">
								<div class="price-old">₹200.00</div>
								<div class="price-new">₹180.00</div>
							</div>
						</div>
						<div class="minicart-prd-action">	<a href="#" class="js-product-remove" data-line-number="1"><i class="icon-recycle"></i></a>
						</div>
					</div>
					<div class="minicart-prd row">
						<div class="minicart-prd-image image-hover-scale-circle col">
							<a href="product.html">
								<img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-16-1.webp" alt="">
							</a>
						</div>
						<div class="minicart-prd-info col">
							<div class="minicart-prd-tag">bhama</div>
							<h2 class="minicart-prd-name"><a href="#">Cascade Casual Shirt</a></h2>
							<div class="minicart-prd-qty"><span class="minicart-prd-qty-label">Quantity:</span><span class="minicart-prd-qty-value">1</span>
							</div>
							<div class="minicart-prd-price prd-price">
								<div class="price-old">₹200.00</div>
								<div class="price-new">₹180.00</div>
							</div>
						</div>
						<div class="minicart-prd-action">	<a href="#" class="js-product-remove" data-line-number="2"><i class="icon-recycle"></i></a>
						</div>
					</div>
					<div class="minicart-empty js-minicart-empty d-none">
						<div class="minicart-empty-text">Your cart is empty</div>
						<div class="minicart-empty-icon">	<i class="icon-shopping-bag"></i>
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 306 262" style="enable-background:new 0 0 306 262;" xml:space="preserve">
								<path class="st0" d="M78.1,59.5c0,0-37.3,22-26.7,85s59.7,237,142.7,283s193,56,313-84s21-206-69-240s-249.4-67-309-60C94.6,47.6,78.1,59.5,78.1,59.5z" />
							</svg>
						</div>
					</div>
					<a href="#" class="minicart-drop-countdown mt-3">
						<div class="countdown-box-full">
							<div class="row no-gutters align-items-center">
								<div class="col-auto"><i class="icon-gift icon--giftAnimate"></i>
								</div>
								<div class="col">
									<div class="countdown-txt">WHEN BUYING TWO THINGS A THIRD AS A GIFT</div>
									<div class="countdown js-countdown" data-countdown="2021/07/01"></div>
								</div>
							</div>
						</div>
					</a>
					<div class="minicart-drop-info d-none d-md-block">
						<div class="shop-feature-single row no-gutters align-items-center">
							<div class="shop-feature-icon col-auto"><i class="icon-truck"></i>
							</div>
							<div class="shop-feature-text col"><b>SHIPPING!</b> Continue shopping to add more products and receive free shipping</div>
						</div>
					</div>
				</div>
				<div class="minicart-drop-fixed js-hide-empty">
					<div class="loader-horizontal-sm js-loader-horizontal-sm" data-loader-horizontal=""><span></span>
					</div>
					<div class="minicart-drop-total js-minicart-drop-total row no-gutters align-items-center">
						<div class="minicart-drop-total-txt col-auto heading-font">Subtotal</div>
						<div class="minicart-drop-total-price col" data-header-cart-total="">₹340</div>
					</div>
					<div class="minicart-drop-actions">	<a href="cart.html" class="btn btn--md btn--grey"><i class="icon-basket"></i><span>Cart Page</span></a>
						<a href="checkout.html" class="btn btn--md"><i class="icon-checkout"></i><span>Check out</span></a>
					</div>
					<ul class="payment-link mb-2">
						<li><i class="icon-amazon-logo"></i>
						</li>
						<li><i class="icon-visa-pay-logo"></i>
						</li>
						<li><i class="icon-skrill-logo"></i>
						</li>
						<li><i class="icon-klarna-logo"></i>
						</li>
						<li><i class="icon-paypal-logo"></i>
						</li>
						<li><i class="icon-apple-pay-logo"></i>
						</li>
					</ul>
				</div>
			</div>
			<div class="drop-overlay js-dropdn-close"></div>
		</div>
	</div>
	<div class="page-content">
		<div class="holder breadcrumbs-wrap mt-0">
			<div class="container">
				<ul class="breadcrumbs">
					<li><a href="index.html">Home</a>
					</li>
					<li><span>Cart</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="holder">
			<div class="container">
				<div class="page-title text-center">
					<h1>Shopping Cart</h1>
				</div>
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
									<a href="product.html" class="prd-img">
										<img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-01-1.webp" alt="">
									</a>
								</div>
								<div class="cart-table-prd-content-wrap">
									<div class="cart-table-prd-info">
										<div class="cart-table-prd-price">
											<div class="price-old">${{$carts->price}}</div>
											<div class="price-new">${{$carts->options->selling_price}}</div>
										</div>
										<h2 class="cart-table-prd-name"><a href="product.html">{{$carts->product_name}}</a></h2>
									</div>
									<div class="cart-table-prd-qty">
										<div class="qty qty-changer">
											<button class="decrease"></button>
											<input type="text" class="qty-input" value="{{$carts->qty}}" data-min="0" data-max="1000">
											<button class="increase"></button>
										</div>
									</div>
									<div class="cart-table-prd-price-total">${{$carts->qty*$carts->options->selling_price}}</div>
								</div>
								<div class="cart-table-prd-action">	<a href="#" class="cart-table-prd-remove" data-tooltip="Remove Product"><i class="icon-recycle"></i></a>
								</div>
							</div>
                            @php 
                            $total=0;
                            $total+=$carts->qty*$carts->options->selling_price;
                            @endphp
							@endforeach
						</div>
						<div class="text-center mt-1"><a href="#" class="btn btn--grey">Clear All</a>
						</div>
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
													<a href="product.html" class="prd-img image-hover-scale image-container">
														<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-06-1.webp" alt="Midi Dress" class="js-prd-img lazyload fade-up">
														<div class="bhama-loader"></div>
														<div class="prd-big-squared-labels"></div>
													</a>
													<div class="prd-circle-labels">	<a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
														<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
														<div class="colorswatch-label colorswatch-label--variants js-prd-colorswatch">	<i class="icon-palette"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>
															<ul>
																<li data-image="images/skins/fashion/products/product-06-1.webp">
																	<a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name">
																		<img src="images/colorswatch/color-grey.html" alt="">
																	</a>
																</li>
																<li data-image="images/skins/fashion/products/product-06-color-2.webp">
																	<a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name">
																		<img src="images/colorswatch/color-green.html" alt="">
																	</a>
																</li>
																<li data-image="images/skins/fashion/products/product-06-color-3.webp">
																	<a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name">
																		<img src="images/colorswatch/color-black.html" alt="">
																	</a>
																</li>
															</ul>
														</div>
													</div>
													<ul class="list-options color-swatch">
														<li data-image="images/skins/fashion/products/product-06-1.webp" class="active">
															<a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name">
																<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-06-1.webp" class="lazyload fade-up" alt="Color Name">
															</a>
														</li>
														<li data-image="images/skins/fashion/products/product-06-2.webp">
															<a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name">
																<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-06-2.webp" class="lazyload fade-up" alt="Color Name">
															</a>
														</li>
														<li data-image="images/skins/fashion/products/product-06-3.webp">
															<a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name">
																<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-06-3.webp" class="lazyload fade-up" alt="Color Name">
															</a>
														</li>
													</ul>
												</div>
												<div class="prd-info">
													<div class="prd-info-wrap">
														<div class="prd-info-top">
															<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
															</div>
														</div>
														<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
														</div>
														<div class="prd-tag"><a href="#">Seiko</a>
														</div>
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
															<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
															</div>
															<div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
															</div>
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
										<div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
											<div class="prd-inside">
												<div class="prd-img-area">
													<a href="product.html" class="prd-img image-hover-scale image-container">
														<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-17-1.webp" alt="Stand Collar Shirt" class="js-prd-img lazyload fade-up">
														<div class="bhama-loader"></div>
														<div class="prd-big-squared-labels">
															<div class="label-sale"><span>-10% <span class="sale-text">Sale</span></span>
																<div class="countdown-circle">
																	<div class="countdown js-countdown" data-countdown="2021/07/01"></div>
																</div>
															</div>
														</div>
													</a>
													<div class="prd-circle-labels">	<a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
														<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
													</div>
													<ul class="list-options color-swatch">
														<li data-image="images/skins/fashion/products/product-17-1.webp" class="active">
															<a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name">
																<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-17-1.webp" class="lazyload fade-up" alt="Color Name">
															</a>
														</li>
														<li data-image="images/skins/fashion/products/product-17-2.webp">
															<a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name">
																<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-17-2.webp" class="lazyload fade-up" alt="Color Name">
															</a>
														</li>
														<li data-image="images/skins/fashion/products/product-17-3.webp">
															<a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name">
																<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-17-3.webp" class="lazyload fade-up" alt="Color Name">
															</a>
														</li>
													</ul>
												</div>
												<div class="prd-info">
													<div class="prd-info-wrap">
														<div class="prd-info-top">
															<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
															</div>
														</div>
														<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
														</div>
														<div class="prd-tag"><a href="#">bhama</a>
														</div>
														<h2 class="prd-title"><a href="product.html">Stand Collar Shirt</a></h2>
														<div class="prd-description">Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.</div>
														<div class="prd-action">
															<form action="#">
																<button class="btn js-prd-addtocart" data-product='{"name": "Stand Collar Shirt", "path":"images/skins/fashion/products/product-17-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
															</form>
														</div>
													</div>
													<div class="prd-hovers">
														<div class="prd-circle-labels">
															<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
															</div>
															<div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
															</div>
														</div>
														<div class="prd-price">
															<div class="price-old">$ 200</div>
															<div class="price-new">$ 180</div>
														</div>
														<div class="prd-action">
															<div class="prd-action-left">
																<form action="#">
																	<button class="btn js-prd-addtocart" data-product='{"name": "Stand Collar Shirt", "path":"images/skins/fashion/products/product-17-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
											<div class="prd-inside">
												<div class="prd-img-area">
													<a href="product.html" class="prd-img image-hover-scale image-container">
														<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-21-1.webp" alt="Genuine Leather" class="js-prd-img lazyload fade-up">
														<div class="bhama-loader"></div>
														<div class="prd-big-squared-labels">
															<div class="label-new"><span>New</span>
															</div>
														</div>
													</a>
													<div class="prd-circle-labels">	<a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
														<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
													</div>
													<ul class="list-options color-swatch">
														<li data-image="images/skins/fashion/products/product-21-1.webp" class="active">
															<a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name">
																<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-21-1.webp" class="lazyload fade-up" alt="Color Name">
															</a>
														</li>
														<li data-image="images/skins/fashion/products/product-21-2.webp">
															<a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name">
																<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-21-2.webp" class="lazyload fade-up" alt="Color Name">
															</a>
														</li>
														<li data-image="images/skins/fashion/products/product-21-3.webp">
															<a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name">
																<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-21-3.webp" class="lazyload fade-up" alt="Color Name">
															</a>
														</li>
													</ul>
												</div>
												<div class="prd-info">
													<div class="prd-info-wrap">
														<div class="prd-info-top">
															<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
															</div>
														</div>
														<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
														</div>
														<div class="prd-tag"><a href="#">bhama</a>
														</div>
														<h2 class="prd-title"><a href="product.html">Genuine Leather</a></h2>
														<div class="prd-description">Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.</div>
														<div class="prd-action">
															<form action="#">
																<button class="btn js-prd-addtocart" data-product='{"name": "Genuine Leather", "path":"images/skins/fashion/products/product-21-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
															</form>
														</div>
													</div>
													<div class="prd-hovers">
														<div class="prd-circle-labels">
															<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
															</div>
															<div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
															</div>
														</div>
														<div class="prd-price">
															<div class="price-new">$ 180</div>
														</div>
														<div class="prd-action">
															<div class="prd-action-left">
																<form action="#">
																	<button class="btn js-prd-addtocart" data-product='{"name": "Genuine Leather", "path":"images/skins/fashion/products/product-21-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
											<div class="prd-inside">
												<div class="prd-img-area">
													<a href="product.html" class="prd-img image-hover-scale image-container">
														<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-26-1.webp" alt="Pureboost Shoes" class="js-prd-img lazyload fade-up">
														<div class="bhama-loader"></div>
														<div class="prd-big-squared-labels"></div>
													</a>
													<div class="prd-circle-labels">	<a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
														<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
													</div>
													<ul class="list-options color-swatch">
														<li data-image="images/skins/fashion/products/product-26-1.webp" class="active">
															<a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name">
																<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-26-1.webp" class="lazyload fade-up" alt="Color Name">
															</a>
														</li>
														<li data-image="images/skins/fashion/products/product-26-2.webp">
															<a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name">
																<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-26-2.webp" class="lazyload fade-up" alt="Color Name">
															</a>
														</li>
														<li data-image="images/skins/fashion/products/product-26-3.webp">
															<a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name">
																<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-26-3.webp" class="lazyload fade-up" alt="Color Name">
															</a>
														</li>
													</ul>
												</div>
												<div class="prd-info">
													<div class="prd-info-wrap">
														<div class="prd-info-top">
															<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
															</div>
														</div>
														<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
														</div>
														<div class="prd-tag"><a href="#">bhama</a>
														</div>
														<h2 class="prd-title"><a href="product.html">Pureboost Shoes</a></h2>
														<div class="prd-description">Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.</div>
														<div class="prd-action">
															<form action="#">
																<button class="btn js-prd-addtocart" data-product='{"name": "Pureboost Shoes", "path":"images/skins/fashion/products/product-26-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
															</form>
														</div>
													</div>
													<div class="prd-hovers">
														<div class="prd-circle-labels">
															<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
															</div>
															<div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
															</div>
														</div>
														<div class="prd-price">
															<div class="price-new">$ 180</div>
														</div>
														<div class="prd-action">
															<div class="prd-action-left">
																<form action="#">
																	<button class="btn js-prd-addtocart" data-product='{"name": "Pureboost Shoes", "path":"images/skins/fashion/products/product-26-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
											<div class="prd-inside">
												<div class="prd-img-area">
													<a href="product.html" class="prd-img image-hover-scale image-container">
														<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-30-1.webp" alt="Multiple Pocket" class="js-prd-img lazyload fade-up">
														<div class="bhama-loader"></div>
														<div class="prd-big-squared-labels"></div>
													</a>
													<div class="prd-circle-labels">	<a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
														<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
													</div>
													<ul class="list-options color-swatch">
														<li data-image="images/skins/fashion/products/product-30-1.webp" class="active">
															<a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name">
																<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-30-1.webp" class="lazyload fade-up" alt="Color Name">
															</a>
														</li>
														<li data-image="images/skins/fashion/products/product-30-2.webp">
															<a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name">
																<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-30-2.webp" class="lazyload fade-up" alt="Color Name">
															</a>
														</li>
														<li data-image="images/skins/fashion/products/product-30-3.webp">
															<a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name">
																<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-30-3.webp" class="lazyload fade-up" alt="Color Name">
															</a>
														</li>
													</ul>
												</div>
												<div class="prd-info">
													<div class="prd-info-wrap">
														<div class="prd-info-top">
															<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
															</div>
														</div>
														<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
														</div>
														<div class="prd-tag"><a href="#">bhama</a>
														</div>
														<h2 class="prd-title"><a href="product.html">Multiple Pocket</a></h2>
														<div class="prd-description">Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.</div>
														<div class="prd-action">
															<form action="#">
																<button class="btn js-prd-addtocart" data-product='{"name": "Multiple Pocket", "path":"images/skins/fashion/products/product-30-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
															</form>
														</div>
													</div>
													<div class="prd-hovers">
														<div class="prd-circle-labels">
															<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
															</div>
															<div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
															</div>
														</div>
														<div class="prd-price">
															<div class="price-new">$ 180</div>
														</div>
														<div class="prd-action">
															<div class="prd-action-left">
																<form action="#">
																	<button class="btn js-prd-addtocart" data-product='{"name": "Multiple Pocket", "path":"images/skins/fashion/products/product-30-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
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
							<div class="text-right">
								<button class="btn btn--grey"><span>UPDATE CART</span><i class="icon-refresh"></i>
								</button>
							</div>
							<div class="row d-flex">
								<div class="col card-total-txt">Total</div>
								<div class="col-auto card-total-price text-right">$</div>
							</div>
							<button class="btn btn--full btn--lg"><span>Checkout</span>
							</button>
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
								</h4>
								</div>
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
											<input type="text" class="form-control form-control--sm">
										</div>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-heading active">
									<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#productAccordion" href="#collapse2">Discount Code</a>
									<span class="toggle-arrow"><span></span><span></span></span>
								</h4>
								</div>
								<div id="collapse2" class="panel-collapse collapse show">
									<div class="panel-body">
										<p>Got a promo code? Then you're a few randomly combined numbers & letters away from fab savings!</p>
										<div class="form-inline mt-2">
											<input type="text" class="form-control form-control--sm" placeholder="Promotion/Discount Code">
											<button type="submit" class="btn">Apply</button>
										</div>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-heading active">
									<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#productAccordion" href="#collapse3">Note for the seller</a>
									<span class="toggle-arrow"><span></span><span></span></span>
								</h4>
								</div>
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
@endsection


