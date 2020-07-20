<?php

Route::prefix('/admin')->group(function() {
    Route::get('/', 'Admin\DashboardController@getDashboard');
    Route::get('/users', 'Admin\UserController@getUsers');

    //Routes products
    Route::get('/products', 'Admin\ProductController@getHome');
    Route::get('/product/add', 'Admin\ProductController@getProductAdd');
}); 