<?php

#cms
Route::middleware(['cmsguard'])->group(function() {
    Route::prefix('cms')->group(function() {
        Route::get('dashboard', 'CmsController@dashboard');
        Route::get('orders', 'CmsController@orders');
        Route::resource('menu', 'MenuController');
        Route::resource('content', 'ContentController');
        Route::resource('categories', 'categoriesController');
        Route::resource('products', 'ProductsController');
        Route::resource('users', 'UsersController');
        Route::resource('ads', 'AdsController');
    });
});


#user
Route::prefix('user')->group(function() {
    Route::get('login', 'UserController@login');
    Route::post('login', 'UserController@postLogin');
    Route::get('register', 'UserController@register');
    Route::post('register', 'UserController@postRegister');
    Route::get('logout', 'UserController@logout');
});

#profile
Route::middleware(['profileguard'])->group(function () {
    Route::resource('profile', 'ProfileController');
});





#shop
Route::prefix('shop')->group(function() {
    Route::get('/', 'ShopController@categories');
    Route::get('add-to-cart', 'ShopController@addToCart');
    Route::get('update-cart', 'ShopController@updateCart');
    Route::get('clear-cart', 'ShopController@clearCart');
    Route::get('checkout', 'ShopController@checkout');
    Route::get('order', 'ShopController@order');
    Route::get('search', 'ShopController@search');
    Route::get('remove-item/{id}', 'ShopController@removeItem');
    Route::get('{category}', 'ShopController@products');
    Route::get('{category}/{product}', 'ShopController@product');
});

#pages
Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('{url}', 'PagesController@content');


