@extends('website.layouts.master')
@section('page_content')
<div class="holder fullwidth full-nopad mt-0">
			<div class="container">
				<div class="bnslider-wrapper">
					<div class="bnslider bnslider--lg keep-scale" id="bnslider-001" data-slick='{"arrows": true, "dots": true}' data-autoplay="false" data-speed="12000" data-start-width="1917" data-start-height="764" data-start-mwidth="1550" data-start-mheight="1000">
						@foreach($banner as $newbanner)
						<div class="bnslider-slide">
							<div class="bnslider-image-mobile lazyload" data-bgset="{{asset('/images/backend_img/banner/'.$newbanner->image)}}"></div>
							<div class="bnslider-image lazyload" data-bgset="{{asset('/images/backend_img/banner/'.$newbanner->image)}}"></div>
							<div class="bnslider-text-wrap bnslider-overlay ">
								<div class="bnslider-text-content txt-middle txt-right txt-middle-m txt-center-m">
									<div class="bnslider-text-content-flex ">
										<div class="bnslider-vert w-s-60 w-ms-100" style="padding: 0px">
											<div class="bnslider-text order-1 mt-sm bnslider-text--md text-center data-ini" data-animation="fadeInUp" data-animation-delay="800" data-fontcolor="#282828" data-fontweight="700" data-fontline="1.5">{{strip_tags($newbanner->name)}}</div>
											<div class="bnslider-text order-2 mt-sm bnslider-text--xs text-center data-ini" data-animation="fadeInUp" data-animation-delay="1000" data-fontcolor="#7c7c7c" data-fontweight="400" data-fontline="1.5">{{strip_tags($newbanner->content_type)}}</div>
											<div class="btn-wrap text-center  order-4 mt-md" data-animation="fadeIn" data-animation-delay="2000" style="opacity: 1;"> <a href="https://bit.ly/3eJX5XE" target="_blank" class="btn">
                                            Shop now
                                        </a> </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<div class="bnslider-arrows container-fluid">
						<div></div>
					</div>
					<div class="bnslider-dots container-fluid"></div>
				</div>
			</div>
		</div>
		<div class="holder holder-mt-xsmall">
			<div class="container">
				<div class="row vert-margin-small">
					<div class="col-sm">
						<a href="category.html" class="collection-grid-3-item image-hover-scale">
							<div class="collection-grid-3-item-img image-container" style="padding-bottom: 93.68%"> <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('website_assets/images/skins/fashion/banner-fashion-2-02.webp')}}" class="lazyload fade-up" alt="Banner">
								<div class="bhama-loader"></div>
							</div>
							<div class="collection-grid-3-caption-bg">
								<h3 class="collection-grid-3-title">Accessories</h3>
								<h4 class="collection-grid-3-subtitle">The&nbsp;Best&nbsp;Look&nbsp;Anywhere</h4> </div>
						</a>
					</div>
					<div class="col-sm">
						<a href="category.html" class="collection-grid-3-item image-hover-scale">
							<div class="collection-grid-3-item-img image-container" style="padding-bottom: 93.68%"> <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('website_assets/images/skins/fashion/banner-fashion-2-04.webp')}}" class="lazyload fade-up" alt="Banner">
								<div class="bhama-loader"></div>
							</div>
							<div class="collection-grid-3-caption-bg">
								<h3 class="collection-grid-3-title">Fashion</h3>
								<h4 class="collection-grid-3-subtitle">Live&nbsp;According&nbsp;to&nbsp;Fashion</h4> </div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="holder holder-mt-medium">
			<div class="container">
				<ul class="brand-grid flex-wrap justify-content- js-color-hover-brand-grid">
					<li>
						<a href="#" target="_self" class="d-block image-container" title="Brand"> <img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('website_assets/images/skins/fashion/brands/brand-fashion-06.webp')}}" alt="Brand"> </a>
					</li>
					<li>
						<a href="#" target="_self" class="d-block image-container" title="Brand"> <img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('website_assets/images/skins/fashion/brands/brand-fashion-05.webp')}}" alt="Brand"> </a>
					</li>
					<li>
						<a href="#" target="_self" class="d-block image-container" title="Brand"> <img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('website_assets/images/skins/fashion/brands/brand-fashion-01.webp')}}" alt="Brand"> </a>
					</li>
					<li>
						<a href="#" target="_self" class="d-block image-container" title="Brand"> <img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('website_assets/images/skins/fashion/brands/brand-fashion-02.webp')}}" alt="Brand"> </a>
					</li>
					<li class="visuallyhidden js-hidden">
						<a href="#" target="_self" class="d-block image-container" title="Brand"> <img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('website_assets/images/skins/fashion/brands/brand-fashion-03.webp')}}" alt="Brand"> </a>
					</li>
					<li class="visuallyhidden js-hidden">
						<a href="#" target="_self" class="d-block image-container" title="Brand"> <img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('website_assets/images/skins/fashion/brands/brand-fashion-04.webp')}}" alt="Brand"> </a>
					</li>
				</ul>
				<div class="text-center mt-3 d-md-none"> <a href="#" class="btn btn--grey brands-show-more js-brands-show-more"><span>Show More</span><span>Show Less</span></a> </div>
			</div>
		</div>
		<div class="holder holder-mt-medium ">
			<div class="container">
				<a href="https://bit.ly/3eJX5XE" target="_blank" class="bnr-wrap bnr-">
					<div class="bnr custom-caption image-hover-scale bnr--middle bnr--right bnr--fullwidth">
						<div class="bnr-img d-none d-sm-block image-container" style="padding-bottom: 41.36752136752137%"> <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('website_assets/images/skins/fashion/banner-fashion2-full.webp')}}" class="lazyload fade-up" alt=""></div>
						<div class="bnr-img d-sm-none image-container" style="padding-bottom: 74.3139407244786%"> <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('website_assets/images/skins/fashion/banner-fashion2-full-m.webp')}}" class="lazyload fade-up" alt=""></div>
						<div class="bnr-caption text-center" style="padding: 4% 4%; ">
							<div class="bnr-caption-inside w-s-50 w-ms-100 title-wrap">
								<h2 class="h1-style">The best trends<br class="d-sm-none"> of summer 2020</h2>
								<div class="h-sub mt-0">Bhama Designs</div>
								<div class="bnr-btn inherit mt-sm order-3">
									<div class="btn">Buy Now</div>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="holder">
			<div class="container">
				<div class="title-wrap text-center">
					<h2 class="h1-style">New arrival</h2>
					<div class="h-sub maxW-825">Hurry up! Limited</div>
				</div>
				<div class="prd-grid-wrap position-relative">
					<div class="prd-grid data-to-show-4 data-to-show-lg-4 data-to-show-md-3 data-to-show-sm-2 data-to-show-xs-2 js-category-grid" data-grid-tab-content>
						@foreach($product as $row)
					
						<div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
							<div class="prd-inside">
								<div class="prd-img-area">
									<a href="{{url('single-product/'.$row->id)}}" class="prd-img image-hover-scale image-container"> <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/images/backend_img/products/small/'.$row->image)}}" alt="Oversized Cotton Blouse" class="js-prd-img lazyload fade-up">
										<div class="bhama-loader"></div>
										
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
									
										<li data-image="{{$row->image_url}}">
											<a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{$row->image_url}}" class="lazyload fade-up" alt="Color Name"></a>
										</li>
									
									</ul>
								</div>
								<div class="prd-info">
									<div class="prd-info-wrap">
										<div class="prd-info-top">
											<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
										</div>
										<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
										
										<h2 class="prd-title"><a href="{{url('single-product/'.$row->id)}}">{{$row->name}}</a></h2>
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
											<div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="{{asset('website_assets/ajax/ajax-quickview.html')}}"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
										</div>
										<div class="prd-price">
											<div class="price-old">₹ {{$row->mrp}}</div>
											<div class="price-new">₹ {{$row->mrp}}</div>
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
					</div>
					{{$product->links()}}
				</div>
			</div>
		</div>
		<div class="holder holder-mt-medium">
			<div class="container">
				<div class="title-wrap text-center ">
					<h2 class="h1-style text-center"><a href="blog.html" title="View all">Latest From Blog</a></h2>
					<div class="carousel-arrows" style="margin:0 auto 65px; width:50px;"></div>
				</div>
				<div class="post-prws post-prws-carousel post-prws--row js-post-prws-carousel" data-slick='{"slidesToShow": 3, "responsive": [{"breakpoint": 992,"settings": {"slidesToShow": 2 }},{"breakpoint": 480,"settings": {"slidesToShow": 1 }}]}'>
					<div class="post-prw-vert col">
						<a href="blog-post.html" class="post-prw-img image-hover-scale image-container" style="padding-bottom: 54.44%"> <img class="fade-up w-100 lazyload" alt="The High-Street Brand Fashion" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('website_assets/images/skins/fashion/blog/blog-fashion-02.webp')}}"> </a>
						<h4 class="post-prw-title"><a href="blog-post.html">The High-Street Brand Fashion</a></h4>
						<div class="post-prw-links">
							<div class="post-prw-date"><i class="icon-calendar1"></i> June 9, 2020 </div>
						</div>
					</div>
					<div class="post-prw-vert col">
						<a href="blog-post.html" class="post-prw-img image-hover-scale image-container" style="padding-bottom: 54.44%"> <img class="fade-up w-100 lazyload" alt="The High-Street Brand Fashion" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('website_assets/images/skins/fashion/blog/blog-fashion-03.webp')}}"> </a>
						<h4 class="post-prw-title"><a href="blog-post.html">Trends to Try This Season</a></h4>
						<div class="post-prw-links">
							<div class="post-prw-date"><i class="icon-calendar1"></i> June 3, 2020 </div>
						</div>
					</div>
					<div class="post-prw-vert col">
						<a href="blog-post.html" class="post-prw-img image-hover-scale image-container" style="padding-bottom: 54.44%"> <img class="fade-up w-100 lazyload" alt="The High-Street Brand Fashion" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('website_assets/images/skins/fashion/blog/blog-fashion-04.webp')}}"> </a>
						<h4 class="post-prw-title"><a href="blog-post.html">Working From Home</a></h4>
						<div class="post-prw-links">
							<div class="post-prw-date"><i class="icon-calendar1"></i> June 1, 2020 </div>
						</div>
					</div>
				</div>
			</div>
</div>

@endsection
<script>
function addWishlist(id){

	var _token = $('input[name="_token"]').val();
	$.ajax({
			url:"{{ route('add-wishlist') }}",
			method:"POST",
			data:{id:id,_token:_token},
			dataType: "json",
			success:function(data)
			{
				// console.log(data.data);
				 $('.wishlist-qty').html(data.count);
				//toastr.success('Retail Price Setting Updated', 'Success');
			}
		
		});
}
</script>