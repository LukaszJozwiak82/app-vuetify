<?php

use App\User;

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('pass', function () {
    $user = User::find(1);
    $user->password = bcrypt('start1234');
    $user->save();
    return 'hasło zmienione';
});

Route::get('/', 'TestController@index')->name('test');
Route::group(['prefix' => 'advertisement', 'middleware' => 'auth'], function () {
    Route::get('/create', 'AdvertisementController@create')->name('advertisement.create');
    Route::post('/store', 'AdvertisementController@store')->name('advertisement.store');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/advertisement/{advertisement}', 'AdvertisementController@show')->name('advertisement.show');
