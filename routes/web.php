<?php

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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'MasterController@home')->name('home');

Route::get('/uber-uns', 'MasterController@uber_uns')->name('about-us');

Route::get('/web-shop', 'MasterController@web_shop')->name('webshop');

Route::get('/lizenznehmer', 'MasterController@lizenznehmer')->name('license-providers');

Route::get('/teilnehmende-betriebe', 'MasterController@betriebe')->name('participating-companies');

Route::get('/kontakt', 'MasterController@kontakt')->name('contact');
