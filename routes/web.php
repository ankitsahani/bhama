<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::match(['get','post'],'/admin', 'Admin\AdminController@login'); //submit our form for login process

Auth::routes();

//Home Page Route
// Route::get('/home', 'HomeController@index');




Route::group(['middleware' => ['auth']],function(){
Route::get('/admin/dashboard', 'Admin\AdminController@dashboard');
Route::get('/admin/settings', 'Admin\AdminController@settings');
Route::get('/admin/check-pwd', 'Admin\AdminController@chkpassword');

//forgot password for admin
Route::match(['get','post'],'forgot-password','Admin\AdminController@forgotPassword');

//Route for users
Route::get('/admin/view-users','Admin\UsersController@viewUsers');
Route::get('/admin/delete-users/{id}','Admin\UsersController@deleteUsers');

//Rout for user status
Route::get('/status/{id}', 'Admin\UsersController@status');

//Route for Banners
Route::match(['get','post'],'/admin/add-banners','Admin\BannerController@addBannerForm');
Route::match(['get','post'],'/admin/create-banners','Admin\BannerController@addBanner');
Route::match(['get','post'],'/admin/view-banners','Admin\BannerController@viewBanner');
//Route::get('/admin/edit-banners/{id}','BannerController@editBannerForm')
Route::match(['get','post'],'/admin/edit-banners/{id}','Admin\BannerController@editBanner');

// Categories Routes (Admin)
Route::match(['get','post'],'/admin/add-category', 'Admin\CategoryController@addCategory');
Route::match(['get','post'],'/admin/edit-category/{id}','Admin\CategoryController@editCategory');
Route::match(['get','post'],'/admin/delete-category/{id}','Admin\CategoryController@deleteCategory');
Route::get('/admin/view-categories', 'Admin\CategoryController@viewCategories');
// Men Mega Menues Routes (Admin)
Route::match(['get','post'],'/admin/add-mega-menu', 'Admin\CategoryController@addMegamenu');
Route::match(['get','post'],'/admin/edit-mega-menu/{id}','Admin\CategoryController@editMegamenu');
Route::match(['get','post'],'/admin/delete-mega-menu/{id}','Admin\CategoryController@deleteMegamenu');
Route::get('/admin/view-mega-menu', 'Admin\CategoryController@viewMegamenu');
//Women Mega Menues Routes (Admin)
Route::match(['get','post'],'/admin/add-women-mega-menu', 'Admin\CategoryController@addWomenMegamenu');
Route::match(['get','post'],'/admin/edit-women-mega-menu/{id}','Admin\CategoryController@editWomenMegamenu');
Route::match(['get','post'],'/admin/delete-women-mega-menu/{id}','Admin\CategoryController@deleteMegamenu');
Route::get('/admin/view-women-mega-menu', 'Admin\CategoryController@viewWomenMegamenu');
// Home menu Routes (Admin)
Route::match(['get','post'],'/admin/add-home-menu', 'Admin\HomeMenuController@addHomeMenu');
Route::match(['get','post'],'/admin/edit-home-menu/{id}','Admin\HomeMenuController@editHomeMenu');
Route::match(['get','post'],'/admin/delete-home-menu/{id}','Admin\HomeMenuController@deleteHomeMenu');
Route::get('/admin/view-home-menu', 'Admin\HomeMenuController@viewHomeMenu');

// FooterPagesRoutes (Admin)
Route::match(['get','post'],'/admin/add-pages', 'Admin\FooterPagesController@addPages');
Route::match(['get','post'],'/admin/edit-pages/{id}','Admin\FooterPagesController@editPages');
Route::match(['get','post'],'/admin/delete-pages/{id}','Admin\FooterPagesController@deletePages');
Route::get('/admin/view-pages', 'Admin\FooterPagesController@viewPages');

// gallery menu Routes (Admin)
Route::match(['get','post'],'/admin/add-gallery-menu', 'Admin\GalleryController@addgalleryMenu');
Route::match(['get','post'],'/admin/edit-gallery-menu/{id}','Admin\GalleryController@editgalleryMenu');
Route::match(['get','post'],'/admin/delete-gallery-menu/{id}','Admin\GalleryController@deletegalleryMenu');
Route::get('/admin/view-gallery-menu', 'Admin\GalleryController@viewgalleryMenu');
// Pramotion menu Routes (Admin)
Route::match(['get','post'],'/admin/add-promotion-menu', 'Admin\PromotionController@addpromotionMenu');
Route::match(['get','post'],'/admin/edit-promotion-menu/{id}','Admin\PromotionController@editpromotionMenu');
Route::match(['get','post'],'/admin/delete-promotion-menu/{id}','Admin\PromotionController@deletepromotionMenu');
Route::get('/admin/view-promotion-menu', 'Admin\PromotionController@viewpromotionMenu');
//Products Routes (Admin)
Route::match(['get','post'],'/admin/add-product', 'Admin\ProductsController@addProduct');
Route::match(['get','post'],'/admin/edit-product/{id}', 'Admin\ProductsController@editProduct');
Route::get('/admin/view-products','Admin\ProductsController@viewProducts');
Route::get('/admin/delete-product/{id}', 'Admin\ProductsController@deleteProduct');
Route::get('/admin/delete-product-image/{id}','Admin\ProductsController@deleteProductImage');
Route::get('/admin/delete-alt-image/{id}','Admin\ProductsController@deleteAltImage');

//products attributes routes (Admin)
Route::match(['get','post'],'/admin/add-attributes/{id}', 'Admin\ProductsController@addAttributes');
Route::match(['get','post'],'/admin/edit-attributes/{id}', 'Admin\ProductsController@editAttributes');
Route::match(['get','post'],'/admin/add-images/{id}', 'Admin\ProductsController@addImages');
Route::get('/admin/delete-attribute/{id}', 'Admin\ProductsController@deleteAttribute');

//Coupons Route
Route::match(['get','post'],'/admin/add-coupon','Admin\CouponsController@addCoupon');
Route::get('/admin/view-coupons', 'Admin\CouponsController@viewCoupons');
Route::match(['get','post'],'/admin/edit-coupon/{id}','Admin\CouponsController@editCoupon');
Route::get('/admin/delete-coupon/{id}','Admin\CouponsController@deleteCoupon');

//Admin Orders Route
Route::get('/admin/view-orders', 'Admin\ProductsController@viewOrders');
Route::post('/admin/update-order-status','Admin\ProductsController@updateOrderStatus');
//Admin Order Detail Page
Route::get('/admin/view-order/{id}', 'Admin\ProductsController@viewOrderDetails');

Route::get('/logout', 'Admin\AdminController@logout');
});


Route::match(['get','post'],'/', 'Website\IndexController@index')->name('index');
Route::match(['get','post'],'/register', 'Website\IndexController@userRegister')->name('user-register');
Route::match(['get','post'],'/user-login', 'Website\IndexController@userLogin')->name('user-login');

Route::match(['get','post'],'/product-listing', 'Website\IndexController@productListing')->name('product.listing');
Route::match(['get','post'],'/aboutus', 'Website\StaticController@aboutUs')->name('about.us');
Route::match(['get','post'],'/contactus', 'Website\StaticController@contactUs')->name('contact.us');
Route::match(['get','post'],'/single-product/{id}', 'Website\IndexController@productSingle')->name('product.single');

Route::middleware([frontmiddleware::class])->group(function () {
// Route::group(['middleware' => ['websitemiddleware']],function(){
    Route::match(['get','post'],'/user-logout', 'Website\IndexController@userLogout')->name('user-logout');

    Route::match(['get','post'],'/user-account', 'Website\IndexController@userAccount')->name('user-account');
    Route::match(['get','post'],'/user-account-update', 'Website\IndexController@updateUserAccount')->name('user-account-update');
    Route::match(['get','post'],'/user-address', 'Website\IndexController@userAddress')->name('user-address');
    Route::match(['get','post'],'/update-user-address-form', 'Website\IndexController@updateUserAddressForm')->name('update-user-address-form');
    Route::match(['get','post'],'/update-user-address', 'Website\IndexController@updateUserAddress')->name('update-user-address');
  
    Route::match(['get','post'],'/delete-user-address/{id}', 'Website\IndexController@deleteUserAddress')->name('delete-user-address');
    Route::match(['get','post'],'/wishlist', 'Website\IndexController@userWishlist')->name('wishlist');
    Route::match(['get','post'],'/remove-wishlist', 'Website\IndexController@removeWishlist')->name('remove-wishlist');
    Route::match(['get','post'],'/add-wishlist', 'Website\IndexController@addWishlist')->name('add-wishlist');

    Route::match(['get','post'],'cart','Website\CartController@cart')->name('cart');
    Route::match(['get','post'],'add-to-cart', 'Website\CartController@addToCart')->name('add.to.cart');
    Route::patch('update-cart', 'Website\CartController@updateCart')->name('update.cart');
    Route::match(['get','post'],'remove-from-cart','Website\CartController@removeCart')->name('remove.from.cart');

    Route::match(['get','post'],'order-history','Website\OrderController@orderHistory')->name('order-history');
    Route::match(['get','post'],'invoice-history','Website\OrderController@invoiceHistory')->name('invoice-history');
   
    Route::match(['get','post'],'clear-order-history','Website\OrderController@clearOrderHistory')->name('clear-order-history');
   
    Route::post('paysuccess', 'Website\RazorpayController@razorPaySuccess')->name('paysuccess');
    Route::match(['get','post'],'razor-thank-you', 'Website\RazorpayController@RazorThankYou')->name('razor-thank-you');
 });

 