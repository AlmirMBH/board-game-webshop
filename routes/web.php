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

// ADMIN PANEL
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');

    // OUTLETS
    Route::get('/admin/outlets', 'AdminOutletsController@index')->name('index-outlets');
    Route::get('/admin/outlets/create', 'AdminOutletsController@create')->name('create-outlets');
    Route::post('/admin/outlets/create', 'AdminOutletsController@store');
    Route::get('/admin/outlets/edit/{id}', 'AdminOutletsController@edit')->name('edit-outlets');
    Route::patch('/admin/outlets/{id}/update', 'AdminOutletsController@update')->name('update-outlets');
    Route::delete('/admin/outlets/{id}/delete', 'AdminOutletsController@destroy');

    // CITIES
    Route::get('/admin/cities', 'AdminCitiesController@index')->name('index-cities');
    Route::get('/admin/cities/create', 'AdminCitiesController@create')->name('create-cities');
    Route::post('/admin/cities/create', 'AdminCitiesController@store');
    Route::get('/admin/cities/edit/{id}', 'AdminCitiesController@edit')->name('edit-cities');
    Route::patch('/admin/cities/{id}/update', 'AdminCitiesController@update')->name('update-cities');
    Route::delete('/admin/cities/{id}/delete', 'AdminCitiesController@destroy');

    // PROVIDERS
    Route::get('/admin/providers', 'AdminProvidersController@index')->name('index-providers');
    Route::get('/admin/providers/create', 'AdminProvidersController@create')->name('create-providers');
    Route::post('/admin/providers/create', 'AdminProvidersController@store');
    Route::get('/admin/providers/edit/{id}', 'AdminProvidersController@edit')->name('edit-providers');
    Route::patch('/admin/providers/{id}/update', 'AdminProvidersController@update')->name('update-providers');
    Route::delete('/admin/providers/{id}/delete', 'AdminProvidersController@destroy');
});
