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


Route::resource('index', 'Office');
Route::get('/', function () {
    return view('index');
});


Route::get('register', 'OfficeController@register');

Route::get('register', function () {
	return view('register');
});

Route::get('detailvo', function () {
	return view('detailvo');
});

Route::get('detailvo', 'OfficeController@detailvo');
Route::get('detailco', 'OfficeController@detailco');
Route::get('detailmeet', 'OfficeController@detailmeet');
Route::get('booking', 'OfficeController@booking');
Route::get('descco', 'OfficeController@descco');
Route::get('seeall', 'OfficeController@seeall');
Route::get('seeallmeet', 'OfficeController@seeallmeet');
Route::get('seeallvo', 'OfficeController@seeallvo');
