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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/house_hold', 'HomeController@house_hold')->name('house_hold');
Route::get('/member', 'HomeController@member')->name('member');
Route::get('/view_member_info/{id}', 'HomeController@view')->name('view_member');
Route::get('/edit_member_info/{id}', 'HomeController@edit_member_info')->name('edit_member');

Route::post('/create_address', 'HomeController@create_address')->name('create_address');
Route::post('/update_house_hold', 'HomeController@update_house_hold')->name('update_house_hold');
Route::post('/add_member', 'HomeController@add_member')->name('add_member');
Route::post('/update_member_info', 'HomeController@update_member')->name('update_member');
