<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@home');
Route::get('/home', 'HomeController@home');
Route::get('/product_{id}', 'ProductController@productDetails');
Route::get('/view_cart',function(){
    return View::make('checkout');
});
Route::post('/checkout','OrderController@newOrder');
Route::get('/checkout','OrderController@newOrder');

//User Accounts
Route::get('/login', 'AccountController@login');
Route::post('/login', 'AccountController@postLogin');
Route::get('/register', 'AccountController@register');
Route::post('/register', 'AccountController@postRegister');

//Admin Section
Route::get('/admin','AdminController@login');
Route::post('/admin','AdminController@postLogin');
Route::get('/dashboard','AdminController@dashboard');
Route::get('/store-info','AdminController@storeInfo');
Route::post('/store-info','AdminController@postStoreInfo');
Route::get('/add-product','AdminController@addProduct');
Route::post('/add-product','AdminController@postAddProduct');
Route::get('/view-products','AdminController@products');
Route::get('/process_{id}','AdminController@processOrder');
Route::post('/process_{id}','AdminController@postProcessOrder');
