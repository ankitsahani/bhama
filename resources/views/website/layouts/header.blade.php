<div class="hdr-content hdr-content-sticky">
			<div class="container">
				<div class="row">
					<div class="col-auto show-mobile">
						<div class="menu-toggle"> <a href="#" class="mobilemenu-toggle"><i class="icon-menu"></i></a> </div>
					</div>
					<div class="col-auto hdr-logo">
						<a href="{{route('index')}}" class="logo"><img srcset="{{asset('website_assets/images/skins/fashion/logo.webp')}}" alt="Logo"></a>
					</div>
					<div class="hdr-nav hide-mobile nav-holder-s"> </div>
					<div class="hdr-links-wrap col-auto ml-auto">
						<div class="hdr-inline-link">
							<div class="search_container_desktop">
								<div class="dropdn dropdn_search dropdn_fullwidth"> <a href="#" class="dropdn-link  js-dropdn-link only-icon"><i class="icon-search"></i><span class="dropdn-link-txt">Search</span></a>
									<div class="dropdn-content">
										<div class="container">
											<form method="get" action="#" class="search search-off-popular">
												<input name="search" type="text" class="search-input input-empty" placeholder="What are you looking for?">
												<button type="submit" class="search-button"><i class="icon-search"></i></button> <a href="#" class="search-close js-dropdn-close"><i class="icon-close-thin"></i></a> </form>
										</div>
									</div>
								</div>
							</div>
							<div class="dropdn dropdn_wishlist">
								@php 
								$totalwishlist=App\Wishlist::where('status',1)->count();
								@endphp
								<a href="{{route('wishlist')}}" class="dropdn-link only-icon wishlist-link "> <i class="icon-heart"></i><span class="dropdn-link-txt">Wishlist</span><span class="wishlist-qty">{{$totalwishlist}}</span> </a>
							</div>
							<div class="dropdn dropdn_account dropdn_fullheight"> <a href="#" class="dropdn-link js-dropdn-link js-dropdn-link only-icon" data-panel="#dropdnAccount"><i class="icon-user"></i><span class="dropdn-link-txt">Account</span></a> </div>
							<div class="dropdn dropdn_fullheight minicart">
								<a href="#" class="dropdn-link js-dropdn-link minicart-link only-icon" data-panel="#dropdnMinicart"> <i class="icon-basket"></i> <span class="minicart-qty">{{\Cart::count()}}</span> <span class="minicart-total hide-mobile">₹{{\Cart::priceTotal()}}</span> </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="hdr">
			<div class="hdr-topline hdr-topline--dark js-hdr-top">
				<div class="container">
					<div class="row flex-nowrap">
						<div class="col hdr-topline-left hide-mobile">
							<div class="hdr-line-separate">
								<ul class="social-list list-unstyled">
									<li> <a href="#"><i class="icon-facebook"></i></a> </li>
									<li> <a href="#"><i class="icon-twitter"></i></a> </li>
									<li> <a href="#"><i class="icon-google"></i></a> </li>
									<li> <a href="#"><i class="icon-instagram"></i></a> </li>
									<li> <a href="#"><i class="icon-vimeo"></i></a> </li>
									<li> <a href="#"><i class="icon-linkedin"></i></a> </li>
								</ul>
							</div>
						</div>
						<div class="col hdr-topline-center">
							<div class="custom-text js-custom-text-carousel" data-slick='{"speed": 1000, "autoplaySpeed": 3000}'>
								<div class="custom-text-item"><i class="icon-fox"></i> Use promocode <span>BHAMA</span> to get 15% discount!</div>
								<div class="custom-text-item"><i class="icon-air-freight"></i> <span>Free</span> plane shipping over <span>₹250</span></div>
								<div class="custom-text-item"><i class="icon-gift"></i> Today only! Post <span>holiday</span> Flash Sale! 2 for ₹20</div>
							</div>
						</div>
						<div class="col hdr-topline-right hide-mobile">
							<div class="hdr-inline-link">
								<div class="dropdn_language">
									<div class="dropdn dropdn_language dropdn_language--noimg dropdn_caret"> <a href="#" class="dropdn-link js-dropdn-link"><span class="js-dropdn-select-current">Phone</span><i class="icon-angle-down"></i></a>
										<div class="dropdn-content">
											<a href="#"><img src="images/flags/en.html" alt="">+91 997654326</a>
										</div>
									</div>
								</div>
							
								<div class="hdr_container_desktop">
									<div class="dropdn dropdn_account dropdn_fullheight"> <a href="#" class="dropdn-link js-dropdn-link" data-panel="#dropdnAccount"><i class="icon-user"></i><span class="dropdn-link-txt">Account</span></a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hdr-content">
				<div class="container">
					<div class="row">
						<div class="col-auto show-mobile">
							<div class="menu-toggle"> <a href="#" class="mobilemenu-toggle"><i class="icon-menu"></i></a> </div>
						</div>
						<div class="col-auto hdr-logo">
							<a href="index.html" class="logo"><img srcset="{{asset('website_assets/images/skins/fashion/logo.webp')}}" alt="Logo"></a>
						</div>
						<div class="hdr-nav hide-mobile nav-holder justify-content-center px-4">
							<ul class="mmenu mmenu-js">
								<li class="mmenu-item--simple"><a href="#" class="active">Home</a>
									
								</li>
								<li class="mmenu-item--simple"><a href="#">New Arrivals</a>
									<div class="mmenu-submenu">
										<ul class="submenu-list">
											<li><a href="{{route('product.listing')}}">Product page</a>
												<ul> </ul>
											</li>
											<li><a href="category.html">Category page</a>
												<ul>
													<li><a href="category.html">Left sidebar filters</a></li>
													<li><a href="category-closed-filter.html">Closed filters</a></li>
													<li><a href="category-horizontal-filter.html">Horizontal filters</a></li>
													<li><a href="category-listview.html">Listing View</a></li>
													<li><a href="category-empty.html">Empty category</a></li>
												</ul>
											</li>
											<li><a href="cart.html">Cart & Checkout</a>
												<ul>
													<li><a href="{{route('cart')}}">Cart Page</a></li>
													<li><a href="cart-empty.html">Empty cart</a></li>
													<li><a href="checkout.html">Checkout variant 1</a></li>
													<li><a href="checkout-2.html">Checkout variant 2</a></li>
													<li><a href="checkout-3.html">Checkout variant 3</a></li>
												</ul>
											</li>
											<li><a href="account-create.html">Account</a>
												<ul>
													<li><a href="{{route('user-login')}}">Login</a></li>
													<li><a href="{{route('user-register')}}">Create account</a></li>
													<li><a href="account-details.html">Account details</a></li>
													<li><a href="account-addresses.html">Account addresses</a></li>
													<li><a href="account-history.html">Order History</a></li>
													<li><a href="account-wishlist.html">Wishlist</a></li>
												</ul>
											</li>
											<li><a href="blog.html">Blog</a>
												<ul>
													<li><a href="blog.html">Right sidebar</a></li>
													<li><a href="blog-left-sidebar.html">Left sidebar</a></li>
													<li><a href="blog-without-sidebar.html">No sidebar</a></li>
													<li><a href="blog-sticky-sidebar.html">Sticky sidebar</a></li>
													<li><a href="blog-grid.html">Grid</a></li>
													<li><a href="blog-post.html">Blog post</a></li>
												</ul>
											</li>
											<li><a href="gallery.html">Gallery</a></li>
											<li><a href="faq.html">Faq</a></li>
											<li><a href="{{route('about.us')}}">About Us</a></li>
											<li><a href="{{route('contact.us')}}">Contact Us</a></li>
											<li><a href="404.html">404 Page</a></li>
											<li><a href="typography.html">Typography</a></li>
											<li><a href="coming-soon.html" target="_blank">Coming soon</a></li>
										</ul>
									</div>
								</li>
								<li><a href="category.html">Accessories<span class="menu-label">SALE</span></a></li>
								<li class="mmenu-item--mega"><a href="category.html">Men</a>
									<div class="mmenu-submenu mmenu-submenu--has-bottom">
										<div class="mmenu-submenu-inside">
											<div class="container">
												<div class="mmenu-left width-25">
													<div class="mmenu-bnr-wrap">
														<a href="#" class="image-hover-scale"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="{{asset('website_assets/images/menu/mmenu-bnr-01.webp')}}" class="lazyload fade-up" alt=""></a>
													</div>
													<h3 class="submenu-title"><a href="category.html">Pre-Collection<br>Spring-Summer 2021</a></h3> </div>
												<div class="mmenu-cols column-4">
													<div class="mmenu-col">
														<h3 class="submenu-title"><a href="category.html">Collections</a></h3>
														<ul class="submenu-list">
															<li><a href="category.html">Martins d'Art 2020/21<span class="submenu-link-txt">Available in boutiques from June 2019</span></a></li>
															<li><a href="category.html">Spring-Summer 2021<span class="submenu-link-txt">Available in boutiques from March 2019</span></a></li>
															<li><a href="category.html">Spring-Summer 2021 Pre-Collection<span class="submenu-link-txt">In boutiques</span></a></li>
															<li><a href="category.html">Cruise 2020/21<span class="submenu-link-txt">In boutiques</span></a></li>
															<li><a href="category.html">Fall-Winter 2020/21</a></li>
														</ul>
													</div>

													<div class="mmenu-col">
														<h3 class="submenu-title"><a href="category.html">Ready-to-wear</a></h3>
														<ul class="submenu-list">
															<li><a href="category.html" class="active">Jackets</a>
																<ul class="sub-level">
																	<li><a href="category.html">Bomber Jackets</a></li>
																	<li><a href="category.html">Biker Jacket</a></li>
																	<li><a href="category.html">Trucker Jacket</a></li>
																	<li><a href="category.html">Denim Jackets</a></li>
																	<li><a href="category.html">Blouson Jacket<span class="menu-label">SALE</span></a></li>
																	<li><a href="category.html">Overcoat</a></li>
																	<li><a href="category.html">Trench Coat</a></li>
																</ul>
															</li>
															<li><a href="category.html">Dresses<span class="menu-label menu-label--color3">SALE</span></a></li>
															<li><a href="category.html">Blouses & Tops</a></li>
															<li><a href="category.html">Cardigans & Pullovers</a></li>
															<li><a href="category.html">Skirts</a></li>
															<li><a href="category.html">Pants & Shorts</a></li>
															<li><a href="category.html">Outerwear</a></li>
															<li><a href="category.html">Swimwear</a></li>
														</ul>
													</div>
													<div class="mmenu-col">
														<h3 class="submenu-title"><a href="category.html">Accessories</a></h3>
														<ul class="submenu-list">
															<li><a href="category.html">Jackets</a></li>
															<li><a href="category.html">Dresses</a></li>
															<li><a href="category.html">Blouses & Tops</a></li>
															<li><a href="category.html">Cardigans & Pullovers</a></li>
															<li><a href="category.html">Skirts<span class="menu-label">SALE</span></a></li>
															<li><a href="category.html">Pants & Shorts</a></li>
															<li><a href="category.html">Outerwear</a></li>
														</ul>
													</div>
													<div class="mmenu-col">
														<h3 class="submenu-title"><a href="category.html">Brands</a></h3>
														<ul class="submenu-list">
															<li><a href="category.html">Jackets</a></li>
															<li><a href="category.html">Dresses</a></li>
															<li><a href="category.html">Blouses & Tops</a></li>
															<li><a href="category.html">Cardigans & Pullovers</a></li>
															<li><a href="category.html">Skirts<span class="menu-label menu-label--color1">SALE</span></a></li>
															<li><a href="category.html">Pants & Shorts</a></li>
															<li><a href="category.html">Outerwear</a></li>
														</ul>
													</div>
													<div class="mmenu-bottom justify-content-center"> <a href="#"><i class="icon-fox icon--lg"></i><b>bhamashop News</b><i class="icon-arrow-right"></i></a> </div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="mmenu-item--mega"><a href="category.html">Women</a>
									<div class="mmenu-submenu mmenu-submenu--has-bottom">
										<div class="mmenu-submenu-inside">
											<div class="container">
												<div class="mmenu-right width-25">
													<div class="mmenu-bnr-wrap">
														<a href="#" class="image-hover-scale"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="images/menu/mmenu-bnr-02.webp" class="lazyload fade-up" alt=""></a>
													</div>
													<h3 class="submenu-title"><a href="category.html">Pre-Collection<br>Spring-Summer 2021</a></h3> </div>
												<div class="mmenu-cols column-4">
													<div class="mmenu-col">
														<h3 class="submenu-title"><a href="category.html">Collections</a></h3>
														<ul class="submenu-list">
															<li><a href="category.html">Martins d'Art 2020/21<span class="submenu-link-txt">Available in boutiques from June 2019</span></a></li>
															<li><a href="category.html">Spring-Summer 2021<span class="submenu-link-txt">Available in boutiques from March 2019</span></a></li>
															<li><a href="category.html">Spring-Summer 2021 Pre-Collection<span class="submenu-link-txt">In boutiques</span></a></li>
															<li><a href="category.html">Cruise 2020/21<span class="submenu-link-txt">In boutiques</span></a></li>
															<li><a href="category.html">Fall-Winter 2020/21</a></li>
														</ul>
													</div>
													<div class="mmenu-col">
														<h3 class="submenu-title"><a href="category.html">Ready-to-wear</a></h3>
														<ul class="submenu-list">
															<li><a href="category.html">Jackets</a></li>
															<li><a href="category.html">Dresses<span class="menu-label menu-label--color3">SALE</span></a></li>
															<li><a href="category.html">Blouses & Tops</a>
																<ul>
																	<li><a href="category.html">Jackets</a></li>
																	<li><a href="category.html">Dresses<span class="menu-label menu-label--color3">SALE</span></a></li>
																	<li><a href="category.html">Blouses & Tops</a>
																		<ul>
																			<li><a href="category.html">Jackets</a></li>
																			<li><a href="category.html">Dresses<span class="menu-label menu-label--color3">SALE</span></a>
																				<ul>
																					<li><a href="category.html">Jackets</a></li>
																					<li><a href="category.html">Dresses<span class="menu-label menu-label--color3">SALE</span></a>
																						<ul>
																							<li><a href="category.html">Jackets</a></li>
																							<li><a href="category.html">Dresses<span class="menu-label menu-label--color3">SALE</span></a></li>
																							<li><a href="category.html">Blouses & Tops</a></li>
																							<li><a href="category.html">Cardigans & Pullovers</a></li>
																							<li><a href="category.html">Skirts</a></li>
																							<li><a href="category.html">Pants & Shorts</a></li>
																							<li><a href="category.html">Outerwear</a></li>
																							<li><a href="category.html">Swimwear</a></li>
																						</ul>
																					</li>
																					<li><a href="category.html">Blouses & Tops</a></li>
																					<li><a href="category.html">Cardigans & Pullovers</a></li>
																					<li><a href="category.html">Skirts</a></li>
																					<li><a href="category.html">Pants & Shorts</a></li>
																					<li><a href="category.html">Outerwear</a></li>
																					<li><a href="category.html">Swimwear</a></li>
																				</ul>
																			</li>
																			<li><a href="category.html">Blouses & Tops</a></li>
																			<li><a href="category.html">Cardigans & Pullovers</a></li>
																			<li><a href="category.html">Skirts</a></li>
																			<li><a href="category.html">Pants & Shorts</a></li>
																			<li><a href="category.html">Outerwear</a></li>
																			<li><a href="category.html">Swimwear</a></li>
																		</ul>
																	</li>
																	<li><a href="category.html">Cardigans & Pullovers</a></li>
																	<li><a href="category.html">Skirts</a></li>
																	<li><a href="category.html">Pants & Shorts</a></li>
																	<li><a href="category.html">Outerwear</a></li>
																	<li><a href="category.html">Swimwear</a></li>
																</ul>
															</li>
															<li><a href="category.html">Cardigans & Pullovers</a></li>
															<li><a href="category.html">Skirts</a></li>
															<li><a href="category.html">Pants & Shorts</a></li>
															<li><a href="category.html">Outerwear</a></li>
															<li><a href="category.html">Swimwear</a></li>
														</ul>
													</div>
													<div class="mmenu-col">
														<h3 class="submenu-title"><a href="category.html">Accessories</a></h3>
														<ul class="submenu-list">
															<li><a href="category.html">Jackets</a></li>
															<li><a href="category.html">Dresses</a></li>
															<li><a href="category.html">Blouses & Tops</a></li>
															<li><a href="category.html">Cardigans & Pullovers</a></li>
															<li><a href="category.html">Skirts<span class="menu-label">SALE</span></a></li>
															<li><a href="category.html">Pants & Shorts</a></li>
															<li><a href="category.html">Outerwear</a></li>
														</ul>
													</div>
													<div class="mmenu-col">
														<h3 class="submenu-title"><a href="category.html">Brands</a></h3>
														<ul class="submenu-list">
															<li><a href="category.html">Jackets</a></li>
															<li><a href="category.html">Dresses</a></li>
															<li><a href="category.html">Blouses & Tops</a></li>
															<li><a href="category.html">Cardigans & Pullovers</a></li>
															<li><a href="category.html">Skirts<span class="menu-label menu-label--color1">SALE</span></a></li>
															<li><a href="category.html">Pants & Shorts</a></li>
															<li><a href="category.html">Outerwear</a></li>
														</ul>
													</div>
													<div class="mmenu-bottom justify-content-center"> <a href="#"><i class="icon-fox icon--lg"></i><b>Bhamashop News</b><i class="icon-arrow-right"></i></a> </div>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="hdr-links-wrap col-auto ml-auto">
							<div class="hdr-inline-link">
								<div class="search_container_desktop">
									<div class="dropdn dropdn_search dropdn_fullwidth"> <a href="#" class="dropdn-link  js-dropdn-link only-icon"><i class="icon-search"></i><span class="dropdn-link-txt">Search</span></a>
										<div class="dropdn-content">
											<div class="container">
												<form method="get" action="#" class="search search-off-popular">
													<input name="search" type="text" class="search-input input-empty" placeholder="What are you looking for?">
													<button type="submit" class="search-button"><i class="icon-search"></i></button> <a href="#" class="search-close js-dropdn-close"><i class="icon-close-thin"></i></a> </form>
											</div>
										</div>
									</div>
								</div>
								<div class="dropdn dropdn_wishlist">
									<a href="{{route('wishlist')}}" class="dropdn-link only-icon wishlist-link "> <i class="icon-heart"></i><span class="dropdn-link-txt">Wishlist</span><span class="wishlist-qty">{{$totalwishlist}} </span> </a>
								</div>
								<div class="hdr_container_mobile show-mobile">
									<div class="dropdn dropdn_account dropdn_fullheight"> <a href="#" class="dropdn-link js-dropdn-link" data-panel="#dropdnAccount"><i class="icon-user"></i><span class="dropdn-link-txt">Account</span></a> </div>
								</div>
								<div class="dropdn dropdn_fullheight minicart">
									<a href="#" class="dropdn-link js-dropdn-link minicart-link" data-panel="#dropdnMinicart"> <i class="icon-basket"></i> <span class="minicart-qty">{{\Cart::count()}}</span> <span class="minicart-total hide-mobile">₹{{\Cart::priceTotal()}}</span> </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>