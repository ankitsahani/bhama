@extends('website.layouts.master')
@section('page_content')
<div class="page-content">
	<div class="holder breadcrumbs-wrap mt-0">
		<div class="container">
			<ul class="breadcrumbs">
				<li><a href="{{route('index')}}">Home</a></li>
				<li><a href="{{route('categories')}}">Women</a></li>
				<li><span>Leather Pegged Pants</span></li>
			</ul>
		</div>
	</div>
	<div class="holder">
		<div class="container js-prd-gallery" id="prdGallery">
			<div class="row prd-block prd-block-under prd-block--prv-bottom">
				<div class="col-md-auto prd-block-prevnext-wrap">
					<div class="prd-block-prevnext"> <a href="#"><span class="prd-img"><img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-02-1.webp" alt=""><i class="icon-arrow-left"></i></span></a> <a href="#"><span class="prd-img"><img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-01-1.webp" alt=""></span></a> <a href="#"><span class="prd-img"><img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-15-1.webp" alt=""><i class="icon-arrow-right"></i></span></a> </div>
				</div>
			</div>
			<div class="row prd-block prd-block--prv-bottom">
				<div class="col-md-10 col-lg-10 col-xl-10 aside--sticky js-sticky-collision">
					<div class="aside-content">
						<div class="mb-2 js-prd-m-holder"></div>
						<div class="prd-block_main-image">
							<div class="prd-block_main-image-holder" id="prdMainImage">
								<div class="product-main-carousel js-product-main-carousel" data-zoom-position="inner">
                                    @foreach($productAltimages as $image)
									<div data-value="Beige"><span class="prd-img"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('images/backend_img/products/large/'.$image->image)}}" class="lazyload fade-up elzoom" alt="" data-zoom-image="{{asset('images/backend_img/products/large/'.$image->image)}}"/></span></div>
                                    @endforeach
                                </div>
								<div class="prd-block_label-sale-squared justify-content-center align-items-center"><span>Sale</span></div>
							</div>
							<div class="prd-block_main-image-links"> <a data-fancybox data-width="900" href="https://www.youtube.com/watch?v=Zk3kr7J_v3Q" class="prd-block_video-link"><i class="icon-video"></i></a> <a href="{{asset('images/products/product-01.html')}}" class="prd-block_zoom-link"><i class="icon-zoom-in"></i></a> </div>
						</div>
						<div class="product-previews-wrapper">
							<div class="product-previews-carousel js-product-previews-carousel">
                                @foreach($productAltimages as $image)
                                 <a href="#" data-value="Beige"><span class="prd-img"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('images/backend_img/products/small/'.$image->image)}}" class="lazyload fade-up" alt=""/></span></a>
                                @endforeach
                            </div>
						</div>
					</div>
				</div>
				<div class="col-md-10 col-lg-8 mt-1 mt-md-0">
					<div class="row prd-block prd-block-under">
						<div class="col">
							<div class="js-prd-d-holder">
								<div class="prd-block_title-wrap">
									<h1 class="prd-block_title">{{$productDetails->product_name}}</h1>
									<div class="prd-block_reviews" data-toggle="tooltip" data-placement="top" title="Scroll To Reviews"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star"></i> <span class="reviews-link"><a href="#" class="js-reviews-link"> (17 reviews)</a></span> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="prd-block_info prd-block_info--style1" data-prd-handle="/products/copy-of-suede-leather-mini-skirt">
						<div class="prd-block_info-top prd-block_info_item order-0 order-md-2">
							<div class="prd-block_price prd-block_price--style2">
								<div class="prd-block_price--actual">₹{{$productDetails->selling_price}}</div>
								<div class="prd-block_price-old-wrap"> <span class="prd-block_price--old">₹{{$productDetails->price}}</span> <span class="prd-block_price--text">You Save: ₹{{$productDetails->price-$productDetails->selling_price}} ({{number_format((float)(($productDetails->price-$productDetails->selling_price)*100)/$productDetails->price, 2, '.', '')}}%)</span> </div>
							</div>
							<div class="prd-block_viewed-wrap d-none d-md-flex">
								<div class="prd-block_viewed"> <i class="icon-time"></i> <span>This product was viewed 13 times within last hour</span> </div>
							</div>
						</div>
						<div class="prd-block_description prd-block_info_item ">
							<h3>Short description</h3>
							<p>{{strip_tags($productDetails->short_description)}}</p>
							<div class="mt-1"></div>
							
						</div>
						<div class="prd-progress prd-block_info_item" data-left-in-stock="">
							<div class="prd-progress-text"> Hurry Up! Left <span class="prd-progress-text-left js-stock-left">20</span> in stock </div>
							<div class="prd-progress-text-null"></div>
							<div class="prd-progress-bar-wrap progress">
								<div class="prd-progress-bar progress-bar active" data-stock="50, 10, 30, 25, 1000, 15000" style="width: 40%;"></div>
							</div>
						</div>
						<div class="prd-block_order-info prd-block_info_item " data-order-time="" data-locale="en"> <i class="icon-box-2"></i>
							<div>Order in the next <span class="prd-block_order-info-time countdownCircleTimer" data-time="8:00:00, 15:30:00, 23:59:59"><span><span>04</span>:</span><span><span>11</span>:</span><span><span>35</span></span>
								</span> to get it by <span data-date="">Tuesday, September 08, 2020</span></div>
						</div>
						<div class="prd-block_info_item prd-block_info-when-arrives d-none" data-when-arrives="">
							<div class="prd-block_links prd-block_links m-0 d-inline-flex"> <i class="icon-email-1"></i>
								<div><a href="#" data-follow-up="" data-name="Oversize Cotton Dress" class="prd-in-stock" data-src="#whenArrives">Inform me when the item arrives</a></div>
							</div>
						</div>
						<div class="prd-block_info-box prd-block_info_item">
							<div class="two-column">
								<p>Availability: <span class="prd-in-stock" data-stock-status="">@if($productDetails->stock>0)In stock @else Out Of Stock @endif</span></p>
								<p class="prd-taxes">Tax Info: <span>Tax included.</span> </p>
								<p>Collection: <span> <a href="collections.html" data-toggle="tooltip" data-placement="top" data-original-title="View all">Women</a></span></p>
								<p>Sku: <span data-sku="">{{$productDetails->sku}}</span></p>
							
								<p>Barcode: <span>12345678</span></p>
							</div>
						</div>
						<div class="order-0 order-md-100">
							<form method="post" action="{{ route('add.to.cart', ['id' => $productDetails->id]) }}">
								<div class="prd-block_options">
									<div class="prd-color swatches">
										<div class="option-label">Color:</div>
										<!-- <select class="form-control hidden single-option-selector-modalQuickView" id="SingleOptionSelector-0" data-index="option1">
											<option value="Beige" selected="selected">Beige</option>
											<option value="Black">Black</option>
											<option value="Red">Red</option>
										</select> -->
										<ul class="images-list js-size-list" data-select-id="SingleOptionSelector-0">
											@foreach($categoryProduct as $a)
											<li class="active"> <a href="{{url('single-product/'.$a->id)}}"><span class="image-container image-container--product"><img src="{{asset('/images/backend_img/products/large/'.$a->image)}}" alt=""></span></a> </li>
											<li> </li>
											@endforeach
											<!-- <li> <a href="#" data-value="Black" data-toggle="tooltip" data-placement="top" data-original-title="Black"><span class="image-container image-container--product"><img src="{{asset('website_assets/images/skins/fashion/product-page/product-04.html')}}" alt=""></span></a> </li>
											<li> </li>
											<li> <a href="#" data-value="Red" data-toggle="tooltip" data-placement="top" data-original-title="Red"><span class="image-container image-container--product"><img src="{{asset('website_assets/images/skins/fashion/product-page/product-07.html')}}" alt=""></span></a> </li> -->
										</ul>
									</div>
									<div class="prd-size swatches">
										<div class="option-label">Size:</div>
										<select class="form-control hidden single-option-selector-modalQuickView" name="size" id="SingleOptionSelector-1" data-index="option2">
											<option value="Small" selected="selected">Small</option>
											<option value="Medium">Medium</option>
											<option value="Large">Large</option>
										</select>
										<ul class="size-list js-size-list" data-select-id="SingleOptionSelector-1">
											<li class="active"><a href="#" data-value="Small"><span class="value">Small</span></a></li>
											<li><a href="#" data-value="Medium"><span class="value">Medium</span></a></li>
											<li><a href="#" data-value="Large"><span class="value">Large</span></a></li>
										</ul>
									</div>
									<div class="custom-copy-coupon">
										<p class="best-offers"><strong>BEST OFFERS</strong>&nbsp;&nbsp;<img src="https://cdn.shopify.com/s/files/1/1018/4207/files/noun_Coupon_1487799.jpg?v=1584788984" style="width:5%;vertical-align:middle;"></p>
										@foreach($couponDetails as $c)
										<hr style="border:1px dashed #DA3F7F;">
										<p class="best-offers pb-1">• Get {{$c->amount}}% Off All Orders</p>
										<div class="inline-coupon">
											<p class="coupon-code" id="myInput">{{$c->coupon_code}}</p>
										</div>
										@endforeach
										
										<hr style="border:1px dashed #DA3F7F;">
										<p class="best-offers"><strong>Apply the coupon during checkout.</strong></p>
									</div>
								</div>
								<div class="prd-block_actions prd-block_actions--wishlist">
									<div class="prd-block_qty">
										<div class="qty qty-changer">
											<button class="decrease js-qty-button"></button>
											<input type="number" class="qty-input" name="qty" value="1" data-min="1" data-max="1000">
											<button class="increase js-qty-button"></button>
										</div>
									</div>
									<div class="btn-wrap">
										{{csrf_field()}}
										<a onclick="return addToCart({{$productDetails->id}});" class="btn btn--add-to-cart js-trigger-addtocart js-prd-addtocart" >Add to cart</a>
									</div>
									<div class="btn-wishlist-wrap"> <a href="#" class="btn-add-to-wishlist ml-auto btn-add-to-wishlist--add js-add-wishlist" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a> <a href="#" class="btn-add-to-wishlist ml-auto btn-add-to-wishlist--off js-remove-wishlist" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a> </div>
								</div>
							</form>
							<div class="prd-block_agreement prd-block_info_item order-0 order-md-100 text-right" data-agree="">
								<input id="agreementCheckboxProductPage" class="js-agreement-checkbox" data-button=".shopify-payment-agree" name="agreementCheckboxProductPage" type="checkbox">
								<label for="agreementCheckboxProductPage"><a href="#" data-fancybox="" class="modal-info-link" data-src="#agreementInfo">I agree to the terms of service</a></label>
							</div>
						</div>
						<div class="prd-block_info_item">
							<ul class="prd-block_links list-unstyled">
								<li><i class="icon-size-guide"></i><a href="#" data-fancybox="" class="modal-info-link" data-src="#sizeGuide">Size Guide</a></li>
								<li><i class="icon-delivery-1"></i><a href="#" data-fancybox="" class="modal-info-link" data-src="#deliveryInfo">Delivery and Return</a></li>
								<li><i class="icon-email-1"></i><a href="#" data-fancybox="" class="modal-info-link" data-src="#contactModal">Ask about this product</a></li>
							</ul>
							<div id="sizeGuide" style="display: none;" class="modal-info-content modal-info-content-lg">
								<div class="modal-info-heading">
									<div class="mb-1"><i class="icon-size-guide"></i></div>
									<h2>Size Guide</h2> </div>
								<div class="table-responsive">
									<table class="table table-striped table-borderless text-center">
										<thead>
											<tr>
												<th>USA</th>
												<th>UK</th>
												<th>France</th>
												<th>Japanese</th>
												<th>Bust</th>
												<th>Waist</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>4</td>
												<td>8</td>
												<td>36</td>
												<td>7</td>
												<td>32"</td>
												<td>61 cm</td>
											</tr>
											<tr>
												<td>6</td>
												<td>10</td>
												<td>38</td>
												<td>11</td>
												<td>34"</td>
												<td>67 cm</td>
											</tr>
											<tr>
												<td>8</td>
												<td>12</td>
												<td>40</td>
												<td>15</td>
												<td>36"</td>
												<td>74 cm</td>
											</tr>
											<tr>
												<td>10</td>
												<td>14</td>
												<td>42</td>
												<td>17</td>
												<td>38"</td>
												<td>79 cm</td>
											</tr>
											<tr>
												<td>12</td>
												<td>16</td>
												<td>44</td>
												<td>21</td>
												<td>40"</td>
												<td>84 cm</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div id="deliveryInfo" style="display: none;" class="modal-info-content modal-info-content-lg">
								<div class="modal-info-heading">
									<div class="mb-1"><i class="icon-delivery-1"></i></div>
									<h2>Delivery and Return</h2> </div>
								<br>
								<h5>Our parcel courier service</h5>
								<p>bhama is proud to offer an exceptional international parcel shipping service. It is straightforward and very easy to organise international parcel shipping. Our customer service team works around the clock to make sure that you receive high quality courier service from start to finish.</p>
								<p>Sending a parcel with us is simple. To start the process you will first need to get a quote using our free online quotation service. From this, you’ll be able to navigate through the online form to book a collection date for your parcel, selecting a shipping day suitable for you.</p>
								<br>
								<h5>Shipping Time</h5>
								<p>The shipping time is based on the shipping method you chose.
									<br> EMS takes about 5-10 working days for delivery.
									<br> DHL takes about 2-5 working days for delivery.
									<br> DPEX takes about 2-8 working days for delivery.
									<br> JCEX takes about 3-7 working days for delivery.
									<br> China Post Registered Mail takes 20-40 working days for delivery.</p>
							</div>
							<div id="contactModal" style="display: none;" class="modal-info-content modal-info-content-sm">
								<div class="modal-info-heading">
									<div class="mb-1"><i class="icon-envelope"></i></div>
									<h2>Have a question?</h2> </div>
								<form method="post" action="#" id="contactForm" class="contact-form" novalidate="novalidate">
									<div class="form-group">
										<input type="text" name="contact[name]" class="form-control form-control--sm" placeholder="Name"> </div>
									<div class="form-group">
										<input type="text" name="contact[email]" class="form-control form-control--sm" placeholder="Email" required=""> </div>
									<div class="form-group">
										<input type="text" name="contact[phone]" class="form-control form-control--sm" placeholder="Phone Number"> </div>
									<div class="form-group">
										<textarea class="form-control textarea--height-170" name="contact[body]" placeholder="Message" required="">Hi! I need next info about the "Oversize Cotton Dress":</textarea>
									</div>
									<button class="btn" type="submit">Ask our consultant</button>
									<p class="p--small mt-15 mb-0">and we will contact you soon</p>
									<input name="recaptcha-v3-token" type="hidden" value="03AGdBq27T8WvzvZu79QsHn8lp5GhjNX-w3wkcpVJgCH15Ehh0tu8c9wTKj4aNXyU0OLM949jTA4cDxfznP9myOBw9m-wggkfcp1Cv_vhsi-TQ9E_EbeLl33dqRhp2sa5tKBOtDspTgwoEDODTHAz3nuvG28jE7foIFoqGWiCqdQo5iEphqtGTvY1G7XgWPAkNPnD0B9V221SYth9vMazf1mkYX3YHAj_g_6qhikdQDsgF2Sa2wOcoLKWiTBMF6L0wxdwhIoGFz3k3VptYem75sxPM4lpS8Y_UAxfvF06fywFATA0nNH0IRnd5eEPnnhJuYc5LYsV6Djg7_S4wLBmOzYnahC-S60MHvQFf-scQqqhPWOtgEKPihUYiGFBJYRn2p1bZwIIhozAgveOtTNQQi7FGqmlbKkRWCA">
								</form>
							</div>
						</div>
						<div class="prd-block_info_item"> <img class="img-responsive d-none d-sm-block lazyloaded" src="images/payment/safecheckout.webp" data-src="images/payment/safecheckout.webp" alt=""> <img class="img-responsive lazyload d-sm-none" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/payment/safecheckout-m.webp" alt=""> </div>
					</div>
					<div class="prd-block_info prd-block_info--style1">
						<div class="panel-group panel-group--style1 prd-block_accordion" id="productAccordion">
							<div class="panel">
								<div class="panel-heading active">
									<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#productAccordion" href="#collapse2">
					Description</a>
				<span class="toggle-arrow"><span></span><span></span></span>
			</h4> </div>
								<div id="collapse2" class="panel-collapse collapse show">
									{{strip_tags($productDetails->description)}}
								</div>
							</div>
							<div class="panel">
								<div class="panel-heading">
									<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#productAccordion" href="#collapse1">
					Sizing Guide</a>
				<span class="toggle-arrow"><span></span><span></span></span>
			</h4> </div>
								<div id="collapse1" class="panel-collapse collapse">
									<div class="panel-body">
										<table class="table table-striped">
											<tr>
												<th scope="row">US Sizes</th>
												<td>6</td>
												<td>6,5</td>
												<td>7</td>
												<td>7,5</td>
												<td>8</td>
												<td>8,5</td>
											</tr>
											<tr>
												<th scope="row">Euro Sizes</th>
												<td>39</td>
												<td>39</td>
												<td>40</td>
												<td>40-41</td>
												<td>41</td>
												<td>41-42</td>
											</tr>
											<tr>
												<th scope="row">UK Sizes</th>
												<td>5,5</td>
												<td>6</td>
												<td>6,5</td>
												<td>7</td>
												<td>7,5</td>
												<td>8</td>
											</tr>
											<tr>
												<th scope="row">Inches</th>
												<td>9.25&quot;</td>
												<td>9.5&quot;</td>
												<td>9.625&quot;</td>
												<td>9.75&quot;</td>
												<td>9.9375&quot;</td>
												<td>10.125&quot;</td>
											</tr>
											<tr>
												<th scope="row">CM</th>
												<td>23,5</td>
												<td>24,1</td>
												<td>24,4</td>
												<td>24,8</td>
												<td>25,4</td>
												<td>25,7</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-heading">
									<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#productAccordion" href="#collapse4">
					Shipping Info</a>
				<span class="toggle-arrow"><span></span><span></span></span>
			</h4> </div>
								<div id="collapse4" class="panel-collapse collapse">
									<div class="panel-body">
										
										
									{{strip_tags($productDetails->shipping_info)}}
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-heading">
									<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#productAccordion" href="#collapse5">Returns</a>
				<span class="toggle-arrow"><span></span><span></span></span>
			</h4> </div>
								<div id="collapse5" class="panel-collapse collapse">
									<div class="panel-body">
									{{strip_tags($productDetails->return_info)}}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="holder prd-block_links-wrap-bg d-none d-md-block">
		<div class="prd-block_links-wrap prd-block_info_item container mt-2 mt-md-5 py-1">
			<div class="prd-block_link"><span><i class="icon-call-center"></i>24/7 Support</span></div>
			<div class="prd-block_link"> <span>Use promocode  bhama to get 15% discount!</span></div>
			<div class="prd-block_link"><span><i class="icon-delivery-truck"></i> Fast Shipping</span></div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-8">
				<div style="float: left;" class="prd-rating justify-content-center p-1 m-1"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>{{$reviewcount}} @if($reviewcount<2)Review @else Reviews @endif</div>
			</div>
			<div class="col-10" style="float: right;">
				<div class="p-1 m-1"> <button type="button" class="btn btn-dark" style="float: right;" data-toggle="modal" data-target=".bd-example-modal-xl">
	Write a Review
  </button> </div>
			</div>
		</div>
		<div class="row justify-content-center">
			@foreach($review as $s)
			<div class="card review-item">
				<div class="card-body"> <img class="img-fluid" src="{{asset('images/backend_img/review/'.$s->image)}}" alt="">
					<p> <span class="text-center" style="font-size: 14px; font-weight: bold;">{{$s->name}}<br></span> <span style="font-size: 11px;">{{date('M d,Y',strtotime($s->created_at))}}</span> <span class="prd-rating justify-content-left">
						@if($s->review == '5')
						<i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
						@endif
						@if($s->review == '4')
						<i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
						@endif
						@if($s->review == '3')
						<i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
						@endif
						@if($s->review == '2')
						<i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
						@endif
						@if($s->review == '1')
						<i class="icon-star-fill fill"></i>
						@endif
					</span> <span style="font-size: 13px;">{{$s->description}}</span></p>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<div class="holder">
		<div class="container">
			<div class="title-wrap text-center">
				<h2 class="h1-style">You may also like</h2>
				<div class="carousel-arrows carousel-arrows--center"></div>
			</div>
			<div class="prd-grid prd-carousel js-prd-carousel slick-arrows-aside-simple slick-arrows-mobile-lg data-to-show-4 data-to-show-md-3 data-to-show-sm-3 data-to-show-xs-2" data-slick='{"slidesToShow": 4, "slidesToScroll": 2, "responsive": [{"breakpoint": 992,"settings": {"slidesToShow": 3, "slidesToScroll": 1}},{"breakpoint": 768,"settings": {"slidesToShow": 2, "slidesToScroll": 1}},{"breakpoint": 480,"settings": {"slidesToShow": 2, "slidesToScroll": 1}}]}'>
				
				@include('website.you_may_like')
			
			</div>
		</div>
	</div>
</div>

 <!-- Modal Box for write review section-->
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
 
	<div class="modal-dialog modal-xl">
	  <div class="modal-content bg-light">
		<div class="modal-body">
			<div class="card review-section">
				
			<div class="container">
			<div class="card mx-auto m-0" >
							
						<h2 class="text-center">Write Review</h2>
							<div class="card-body">
								<form action="{{route('add-review')}}" method="post" enctype="multipart/form-data">
									@csrf
									<div class="row ">
									<div class=" col-md-6">
										<div class="card mx-auto">
											<input type="hidden" name="product_id" value="{{$productDetails->id}}">
											<h2 class="text-center">Choose Stars</h2>
											<div class="custom-control custom-radio p-2 m-1">
												<input type="radio" id="customRadio" name="customRadio" value="5" class="custom-control-input" checked>
												<label class="custom-control-label" for="customRadio1"><span class="prd-rating  "><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></span>
												</label>
											  </div>
											  <div class="custom-control custom-radio p-2 m-1">
												<input type="radio" id="customRadio" name="customRadio" value="4"  class="custom-control-input">
												<label class="custom-control-label" for="customRadio"><span class="prd-rating  "><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill"></i></span>
												</label>
											  </div>
											  <div class="custom-control custom-radio p-2 m-1">
												<input type="radio" id="customRadio" name="customRadio" value="3" class="custom-control-input">
												<label class="custom-control-label" for="customRadio3"><span class="prd-rating  "><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill"></i><i class="icon-star-fill"></i></span>
												</label></div>
											  <div class="custom-control custom-radio p-2 m-1">
												<input type="radio" value="2"  id="customRadio" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio"><span class="prd-rating  "><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill"></i><i class="icon-star-fill"></i><i class="icon-star-fill"></i></span>
												</label>
											  </div>
											  <div class="custom-control custom-radio p-2 m-1">
												<input type="radio" value="1"  id="customRadio" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio5"><span class="prd-rating  "><i class="icon-star-fill fill"></i><i class="icon-star-fill"></i><i class="icon-star-fill"></i><i class="icon-star-fill"></i><i class="icon-star-fill"></i></span>
												</label>
											  </div>
										</div>
									</div>
									<div class="col-md-10 p-0 mx-auto">
									<div class="form-group">
									  <label for="exampleInputEmail1">Review Title</label>
									  <input type="text" name="review_title" class="form-control" placeholder="Review Title">   
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Review</label>
										<input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Write Your Review here">
									</div>
									
									<div class="form-group">
										<label for="exampleInputPassword1">Upload Image</label>
										<input type="file" class="form-control" id="exampleInputPassword1" name="image" placeholder="">
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
									</div>
									</div>
								  </form>
							</div>
					
				</div>
			</div>
			</div>
		</div>
		<!-- <div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		</div> -->
	  </div>
	</div>
  </div> 
		        <!-- Modal Box end -->
@endsection
<script>
	function addToCart(id){
		var size = $('#SingleOptionSelector-1').val();
		var qty=$('input[name="qty"]').val();
		//alert(size);
		var _token = $('input[name="_token"]').val();
		$.ajax({
			url:"{{ route('add.to.cart') }}",
			method:"POST",
			data:{qty:qty,size:size,id:id,_token:_token},
			dataType: "json",
			success:function(data)
			{
				// $('#qty').append(data.cartData.qty);
				// $('.update_cart').html(data.html);
				$('#dropdnMinicart').html(data.cartData);
				$('.minicart-total').html(data.price);
				$('.minicart-qty').html(data.count);
				//console.log(data.cartData.qty);
				$("#message").text(data.message).css("color", "green");
			}
		});
	}
</script>