<?php

/*
| Web Routes
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('main', function(){
	return view('main');
});

Route::get('homepage/Necklace', function(){
	return view('homepage.Necklace');
});

Route::get('homepage/Ring', function(){
	return view('homepage.Ring');
});

Route::get('homepage/Earring', 'ProductController@getIndex')->name('product.index');

Route::get('homepage/Ring', 'ProductController@getIndex')->name('product.index2');

Route::get('homepage/Necklace', 'ProductController@getIndex')->name('product.index3');

Route::get('/cart', 'ProductController@getIndex');

Route::get('board/write_form/{category}', 'HomeController@write_form');

Route::post('board/write/{category}', 'HomeController@write');

Route::get('board/board/{board}','HomeController@board');

Route::get('board/board/view/{num}','HomeController@view');

Route::delete('/destroy/{board}', 'HomeController@destroy')->name('board.destroy');

Route::get('board/modify_form/{num}', 'HomeController@modify_form');

Route::post('board/modify','HomeController@modify');

Route::get('/add-to-cart/{id}','ProductController@getAddToCart')->name('product.addToCart');;

Route::get('/shopping-cart','ProductController@getCart')->name('product.shoppingCart');

Route::get('/checkout','ProductController@getCheckout')->name('checkout');

Route::post('/checkout','ProductController@postCheckout')->name('checkout');
