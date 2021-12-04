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
// Mega Menues Routes (Admin)
Route::match(['get','post'],'/admin/add-mega-menu', 'Admin\CategoryController@addMegamenu');
Route::match(['get','post'],'/admin/edit-mega-menu/{id}','Admin\CategoryController@editMegamenu');
Route::match(['get','post'],'/admin/delete-mega-menu/{id}','Admin\CategoryController@deleteMegamenu');
Route::get('/admin/view-mega-menu', 'Admin\CategoryController@viewMegamenu');
// Home menu Routes (Admin)
Route::match(['get','post'],'/admin/add-home-menu', 'Admin\HomeMenuController@addHomeMenu');
Route::match(['get','post'],'/admin/edit-home-menu/{id}','Admin\HomeMenuController@editHomeMenu');
Route::match(['get','post'],'/admin/delete-home-menu/{id}','Admin\HomeMenuController@deleteHomeMenu');
Route::get('/admin/view-home-menu', 'Admin\HomeMenuController@viewHomeMenu');
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

Route::match(['get','post'],'/product-listing', 'Website\IndexController@productListing')->name('product.listing');
Route::match(['get','post'],'/aboutus', 'Website\StaticController@aboutUs')->name('about.us');
Route::match(['get','post'],'/contactus', 'Website\StaticController@contactUs')->name('contact.us');
Route::match(['get','post'],'/single-product/{id}', 'Website\IndexController@productSingle')->name('product.single');

Route::match(['get','post'],'cart','Website\CartController@cart')->name('cart');
Route::match(['get','post'],'add-to-cart', 'Website\CartController@addToCart')->name('add.to.cart');
Route::patch('update-cart', 'Website\CartController@updateCart')->name('update.cart');
Route::delete('remove-from-cart','Website\CartController@removeCart')->name('remove.from.cart');
