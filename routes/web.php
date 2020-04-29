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

Auth::routes();

//########## ACCOUNT ROUTE

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard/user/account', 'User\AccountController@show_account')->name('User.Account-Show');
Route::get('/dashboard/user/account/saved-ads', 'User\AccountController@show_saved_ads')->name('User.Account-Saved-Ads');
Route::get('/dashboard/user/account/saved-ads/room-wanted', 'User\AccountController@show_saved_ads_room_wanted')->name('User.Account-Saved-Ads-Room');
Route::get('/dashboard/user/account/saved-searches', 'User\AccountController@show_saved_searches')->name('User.Account-Saved-Searches');
Route::get('/dashboard/user/account/my-ads', 'User\AccountController@show_my_ads')->name('User.Account-Saved-My-Ads');
Route::get('/dashboard/user/account/who-interested-ads', 'User\AccountController@show_who_interested_ads')->name('User.Account-who-inter-ads');
Route::get('/dashboard/user/account/messages', 'User\AccountController@show_messages')->name('User.Account-Messages');
Route::get('/dashboard/user/account/edit-my-details', 'User\AccountController@show_edit_my_details')->name('User.Account-Edit-My-Details');
Route::get('/dashboard/user/account/email-alert', 'User\AccountController@show_email_alert')->name('User.Account-Email-Alert');
Route::get('/dashboard/user/account/upgrade', 'User\AccountController@show_upgrade')->name('User.Account-Show-Upgrade');

//########## POST ADS ROUTE

Route::get('/dashboard/user/post-ads', 'User\PostController@show_post_ads')->name('User.Post-Show-ads');
Route::get('/dashboard/user/post-ads/room-for-rent', 'User\PostController@post_room_for_rent')->name('User.Post-Room-Rent');
Route::get('/dashboard/user/post-ads/whole-property-for-rent', 'User\PostController@post_whole_property')->name('User.Post-Whole-Property');
Route::get('/dashboard/user/post-ads/post-room-wanted', 'User\PostController@post_room_wanted')->name('User.Post-Room-Wanted');


//######### POST ROOM RENT STEPS ROUTE
Route::get('/dashboard/user/post-ads/room-for-rent/step1', 'User\PostController@room_rent_step1')->name('User.Room-rent-1');
Route::get('/dashboard/user/post-ads/room-for-rent/step2', 'User\PostController@room_rent_step2')->name('User.Room-rent-2');
Route::get('/dashboard/user/post-ads/room-for-rent/step3', 'User\PostController@room_rent_step3')->name('User.Room-rent-3');
Route::get('/dashboard/user/post-ads/room-for-rent/step4', 'User\PostController@room_rent_step4')->name('User.Room-rent-4');
Route::get('/dashboard/user/post-ads/room-for-rent/step5', 'User\PostController@room_rent_step5')->name('User.Room-rent-5');
Route::get('/dashboard/user/post-ads/room-for-rent/step6', 'User\PostController@room_rent_step6')->name('User.Room-rent-6');

//######### POST WHOLE PROPERTY RENT STEPS ROUTE
Route::get('/dashboard/user/post-ads/whole-property-for-rent/step-1', 'User\PostController@property_step1')->name('User.Property-Step1');
Route::get('/dashboard/user/post-ads/whole-property-for-rent/step-2', 'User\PostController@property_step2')->name('User.Property-Step2');
Route::get('/dashboard/user/post-ads/whole-property-for-rent/step-3', 'User\PostController@property_step3')->name('User.Property-Step3');
Route::get('/dashboard/user/post-ads/whole-property-for-rent/step-4', 'User\PostController@property_step4')->name('User.Property-Step4');
Route::get('/dashboard/user/post-ads/whole-property-for-rent/step-5', 'User\PostController@property_step5')->name('User.Property-Step5');


//######### POST ROOM WANTED STEP ROUTE
Route::get('/dashboard/user/post-ads/post-room-wanted/step-2', 'User\PostController@room_wanted_step2')->name('User.Post-Room-Wanted_Step2');
Route::get('/dashboard/user/post-ads/post-room-wanted/final-step', 'User\PostController@room_wanted_final_step')->name('User.Post-Room-Wanted-Final-Step');

//########## FINAL STEP FOR ALL POST
Route::get('/dashboard/user/post-ads/final-step', 'User\PostController@final_step')->name('User.Final-step');


//########## SEARCH ROUTES
Route::get('/dashboard/user/search/basic-search', 'User\SearchController@show_basic')->name('User.Basic-Search');
Route::get('/dashboard/user/search/advanced-search', 'User\SearchController@show_advanced')->name('User.Advanced-Search');

//########## BROWSE ROUTES
Route::get('/dashboard/user/browse', 'User\SearchController@show_browse')->name('User.Browse');


//######### ADD DETAILS
Route::get('/dashboard/user/account/add-details', 'User\AccountController@ad_details')->name('User.Add-Details');





