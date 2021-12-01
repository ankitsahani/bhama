@extends('website.layouts.master')
@section('page_content')
<div class="page-content">
    <div class="banner">
        <a href="{{route('product.listing')}}"><img src="{{asset('/images/backend_img/homemenu/large/'.$menu1[0]['image'])}}" class="img-fluid" alt=""></a>
    </div>
    <div class="container">
        <div class="row">
            @foreach($categories as $c)
            <div class="categorybox m-1 mt-3">
                <div class="imgbox">
                    <!-- <img src="{{asset('website_assets/newimages/dresses.webp')}}" alt=""> -->
                    @if(!empty($c->image))
                      <img src="{{asset('/images/backend_img/categories/large/'.$c->image)}}">
                      @endif
                    <div class="imgname p-1 text-center">
                        <a href="{{$c->url}}">{{$c->Name}}</a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="categorybox m-1 mt-3">
                <div class="imgbox">
                    <img src="{{asset('website_assets/newimages/tops.webp')}}" alt="">
                    <div class="imgname p-1 text-center">
                        <a href="#">Tops</a>
                    </div>
                </div>
            </div>
            <div class="categorybox m-1 mt-3">
                <div class="imgbox">
                    <img src="{{asset('website_assets/newimages/jumpsuits.webp')}}" alt="">
                    <div class="imgname p-1 text-center">
                        <a href="#">Jumpsuits</a>
                    </div>
                </div>
            </div>
            <div class="categorybox m-1 mt-3">
                <div class="imgbox">
                    <img src="{{asset('website_assets/newimages/skirts.webp')}}" alt="">
                    <div class="imgname p-1 text-center">
                        <a href="#">Skirts</a>
                    </div>
                </div>
            </div> -->
           
            
        </div>
    </div>
    <div class="banner2 mt-2">
        <a href="{{route('product.listing')}}"><img src="{{asset('/images/backend_img/homemenu/large/'.$menu2[0]['image'])}}" class="img-fluid" alt=""></a>
    </div>
    <div class="banner3 mt-2">
        <a href="{{route('product.listing')}}"><img src="{{asset('/images/backend_img/homemenu/large/'.$menu3[0]['image'])}}" class="img-fluid" alt=""></a>
    </div>
    <div class="product-wrap">
        
        <div class="row">
            <div class="col-8">
                <div class="product-wrap-box m-1 mt-3 text-center">
                    <div class="product-wrap-imgbox text-center" >
                        <img src="{{asset('/images/backend_img/homemenu/large/'.$menu4[0]['image'])}}"  alt="">
                        <div class="product-wrap-imgname p-1 ">
                            <a href="{{route('product.listing')}}">Polka Dots</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="product-wrap-box m-1 mt-3">
                    <div class="product-wrap-imgbox text-center" >
                        <img src="{{asset('/images/backend_img/homemenu/large/'.$menu5[0]['image'])}}" alt="">
                        <div class="product-wrap-imgname p-1 ">
                            <a href="{{route('product.listing')}}">Summer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bhamagallery ">
        <div class="container  ">
            <div class="row">
                <div class="col-16" >
                    <h3 class="headgallery">BHAMA GALLERY</h3>
                </div>
            </div>
            <div class="galleryrow">
                <div class="gallerycol">
                    <div class="gallery-box m-1 mt-3 ">
                        <div class="gallery-imgbox " >
                            <img src="{{asset('website_assets/newimages/galaxy1.webp')}}"  alt="">
                            <div class="gallery-imgname">
                               <h3 style="font-weight: 400; font-size: 21px; line-height: 1.5em; margin-bottom: 0px;"><a href="#">How to Plan a Holiday Party in a Pandemic</a></h3> 
                                <p style="margin:0px;padding:0px;"><span style="color:#ee7db6af; font-size: 12px;"> November 10th 2021 <br></span>
                                <a href="#">Read More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallerycol">
                    <div class="gallery-box m-1 mt-3 ">
                        <div class="gallery-imgbox " >
                            <img src="{{asset('website_assets/newimages/galaxy2.webp')}}"  alt="">
                            <div class="gallery-imgname">
                               <h3 style="font-weight: 400; font-size: 21px; line-height: 1.5em; margin-bottom: 0px;"><a href="#">Food, Party Themes for Diwali Party with Friends and Family</a></h3> 
                                <p style="margin:0px;padding:0px;"><span style="color:#ee7db6af; font-size: 12px;"> November 10th 2021 <br></span>
                                <a href="#">Read More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallerycol">
                    <div class="gallery-box m-1 mt-3 ">
                        <div class="gallery-imgbox " >
                            <img src="{{asset('website_assets/newimages/galaxy3.webp')}}"  alt="">
                            <div class="gallery-imgname">
                               <h3 style="font-weight: 400; font-size: 21px; line-height: 1.5em; margin-bottom: 0px;"><a href="#">A New Way of Hosting Parties and Festivals in Times of Covid</a></h3> 
                                <p style="margin:0px;padding:0px;"><span style="color:#ee7db6af; font-size: 12px;"> November 10th 2021 <br></span>
                                <a href="#">Read More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div id="shopify-section-1580120882646" class="shopify-section custom-html-section">
        <div class="homepage_content clearfix"> 
            <div class="container"> 
                <div class="sixteen columns"> 
                    <div class="section mt-4"> 
                        <div style="text-align:center;">
                            <h3 style="font-weight: 700;"><b >WE ARE ALSO AVAILABLE ON</b></h3>
                            <p>Bhama products can also be purchased at the following websites/stores:</p>
                            
                            <div class="row justify-content-center" id="marketplaces">
                                <div class="col-8 col-md-3 alpha" id="amazon">
                                <a href="https://www.amazon.in/stores/node/17733815031" target="_blank">
                                    <img src="https://cdn.shopify.com/s/files/1/1018/4207/files/129_-39.jpg?v=1583926436" width="">
                                </a>
                                </div>
                                <div class="col-8 col-md-3 " id="myntra">
                                <a href="https://www.myntra.com/berrylush" target="_blank">
                                    <img src="https://cdn.shopify.com/s/files/1/1018/4207/files/138_-_43.jpg?v=1583926436" width="">
                                </a>
                                </div>
                                <div class="col-8 col-md-3 " id="flipkart">
                                <a href="https://www.flipkart.com/search?q=berrylush" target="_blank">
                                    <img src="https://cdn.shopify.com/s/files/1/1018/4207/files/logo-flipkart-png-flipkart-logo-5000_faaea0e2-657f-4a39-a561-a25fcfbfe264.png?v=1597833345" width="">
                                </a>
                                </div>
                                <div class="col-8 col-md-3 " id="nykaa">
                                <a href="https://www.nykaafashion.com/designers/berrylush/c/10201?searchType=SearchedFromHistory&amp;internalSearchTerm=Berrylush" target="_blank">
                                    <img src="https://cdn.shopify.com/s/files/1/1018/4207/files/download_1.png?v=1635416308" width="40%">
                                </a>
                                </div>
                                <div class="col-8 col-md-3 " id="ajio">
                                <a href="https://www.ajio.com/b/berrylush?query=:relevance" target="_blank">
                                    <img src="https://cdn.shopify.com/s/files/1/1018/4207/files/ajio-logo-vector.png?v=1597833345" width="40%">
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="holder holder-subscribe-full lazyload">
        <div class="circle_decor_wrap">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"viewBox="0 0 150 150" style="enable-background:new 0 0 150 150; " xml:space="preserve" class="circle_decor circle_decor--tl"><defs><filter x="0" y="0" width="100%" height="100%" id="dropshadow_1_003" filterUnits="userSpaceOnUse"><feGaussianBlur in="SourceAlpha" stdDeviation="2"/><feOffset dx="-3" dy="0" result="offsetblur"/><feMerge><feMergeNode/><feMergeNode in="SourceGraphic"/><feMergeNode in="SourceGraphic"/></feMerge></filter><filter x="0" y="0" width="100%" height="100%" id="dropshadow_2_003" filterUnits="userSpaceOnUse"><feGaussianBlur in="SourceAlpha" stdDeviation="2"/><feOffset dx="3" dy="0" result="offsetblur"/><feMerge><feMergeNode/><feMergeNode in="SourceGraphic"/><feMergeNode in="SourceGraphic"/></feMerge></filter><clipPath id="circle_decor_mask_003"><circle r="73.5" cx="75" cy="75"/></clipPath></defs><path fill="#55C1AE" d="M74.933,148.5c-9.9,0-19.533-1.95-28.583-5.783c-8.75-3.699-16.6-9-23.333-15.734c-6.75-6.731-12.034-14.582-15.733-23.332C3.45,94.6,1.5,84.967,1.5,75.066c0-9.9,1.95-19.533,5.783-28.583c3.7-8.75,9-16.6,15.733-23.333S37.6,11.116,46.35,7.417c9.05-3.833,18.684-5.783,28.583-5.783c9.901,0,19.534,1.95,28.584,5.783c8.75,3.7,16.6,9,23.332,15.733c6.733,6.733,12.032,14.583,15.733,23.333c3.832,9.067,5.783,18.684,5.783,28.583c0,9.9-1.951,19.534-5.783,28.584c-3.701,8.75-9,16.6-15.733,23.332c-6.732,6.733-14.582,12.033-23.332,15.733C94.467,146.55,84.834,148.5,74.933,148.5z M75,13.783C41.25,13.783,13.783,41.25,13.783,75S41.25,136.217,75,136.217S136.217,108.75,136.217,75S108.75,13.783,75,13.783z"/><circle r="5.8" cx="75" cy="7.8" fill-opacity="0.25" style="filter:url(#dropshadow_1_003)" clip-path="url(#circle_decor_mask_003)"/><circle r="5.8" cx="74" cy="142.5" fill-opacity="0.25" style="filter:url(#dropshadow_2_003)" clip-path="url(#circle_decor_mask_003)"/><path fill="#55C1AE" d="M81.101,7.712c0,3.346-2.761,6.059-6.164,6.059l0,0c-3.404,0-6.164-2.713-6.164-6.059l0,0c0-3.345,2.76-6.058,6.164-6.058l0,0C78.34,1.654,81.101,4.367,81.101,7.712L81.101,7.712z"/><path fill="#55C1AE" d="M81.177,142.363c0,3.346-2.761,6.06-6.164,6.06l0,0c-3.404,0-6.164-2.714-6.164-6.06l0,0c0-3.345,2.76-6.058,6.164-6.058l0,0C78.416,136.306,81.177,139.019,81.177,142.363L81.177,142.363z"/></svg>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"viewBox="0 0 150 150" style="enable-background:new 0 0 150 150; " xml:space="preserve" class="circle_decor circle_decor--br"><defs><filter x="0" y="0" width="100%" height="100%" id="dropshadow_1_004" filterUnits="userSpaceOnUse"><feGaussianBlur in="SourceAlpha" stdDeviation="2"/><feOffset dx="-3" dy="0" result="offsetblur"/><feMerge><feMergeNode/><feMergeNode in="SourceGraphic"/><feMergeNode in="SourceGraphic"/></feMerge></filter><filter x="0" y="0" width="100%" height="100%" id="dropshadow_2_004" filterUnits="userSpaceOnUse"><feGaussianBlur in="SourceAlpha" stdDeviation="2"/><feOffset dx="3" dy="0" result="offsetblur"/><feMerge><feMergeNode/><feMergeNode in="SourceGraphic"/><feMergeNode in="SourceGraphic"/></feMerge></filter><clipPath id="circle_decor_mask_004"><circle r="73.5" cx="75" cy="75"/></clipPath></defs><path fill="#55C1AE" d="M74.933,148.5c-9.9,0-19.533-1.95-28.583-5.783c-8.75-3.699-16.6-9-23.333-15.734c-6.75-6.731-12.034-14.582-15.733-23.332C3.45,94.6,1.5,84.967,1.5,75.066c0-9.9,1.95-19.533,5.783-28.583c3.7-8.75,9-16.6,15.733-23.333S37.6,11.116,46.35,7.417c9.05-3.833,18.684-5.783,28.583-5.783c9.901,0,19.534,1.95,28.584,5.783c8.75,3.7,16.6,9,23.332,15.733c6.733,6.733,12.032,14.583,15.733,23.333c3.832,9.067,5.783,18.684,5.783,28.583c0,9.9-1.951,19.534-5.783,28.584c-3.701,8.75-9,16.6-15.733,23.332c-6.732,6.733-14.582,12.033-23.332,15.733C94.467,146.55,84.834,148.5,74.933,148.5z M75,13.783C41.25,13.783,13.783,41.25,13.783,75S41.25,136.217,75,136.217S136.217,108.75,136.217,75S108.75,13.783,75,13.783z"/><circle r="5.8" cx="75" cy="7.8" fill-opacity="0.25" style="filter:url(#dropshadow_1_004)" clip-path="url(#circle_decor_mask_004)"/><circle r="5.8" cx="74" cy="142.5" fill-opacity="0.25" style="filter:url(#dropshadow_2_004)" clip-path="url(#circle_decor_mask_004)"/><path fill="#55C1AE" d="M81.101,7.712c0,3.346-2.761,6.059-6.164,6.059l0,0c-3.404,0-6.164-2.713-6.164-6.059l0,0c0-3.345,2.76-6.058,6.164-6.058l0,0C78.34,1.654,81.101,4.367,81.101,7.712L81.101,7.712z"/><path fill="#55C1AE" d="M81.177,142.363c0,3.346-2.761,6.06-6.164,6.06l0,0c-3.404,0-6.164-2.714-6.164-6.06l0,0c0-3.345,2.76-6.058,6.164-6.058l0,0C78.416,136.306,81.177,139.019,81.177,142.363L81.177,142.363z"/></svg>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="subscribe-form-title-lg">Newsletter</div>
                    <div class="subscribe-form-title-sm">Subscribe to our weekly newsletter.</div>
                </div>
                <div class="col">
                    <div class="subscribe-form">
                        <form action="#">
                            <div class="form-inline">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" placeholder="Type your e-mail...">
                                    <svg preserveAspectRatio="none"><rect x="2" y="2" rx="6" height="100%" width="100%"></rect></svg>
                                    <span class="bottom"></span>
                                </div>
                                <button type="submit" class="btn btn--lg">subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

		@endsection
