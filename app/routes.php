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

Route::get('/', function()
{
	return View::make('Layouts.home');
});
Route::get('login', function(){
	return View::make('home.login');

});
Route::get('register', function(){
	return View::make('home.register');

});

Route::get('productdetail', function(){
	return View::make('Layouts.ProductDetails');

});

Route::post('anoukh', array('as' => 'profile', 'uses' => 'ProductDetailsController@manahara'));

