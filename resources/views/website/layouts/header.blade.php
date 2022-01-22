@php
$menmegamenu = Helper::getMenMegaMenu();
$womenmegamenu = Helper::getWomenMegaMenu();
$categories = Helper::getCategory();

@endphp
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
								$user_id = Auth::user();
								
								if(!empty($user_id))
								   $totalwishlist=App\Wishlist::where(['status'=>1,'user_id'=>$user_id->id])->count();
								else
								    $totalwishlist=0;
								
								
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
							<a href="{{route('index')}}" class="logo"><img srcset="{{asset('website_assets/images/skins/fashion/logo.webp')}}" alt="Logo"></a>
						</div>
						<div class="hdr-nav hide-mobile nav-holder justify-content-center px-4">
							<ul class="mmenu mmenu-js">
								<li class="mmenu-item--simple"><a href="#" class="active">Home</a>
								</li>
								<li class="mmenu-item--mega"><a href="category.html">Bhama Couture</a>
									<div class="mmenu-submenu mmenu-submenu--has-bottom">
										<div class="mmenu-submenu-inside">
											<div class="container">
												<div class="mmenu-left width-25">
													<div class="mmenu-bnr-wrap">
														<a href="#" class="image-hover-scale"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="{{asset('website_assets/images/menu/mmenu-bnr-01.webp')}}" class="lazyload fade-up" alt=""></a>
													</div>
													<h3 class="submenu-title"><a href="category.html">Pre-Collection<br>Spring-Summer 2021</a></h3>
												</div>
												<div class="mmenu-cols column-4">
													<div class="mmenu-col">
														<ul class="submenu-list">
															<li><a href="category.html"><span class="submenu-link-txt">Dresses</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Jackets</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Kurta</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Kurta Sets</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Lehenga Choli</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Mask</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Palazzo</span></a></li>
															
														</ul>
													</div>
													<div class="mmenu-col">
														<ul class="submenu-list">
															<li><a href="category.html"><span class="submenu-link-txt">Shirt</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Shrugs</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Tops</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Top</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Trousers</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">T-Shirts</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Tunics</span></a></li>
														</ul>
													</div>
													<div class="mmenu-bottom justify-content-center"> <a href="#"><i class="icon-fox icon--lg"></i><b>bhamashop News</b><i class="icon-arrow-right"></i></a> </div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="mmenu-item--mega"><a href="category.html">Bittu By Bhama</a>
									<div class="mmenu-submenu mmenu-submenu--has-bottom">
										<div class="mmenu-submenu-inside">
											<div class="container">
												<div class="mmenu-left width-25">
													<div class="mmenu-bnr-wrap">
														<a href="#" class="image-hover-scale"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="{{asset('website_assets/images/menu/mmenu-bnr-01.webp')}}" class="lazyload fade-up" alt=""></a>
													</div>
													<h3 class="submenu-title"><a href="category.html">Pre-Collection<br>Spring-Summer 2021</a></h3> </div>
												<div class="mmenu-cols column-4">
													@foreach($menmegamenu as $m)
													<div class="mmenu-col">
														<h3 class="submenu-title"><a href="category.html">{{$m->name}}</a></h3>
														<ul class="submenu-list">
															@php 
																$submenu=App\MegaMenues::where('parent_id',$m->id)->get();
															@endphp
                                                            @foreach($submenu as $s)
															<li><a href="category.html"><span class="submenu-link-txt">{{$s->name}}</span></a></li>
															@endforeach
														</ul>
													</div>

												@endforeach
													<div class="mmenu-bottom justify-content-center"> <a href="#"><i class="icon-fox icon--lg"></i><b>bhamashop News</b><i class="icon-arrow-right"></i></a> </div>
												</div>
												
											</div>
										</div>
									</div>
								</li>
								<li class="mmenu-item--mega"><a href="category.html">Bitiya By Bhama</a>
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
														<ul class="submenu-list">
															<li><a href="category.html"><span class="submenu-link-txt">Clothing Set</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Dresses</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Frock</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Jackets</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Jumpsuit</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Saree</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Saree Blouse</span></a></li>
															
														</ul>
													</div>
												</div>
												
												<div class="mmenu-cols column-4">
													<div class="mmenu-col">
														<ul class="submenu-list">
															<li><a href="category.html"><span class="submenu-link-txt">Lehenga Choli</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Shorts</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Kurta</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Kurta Sets</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Lehenga Choli</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Skirts</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Tops</span></a></li>
															
														</ul>
													</div>
												</div>
												<div class="mmenu-cols column-4">
													
												@foreach($womenmegamenu as $m)
													<div class="mmenu-col">
														<h3 class="submenu-title"><a href="category.html">{{$m->name}}</a></h3>
														<ul class="submenu-list">
															@php 
																$submenu=App\WomenMegaMenu::where('parent_id',$m->id)->get();
															@endphp
                                                            @foreach($submenu as $s)
															<li><a href="category.html"><span class="submenu-link-txt">{{$s->name}}</span></a></li>
															@endforeach
														</ul>
													</div>

												@endforeach
													
													<div class="mmenu-bottom justify-content-center"> <a href="#"><i class="icon-fox icon--lg"></i><b>Bhamashop News</b><i class="icon-arrow-right"></i></a> </div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="mmenu-item--mega"><a href="category.html">Love More</a>
									<div class="mmenu-submenu mmenu-submenu--has-bottom">
										<div class="mmenu-submenu-inside">
											<div class="container">
												<div class="mmenu-left width-25">
													<div class="mmenu-bnr-wrap">
														<a href="#" class="image-hover-scale"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="{{asset('website_assets/images/menu/mmenu-bnr-01.webp')}}" class="lazyload fade-up" alt=""></a>
													</div>
													<h3 class="submenu-title"><a href="category.html">Pre-Collection<br>Spring-Summer 2021</a></h3>
												</div>
												<div class="mmenu-cols column-4">
													<div class="mmenu-col">
														<ul class="submenu-list">
															<li><a href="category.html"><span class="submenu-link-txt">Dresses</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Kurta</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Kurta Sets</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Shirt</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Tops</span></a></li>
															
														</ul>
													</div>
													<div class="mmenu-bottom justify-content-center"> <a href="#"><i class="icon-fox icon--lg"></i><b>bhamashop News</b><i class="icon-arrow-right"></i></a> </div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="mmenu-item--mega"><a href="category.html">Baawara By Bhama</a>
									<div class="mmenu-submenu mmenu-submenu--has-bottom">
										<div class="mmenu-submenu-inside">
											<div class="container">
												<div class="mmenu-left width-25">
													<div class="mmenu-bnr-wrap">
														<a href="#" class="image-hover-scale"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="{{asset('website_assets/images/menu/mmenu-bnr-01.webp')}}" class="lazyload fade-up" alt=""></a>
													</div>
													<h3 class="submenu-title"><a href="category.html">Pre-Collection<br>Spring-Summer 2021</a></h3>
												</div>
												<div class="mmenu-cols column-4">
													<div class="mmenu-col">
														<ul class="submenu-list">
															<li><a href="category.html"><span class="submenu-link-txt">Jeans</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Kurta</span></a></li>
															<li><a href="category.html"><span class="submenu-link-txt">Kurta Sets</span></a></li>
															
														</ul>
													</div>
													<div class="mmenu-bottom justify-content-center"> <a href="#"><i class="icon-fox icon--lg"></i><b>bhamashop News</b><i class="icon-arrow-right"></i></a> </div>
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
		console.log(data.cartData1);
		jQuery(".update_cart").html(data.cartData);
		$('.minicart-total').html(data.price);
		$('.minicart-qty').html(data.count);
		location.reload();
		$("#message").text(data.message).css("color", "red").delay(5000).fadeOut();;

	}
	});
}
</script>