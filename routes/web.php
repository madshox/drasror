<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

//pages
Route::get('/', 'MainController@index')->name('index');
Route::get('/categories', 'MainController@categories')->name('categories');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/document', 'MainController@document')->name('document');
Route::get('/contact', 'MainController@contact')->name('contact');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['middleware' => 'is_admin'], function () {
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

        Route::resource('categories', 'CategoryController');
        Route::resource('services', 'ServiceController');
    });
});

Route::post('/order', 'MainController@order')->name('order');

Route::get('/{category}/{service}', 'MainController@service')->name('service');
Route::get('/{slug}', 'MainController@category')->name('category');
