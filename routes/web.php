<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);
Route::group(['middleware'=>['loginAuth']],function(){

//route for admin
Route::match(['get','post'],'/login', 'Admin\AdminController@login')->name('login');
});
Route::group(['middleware'=>['Admin']],function(){

Route::get('/home', 'HomeController@index')->name('home');

Route::match(['get','post'],'/dashboard', 'Admin\AdminController@dashboard')->name('dashboard');
Route::match(['get','post'],'/logout', 'Admin\AdminController@logout')->name('logout');
Route::match(['get','post'],'/profile', 'Admin\AdminController@profile')->name('profile');
Route::match(['get','post'],'/change-password', 'Admin\AdminController@changePassword')->name('change-password');
Route::match(['get','post'],'/edit-profile/{id}', 'Admin\AdminController@editProfile')->name('edit-profile');
//route for users management
Route::match(['get','post'],'/users-list', 'Admin\UserController@usersList')->name('users-list');
Route::match(['get','post'],'/add-users', 'Admin\UserController@addUsers')->name('add-users');
Route::match(['get','post'],'/view-users/{id}', 'Admin\UserController@viewUsers')->name('view-users');
Route::match(['get','post'],'/edit-users/{id}', 'Admin\UserController@editUsers')->name('edit-users');
Route::match(['get','post'],'/delete-users/{id}', 'Admin\UserController@deleteUsers')->name('delete-users');
Route::get('export', 'Admin\UserController@export')->name('export');
//route for subcription management
Route::get('/subscription-users-list', 'Admin\SubscriptionController@subcriptionUserList')->name('subscription-users-list');
Route::match(['get','post'],'/edit-subscribe-user/{id}', 'Admin\SubscriptionController@subcribeEditUser')->name('edit-subscribe-user');
Route::get('/deactivate-subscription/{id}', 'Admin\SubscriptionController@deactivateSubscription')->name('deactivate-subscription');
Route::get('/subscription-plans-list', 'Admin\SubscriptionController@subcriptionPlanList')->name('subscription-plans-list');
Route::match(['get','post'],'/add-subscription-plan', 'Admin\SubscriptionController@addSubscriptionPlan')->name('add-subscription-plan');
Route::match(['get','post'],'/edit-subscription-plan/{id}', 'Admin\SubscriptionController@editSubscriptionPlan')->name('edit-subscription-plan');
Route::match(['get','post'],'/delete-subscription-plan/{id}', 'Admin\SubscriptionController@deleteSubscriptionPlan')->name('delete-subscription-plan');

//route for recipe management
Route::get('/recipe-list', 'Admin\RecipeController@recipeList')->name('recipe-list');
Route::get('/get-recipe', 'Admin\RecipeController@getRecipe')->name('get-recipe');
Route::match(['get','post'],'/add-recipe', 'Admin\RecipeController@addRecipesstepOne')->name('add-recipe');
Route::match(['get','post'],'/add-recipe-next', 'Admin\RecipeController@addRecipesstepTwo')->name('add-recipe-next');
Route::match(['get','post'],'/edit-recipe/{id}', 'Admin\RecipeController@editRecipestepOne')->name('edit-recipe');
Route::match(['get','post'],'/edit-recipe-next', 'Admin\RecipeController@editRecipestepTwo')->name('edit-recipe-next');
Route::match(['get','post'],'/delete-recipe/{id}', 'Admin\RecipeController@deleteRecipes')->name('delete-recipe');


//route for food allergy management
Route::get('/food-allergy-list', 'Admin\FoodAllergyController@foodAllergyList')->name('food-allergy-list');
Route::match(['get','post'],'/add-allergy', 'Admin\FoodAllergyController@addAllergy')->name('add-allergy');
Route::match(['get','post'],'/edit-allergy/{id}', 'Admin\FoodAllergyController@editAllergy')->name('edit-allergy');
Route::match(['get','post'],'/view-allergy/{id}', 'Admin\FoodAllergyController@viewAllergy')->name('view-allergy');
Route::match(['get','post'],'/delete-allergy/{id}', 'Admin\FoodAllergyController@deleteAllergy')->name('delete-allergy');

//route for earning management
Route::get('/earning-list', 'Admin\EarningController@earningList')->name('earning-list');
Route::match(['get','post'],'/delete-earning/{id}', 'Admin\EarningController@delete')->name('delete-earning');
//route for comment management
Route::get('/comment-list', 'Admin\CommentController@commentList')->name('comment-list');
Route::match(['get','post'],'delete-comment/{id}', 'Admin\CommentController@deleteComment')->name('delete-comment');
Route::get('report-comment/{id}', 'Admin\CommentController@reportComment')->name('report-comment');

//route for faq management
Route::get('/faq-list', 'Admin\FaqController@faqList')->name('faq-list');
Route::match(['get','post'],'/add-faq', 'Admin\FaqController@addFaq')->name('add-faq');
Route::match(['get','post'],'/edit-faq/{id}', 'Admin\FaqController@editFaq')->name('edit-faq');
Route::match(['get','post'],'/delete-faq/{id}', 'Admin\FaqController@deleteFaq')->name('delete-faq');

//route for dietry info
Route::get('/dietary-info-list', 'Admin\DietaryInfoController@dietaryInfoList')->name('dietary-info-list');
Route::match(['get','post'],'/add-meal', 'Admin\DietaryInfoController@addMeal')->name('add-meal');
Route::match(['get','post'],'/edit-meal/{id}', 'Admin\DietaryInfoController@editMeal')->name('edit-meal');
Route::match(['get','post'],'/delete-meal/{id}', 'Admin\DietaryInfoController@deleteMeal')->name('delete-meal');
Route::match(['get','post'],'/add-volume', 'Admin\DietaryInfoController@addVolume')->name('add-volume');
Route::match(['get','post'],'/edit-volume/{id}', 'Admin\DietaryInfoController@editVolume')->name('edit-volume');
Route::match(['get','post'],'/delete-volume/{id}', 'Admin\DietaryInfoController@deleteVolume')->name('delete-volume');

//route for report analytics
Route::get('/report-list', 'Admin\FaqController@reportAnalyticsList')->name('report-list');

//route for aboutus
Route::match(['get','post'],'aboutus', 'Admin\FaqController@aboutUs')->name('aboutus');
Route::match(['get','post'],'notification', 'Admin\FaqController@notification')->name('notification');

});
