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

// Auth::routes();

Route::get('/home', 'PagesController@home')->name('home');

Route::get('/uber-uns', 'PagesController@about')->name('about');

Route::get('/web-shop', 'PagesController@webShop')->name('web-shop');

Route::get('/lizenznehmer', 'PagesController@licensee')->name('licensee');
Route::get('/lizenznehmer/auffuhren', 'PagesController@licenseeList')->name('licensee-list');

Route::get('/teilnehmende-betriebe', 'PagesController@participatingCompanies')->name('participating-companies');
Route::get('/teilnehmende-betriebe-list', 'PagesController@outletsList')->name('outlets-list');

Route::get('/kontakt', 'PagesController@kontakt')->name('contact');
Route::post('/kontakt', 'PagesController@send_contact')->name('send_contact');

Route::get('/kontakt', 'PagesController@contact')->name('contact');

Route::get('/lizenznehmer-details/{slug}', 'PagesController@licenseeDetails')->name('licensee-details');
Route::get('/outlet-details/{slug}', 'PagesController@outletDetails')->name('outlet-details');
