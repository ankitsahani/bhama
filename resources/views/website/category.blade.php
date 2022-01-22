@extends('website.layouts.master')
@section('page_content')
<div class="page-content">
	<div class="holder breadcrumbs-wrap mt-0">
		<div class="container">
			<ul class="breadcrumbs">
				<li><a href="{{route('index')}}">Home</a></li>
				<li><span>Category</span></li>
			</ul>
		</div>
	</div>
	<div class="holder holder-mt-medium">
		<div class="container">
			<div class="row vert-margin-small">
				<div class="col-sm">
					<a href="{{route('categories')}}" class="collection-grid-3-item image-hover-scale">
						<div class="collection-grid-3-item-img image-container" style="padding-bottom: 68.22%"> <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('website_assets/images/skins/fashion/banner-category-01.webp')}}" class="lazyload fade-up" alt="Banner">
							<div class="bhama-loader"></div>
						</div>
						<div class="collection-grid-3-caption-bg">
							<h3 class="collection-grid-3-title">Top</h3>
							<h4 class="collection-grid-3-subtitle">The&nbsp;Best&nbsp;Look&nbsp</h4> </div>
					</a>
				</div>
				<div class="col-sm">
					<a href="{{route('categories')}}" class="collection-grid-3-item image-hover-scale">
						<div class="collection-grid-3-item-img image-container" style="padding-bottom: 68.22%"> <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('website_assets/images/skins/fashion/banner-category-02.webp')}}" class="lazyload fade-up" alt="Banner">
							<div class="bhama-loader"></div>
						</div>
						<div class="collection-grid-3-caption-bg">
							<h3 class="collection-grid-3-title">Bottom</h3>
							<h4 class="collection-grid-3-subtitle">Live&nbsp;for&nbsp;Fashion</h4> </div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="holder">
		<div class="container">
			<div class="page-title text-center">
				<h1>PRODUCT’S</h1> </div>
			<div class="filter-row">
				<div class="row">
					<div class="items-count">{{$productCount}} item(s)</div>
					<div class="select-wrap d-none d-md-flex">
						<div class="select-label">SORT:</div>
						<div class="select-wrapper select-wrapper-xxs">
							<select class="form-control input-sm">
								<option value="featured">Featured</option>
								<option value="rating">Rating</option>
								<option value="price">Price</option>
							</select>
						</div>
					</div>
					<div class="select-wrap d-none d-md-flex">
						<div class="select-label">VIEW:</div>
						<div class="select-wrapper select-wrapper-xxs">
							<select class="form-control input-sm">
								<option value="featured">12</option>
								<option value="rating">36</option>
								<option value="price">100</option>
							</select>
						</div>
					</div>
					<div class="viewmode-wrap">
						<div class="view-mode"> <span class="js-horview d-none d-lg-inline-flex"><i class="icon-grid"></i></span> <span class="js-gridview"><i class="icon-grid"></i></span> <span class="js-listview"><i class="icon-list"></i></span> </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 aside aside--left filter-col filter-mobile-col filter-col--sticky js-filter-col filter-col--opened-desktop" data-grid-tab-content>
					<div class="filter-col-content filter-mobile-content">
						<div class="sidebar-block">
							<div class="sidebar-block_title"> <span>Current selection</span> </div>
							<div class="sidebar-block_content">
								<div class="selected-filters-wrap">
									<ul class="selected-filters">
										<li><a href="#">Grey</a></li>
										<li><a href="#">Men</a></li>
										<li><a href="#">Above ₹200</a></li>
									</ul>
									<div class="d-flex flex-wrap align-items-center"> <a href="#" class="clear-filters"><span>Clear All</span></a>
										<div class="selected-filters-count ml-auto d-none d-lg-block">Selected <span>6 items</span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="sidebar-block d-filter-mobile">
							<h3 class="mb-1">SORT BY</h3>
							<div class="select-wrapper select-wrapper-xs">
								<select class="form-control">
									<option value="featured">Featured</option>
									<option value="rating">Rating</option>
									<option value="price">Price</option>
								</select>
							</div>
						</div>
						<div class="sidebar-block filter-group-block open">
							<div class="sidebar-block_title"> <span>Categories</span> <span class="toggle-arrow"><span></span><span></span></span>
							</div>
							<div class="sidebar-block_content">
								<ul class="category-list">
								 @foreach($categories as $c)
									<li class="active"><a href="{{route('categories')}}" title="Casual" class="open">{{$c->Name}}</a>
										<div class="toggle-category js-toggle-category"><span><i class="icon-angle-down"></i></span></div>
										<ul class="category-list category-list"> 
											@php
											 $submenu=App\Category::where('parent_id',$c->id)->get();
											@endphp
											@foreach($submenu as $s)
											<li><a href="{{$s->url}}" title="{{$c->Name}}">{{$s->Name}}</a></li>
											@endforeach
									 	</ul>
									</li>
									 @endforeach
									 </ul>
							</div>
						</div>
						<div class="sidebar-block filter-group-block collapsed">
							<div class="sidebar-block_title"> <span>Size</span> <span class="toggle-arrow"><span></span><span></span></span>
							</div>
							<div class="sidebar-block_content">
								<ul class="category-list two-column size-list" data-sort='["XXS","XS","S","M","L","XL","XXL","XXXL"]'>
									<li data-value="L" class="active"><a href="#">L</a></li>
									<li data-value="XL"><a href="#">XL</a></li>
									<li data-value="XXS"><a href="#">XXS</a></li>
									<li data-value="XS"><a href="#">XS</a></li>
									<li data-value="S"><a href="#">S</a></li>
									<li data-value="XXL"><a href="#">XXL</a></li>
									<li data-value="XXXL"><a href="#">XXXL</a></li>
								</ul>
							</div>
						</div>
						<div class="sidebar-block filter-group-block collapsed">
							<div class="sidebar-block_title"> <span>Brands</span> <span class="toggle-arrow"><span></span><span></span></span>
							</div>
							<div class="sidebar-block_content">
								<ul class="category-list">
									<li><a href="#">Adidas</a></li>
									<li><a href="#">Nike</a></li>
									<li class="active"><a href="#">Reebok</a></li>
									<li><a href="#">Ralph Lauren</a></li>
									<li><a href="#">Delpozo</a></li>
								</ul>
							</div>
						</div>
						<div class="sidebar-block filter-group-block collapsed">
							<div class="sidebar-block_title"> <span>Price</span> <span class="toggle-arrow"><span></span><span></span></span>
							</div>
							<div class="sidebar-block_content">
								<ul class="category-list">
									<li><a href="#">₹100-₹200</a></li>
									<li class="active"><a href="#">Above ₹200</a></li>
									<li><a href="#">Under ₹100</a></li>
								</ul>
							</div>
						</div>
						<a href="https://bit.ly/3eJX5XE" class="bnr image-hover-scale bnr--bottom bnr--left" data-fontratio="3.95">
							<!--<div class="bnr-img">-->
							<!--	<img src="images/banners/banner-collection-aside.html" alt="">-->
							<!--</div>-->
						</a>
					</div>
				</div>
				<div class="filter-toggle js-filter-toggle">
					<div class="loader-horizontal js-loader-horizontal">
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
						</div>
					</div> <span class="filter-toggle-icons js-filter-btn"><i class="icon-filter"></i><i class="icon-filter-close"></i></span> <span class="filter-toggle-text"><a href="#" class="filter-btn-open js-filter-btn">REFINE & SORT</a><a href="#" class="filter-btn-close js-filter-btn">RESET</a><a href="#" class="filter-btn-apply js-filter-btn">APPLY & CLOSE</a></span> </div>
				<div class="col-lg aside">
					<div class="prd-grid-wrap">
						<div class="prd-grid product-listing data-to-show-3 data-to-show-md-3 data-to-show-sm-2 js-category-grid" data-grid-tab-content> @foreach($product as $row)
							<div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
								<div class="prd-inside">
									<div class="prd-img-area"> <a href="{{url('single-product/'.$row->id)}}" class="prd-img image-hover-scale image-container">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/images/backend_img/products/small/'.$row->image)}}" alt="Oversize Cotton Dress" class="js-prd-img lazyload fade-up">
				<div class="bhama-loader"></div>
				<div class="prd-big-squared-labels">
				</div>
			</a>
										<div class="prd-circle-labels">{{csrf_field()}} @php $wishlist=\App\Wishlist::where('product_id',$row->id)->first(); @endphp @if($wishlist) @if($wishlist->status==0)
											<a href="javascript:void(0)" onclick="return addWishlist({{$row->id}});" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"> <i class="icon-heart-stroke"></i> </a> @else
											<a href="javascript:void(0);" onclick="return addWishlist({{$row->id}});" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"> <i class="icon-heart-hover"></i> </a> @endif @else
											<a href="javascript:void(0)" onclick="return addWishlist({{$row->id}});" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"> <i class="icon-heart-stroke"></i> </a> @endif
											<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="{{asset('website_assets/ajax/ajax-quickview.html')}}"> <i class="icon-eye"></i> <span>QUICK VIEW</span> </a>
										</div>
										<ul class="list-options color-swatch"> @php $productImages=App\ProductsImage::where('product_id',$row->id)->take(2)->get(); @endphp @foreach($productImages as $row1)
											<li data-image="{{asset('/images/backend_img/products/small/'.$row1->image)}}" class="active"> <a href="#" class="js-color-toggle" data-toggle="tooltip{{$row->id}}" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/images/backend_img/products/small/'.$row1->image)}}" class="lazyload fade-up" alt="Color Name"></a> </li> @endforeach
											<li data-image="{{asset('/images/backend_img/products/small/'.$row->image)}}"> <a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/images/backend_img/products/small/'.$row->image)}}" class="lazyload fade-up" alt="Color Name"></a> </li>
										</ul>
									</div>
									<div class="prd-info">
										<div class="prd-info-wrap">
											<div class="prd-info-top">
												<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
											</div>
											<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
											<h2 class="prd-title"><a href="{{url('single-product/'.$row->id)}}">{{$row->product_name}}</a></h2>
											<div class="prd-description"> Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia. </div>
											<div class="prd-action">
												<form action="#">
													<button class="btn js-prd-addtocart" data-product='{"name": "Oversize Cotton Dress", "path":"images/skins/fashion/products/product-02-1.webp", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
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
													<form action="#"> <a href="{{url('single-product/'.$row->id)}}" class="btn js-prd-addtocart">Full View</a> </form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> @endforeach </div>
						<div class="loader-horizontal-sm js-loader-horizontal-sm d-none" data-loader-horizontal style="opacity: 0;"><span></span></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection