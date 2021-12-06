<?php 
// Get the current URL without the query string...
 $url = url()->current();
?>


<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/admin/dashboard')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
<ul>
      <li <?php if(preg_match("/dashboard/i", $url)){ ?> class="active" <?php } ?>>
        <a href="{{url('/admin/dashboard')}}"><i class="icon icon-home"></i><span>Dashboard</span></a> </li>


<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Users</span> <span class="label label-important">1</span></a>
        
<ul <?php if(preg_match("/users/i", $url)){ ?> style="display:block;" <?php } ?>>
          <li <?php if(preg_match("/view-users/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url('/admin/view-users')}}">View Users</a></li>
        </ul>
      </li>

        
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Categories</span> <span class="label label-important">2</span></a>
        <ul <?php if(preg_match("/category/i", $url)){ ?> style="display:block;" <?php } ?>>
        <li <?php if(preg_match("/add-category/i", $url)){ ?> class="active" <?php } ?>>
          <a href="{{url ('/admin/add-category')}}">Add Category</a></li>
          <li <?php if(preg_match("/view-categories/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url ('/admin/view-categories')}}">View Categories</a></li>
        </ul>
      </li>
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Men Mega Menu</span> <span class="label label-important">2</span></a>
        <ul <?php if(preg_match("/mega-menu/i", $url)){ ?> style="display:block;" <?php } ?>>
        <li <?php if(preg_match("/add-mega-menu/i", $url)){ ?> class="active" <?php } ?>>
          <a href="{{url ('/admin/add-mega-menu')}}">Add Mega Menu</a></li>
          <li <?php if(preg_match("/view-mega-menu/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url ('/admin/view-mega-menu')}}">View Mega Menu</a></li>
        </ul>
      </li>
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Women Mega Menu</span> <span class="label label-important">2</span></a>
        <ul <?php if(preg_match("/women-mega-menu/i", $url)){ ?> style="display:block;" <?php } ?>>
        <li <?php if(preg_match("/add-women-mega-menu/i", $url)){ ?> class="active" <?php } ?>>
          <a href="{{url ('/admin/add-women-mega-menu')}}">Add Mega Menu</a></li>
          <li <?php if(preg_match("/view-women-mega-menu/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url ('/admin/view-women-mega-menu')}}">View Mega Menu</a></li>
        </ul>
      </li>
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Products</span> <span class="label label-important">2</span></a>
        <ul <?php if(preg_match("/product/i", $url)){ ?> style="display:block;" <?php } ?>>
        <li <?php if(preg_match("/add-product/i", $url)){ ?> class="active" <?php } ?>>
          <a href="{{url ('/admin/add-product')}}">Add Products</a></li>
          <li <?php if(preg_match("/view-products/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url ('/admin/view-products')}}">View Products</a></li>
        </ul>
      </li>
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Coupons</span> <span class="label label-important">2</span></a>
        <ul <?php if(preg_match("/coupon/i", $url)){ ?> style="display:block;" <?php } ?>>
        <li <?php if(preg_match("/add-coupon/i", $url)){ ?> class="active" <?php } ?>>
          <a href="{{url ('/admin/add-coupon')}}">Add Coupon</a></li>
          <li <?php if(preg_match("/view-coupons/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url ('/admin/view-coupons')}}">View Coupons</a></li>
        </ul>
      </li>
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Orders</span> <span class="label label-important">1</span></a>
        <ul <?php if(preg_match("/orders/i", $url)){ ?> style="display:block;" <?php } ?>>
          <li <?php if(preg_match("/view-orders/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url ('/admin/view-orders')}}">View Orders</a></li>
        </ul>
      </li>


      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Banners</span> <span class="label label-important">2</span></a>
        <ul <?php if(preg_match("/banners/i", $url)){ ?> style="display:block;" <?php } ?>>
          <li <?php if(preg_match("/add-banners/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url ('/admin/add-banners')}}">Add Banners</a></li>
        </ul>
<ul <?php if(preg_match("/banners/i", $url)){ ?> style="display:block;" <?php } ?>>
          <li <?php if(preg_match("/view-banners/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url ('/admin/view-banners')}}">View Banners</a></li>
        </ul>
      </li>
       <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Home Menu</span> <span class="label label-important">2</span></a>
        <ul <?php if(preg_match("/home-menu/i", $url)){ ?> style="display:block;" <?php } ?>>
          <li <?php if(preg_match("/add-home-menu/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url ('/admin/add-home-menu')}}">Add Home Menu</a></li>
        </ul>
<ul <?php if(preg_match("/view-home-menu/i", $url)){ ?> style="display:block;" <?php } ?>>
          <li <?php if(preg_match("/view-home-menu/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url ('/admin/view-home-menu')}}">View Home Menu</a></li>
        </ul>
      </li>
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Promotion </span> <span class="label label-important">2</span></a>
        <ul <?php if(preg_match("/promotion-menu/i", $url)){ ?> style="display:block;" <?php } ?>>
          <li <?php if(preg_match("/add-promotion-menu/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url ('/admin/add-promotion-menu')}}">Add Promotion</a></li>
        </ul>
<ul <?php if(preg_match("/view-promotion-menu/i", $url)){ ?> style="display:block;" <?php } ?>>
          <li <?php if(preg_match("/view-promotion-menu/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url ('/admin/view-promotion-menu')}}">View Promotion</a></li>
        </ul>
      </li>
     <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Pages </span> <span class="label label-important">2</span></a>
        <ul <?php if(preg_match("/pages/i", $url)){ ?> style="display:block;" <?php } ?>>
          <li <?php if(preg_match("/add-pages/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url ('/admin/add-pages')}}">Add Page</a></li>
        </ul>
<ul <?php if(preg_match("/view-promotion-menu/i", $url)){ ?> style="display:block;" <?php } ?>>
          <li <?php if(preg_match("/view-pages/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url ('/admin/view-pages')}}">View Pages</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <!--sidebar-menu-->
  