<?php

/* POST */

Route::post('home','HomeController@postIndex');

/* AJAX */

Route::post('/ajax/product','Ajax\ProductController@postIndex');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('home/admin', 'HomeController@getAdmin');
});

/* GET */
route::get('/','BaseController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('all','MaintextController@getAll');

Route::get('/{url}','MaintextController@getIndex');


