<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'home')->name('home');
Route::view('about/', 'about')->name('about');
Route::view('contact/', 'contact')->name('contact');

Route::get('products-index/', 'ProductControllerRes@index')->name('products-index');
Route::get('products-create/', 'ProductControllerRes@create')->name('products-create');

Route::get('products-edit/{producto}', 'ProductControllerRes@edit')->name('products-edit');
Route::patch('products-update/{producto}', 'ProductControllerRes@update')->name('products-update');

Route::post('products-store/', 'ProductControllerRes@store')->name('products-store');
Route::get('products-show/{prod}', 'ProductControllerRes@show')->name('products-show');

Route::delete('products-destroy/{produc}', 'ProductControllerRes@destroy')->name('products-destroy');


Auth::routes(['register'=>false]);
