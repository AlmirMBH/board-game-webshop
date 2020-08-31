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

Route::get('/home', 'PagesController@home')->name('home');

Route::get('/uber-uns', 'PagesController@uber_uns')->name('about-us');

Route::get('/web-shop', 'PagesController@web_shop')->name('webshop');

Route::get('/lizenznehmer', 'PagesController@lizenznehmer')->name('license-providers');
Route::get('/lizenznehmer/auffuhren', 'pagesController@list_lizenznehmer')->name('list-lizenznehmer');

Route::get('/teilnehmende-betriebe', 'PagesController@betriebe')->name('participating-companies');
Route::get('/verkaufsstellen', 'PagesController@outlets')->name('outlets');

Route::get('/kontakt', 'PagesController@kontakt')->name('contact');

Route::get('/anbieter/{slug}', 'PagesController@get_provider')->name('provider_id');
Route::get('/details/{slug}', 'PagesController@get_place')->name('place_id');
