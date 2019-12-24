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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'TestController@index')->name('test');
Route::group(['prefix' => 'advertisement'], function () {
    Route::get('/create', 'AdvertisementController@create')->name('advertisement.create');
    Route::post('/store', 'AdvertisementController@store')->name('advertisement.store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/test', 'TestController@index')->name('test');
// });
Route::group(['middleware' => 'auth'], function () {
    Route::post('create_adv', 'AdvertisementConroller@store');
});
