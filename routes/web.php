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



