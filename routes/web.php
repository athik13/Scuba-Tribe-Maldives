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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('admin-login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('admin-logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('admin-register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('admin-password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('admin-password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('admin-password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});


// Liveaboard Routes
Route::group(['prefix' => 'liveaboard'], function () {
  
  Route::get('/', 'LiveaboardController@index');
  Route::get('{liveaboard}', 'LiveaboardController@show');
  
  Route::get('add/new', 'LiveaboardController@create');
  Route::post('add/new', 'LiveaboardController@store');
  
  Route::get('{slug}/photo/{filename}', 'LiveaboardController@image');
  
  Route::get('itinerary/add/new', 'LiveaboardController@itinerary');
  Route::post('itinerary/add/new', 'LiveaboardController@itinerary_add');

});
// Catamaran Routes
Route::group(['prefix' => 'catamaran'], function () {
  Route::get('/', 'CatamaranController@index');
  Route::get('{catamaran}', 'CatamaranController@show');
  
  Route::get('add/new', 'CatamaranController@create');
  Route::post('add/new', 'CatamaranController@store');
  
  Route::get('{slug}/photo/{filename}', 'CatamaranController@image');

  Route::get('itinerary/add/new', 'CatamaranController@itinerary');
  Route::post('itinerary/add/new', 'CatamaranController@itinerary_add');
});
// Diving Spots Routes
Route::get('/diving-spots', 'DivingSpotController@index');

// Inquiry route
Route::get('/inquiry/{id}/{name}/{type}/{iten_id}', 'InqueryController@show');
Route::post('/inquiry/{id}/{name}/{type}/{iten_id}', 'InqueryController@store');

// table.blade
Route::get('/table', function () {
    return view('inquiry.table');
});