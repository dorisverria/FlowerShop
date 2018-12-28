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
Route::get('/splash', [
    'uses' => 'SplashController@getSplashPage',
    'as' => 'splash'
]);

Route::get('/', [
    'uses' => 'ProductController@getAllProducts',
    'as' => 'product.index',
    'middleware' => 'auth'
]);

Route::get('/add-to-cart/{id}/{discount}', [
    'uses' => 'ProductController@AddProductToCart',
    'as' => 'product.addToCart',
    'middleware' => 'auth'
]);

Route::get('/shoppingCart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart',
    'middleware' => 'auth'
]);

Route::get('/checkOut', [
    'uses' => 'ProductController@checkoutProducts',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::get('/getLucky', [
    'uses' => 'ProductController@getRandomProducts',
    'as' => 'product.getLucky',
    'middleware' => 'auth'
]);

Route::get('/promoCode', [
    'uses' => 'ProductController@getPromoCode',
    'as' => 'product.promoCode',
    'middleware' => 'auth'
]);

Route::post('/promoCode', [
    'uses' => 'ProductController@postPromoCode',
    'as' => 'product.promoCode',
    'middleware' => 'auth'
]);

Route::group(['prefix' => 'user'], function() {
  Route::get('/signup', [
      'uses' => 'UserController@getSignup',
      'as' => 'user.signup',
      'middleware' => 'guest'
  ]);

  Route::post('/signup', [
      'uses' => 'UserController@postSignup',
      'as' => 'user.signup',
      'middleware' => 'guest'
  ]);

  Route::get('/signin', [
      'uses' => 'UserController@getSignin',
      'as' => 'user.signin',
      'middleware' => 'guest'
  ]);

  Route::post('/signin', [
      'uses' => 'UserController@postSignin',
      'as' => 'user.signin',
      'middleware' => 'guest'
  ]);

  Route::get('/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'user.logout',
    'middleware' => 'auth'
]);
});
