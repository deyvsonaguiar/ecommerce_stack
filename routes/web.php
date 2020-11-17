<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/admin')->namespace('Admin')->group(function() {
    //todas as rotas Admin serão definidas aqui
    Route::get('/', 'AdminController@index');

});

//Route::get('/', 'Admin\AdminController@index')->name('admin.index');

