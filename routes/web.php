<?php

use App\Product;
use App\ProductGallery;
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

Route::get('/', 'PagesController@home')->name('home');

Route::get('/uber-uns', 'PagesController@about')->name('about');


// WEB-SHOP
Route::get('/web-shop', 'ShopController@webShop')->name('web-shop');
Route::get('/web-shop/auftrag', 'ShopController@order')->name('order');
Route::post('/web-shop/auftrag/post', 'ShopController@confirmOrder');
Route::get('/web-shop/auftrag/auschecken', 'ShopController@checkout')->name('checkout');
Route::post('/web-shop/auftrag/auschecken/post', 'ShopController@confirmCheckout');
Route::get('/bestellvorgang-erfolgreich', 'ShopController@orderSuccessful')->name('order-successful');

// FRONTEND PAGES
Route::get('/lizenznehmer', 'PagesController@licensee')->name('licensee');
Route::get('/lizenznehmer/auffuhren', 'PagesController@licenseeList')->name('licensee-list');

// PARTICIPATING COMPANIES AND OUTLETS
Route::get('/teilnehmende-betriebe', 'PagesController@participatingCompanies')->name('participating-companies');
// OUTLETS
Route::get('/verkaufsstellen-list', 'PagesController@outletsList')->name('outlets-list');
Route::get('/outlet-details/{slug}', 'PagesController@outletDetails')->name('outlet-details');
// PARTICIPATING COMPANIES
Route::get('/teilnehmende-betriebe-list', 'PagesController@participatingCompaniesList')->name('partcompanies-list');
Route::get('/teilnehmende-betriebe-details/{slug}', 'PagesController@participatingCompaniesDetails')->name('partcompanies-details');

Route::get('/kontakt', 'PagesController@kontakt')->name('contact');
Route::post('/kontakt', 'PagesController@send_contact')->name('send_contact');
Route::get('/kontakt', 'PagesController@contact')->name('contact');
Route::get('/lizenznehmer-details/{slug}', 'PagesController@licenseeDetails')->name('licensee-details');


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

    // PRODUCTS
    Route::get('/admin/products', 'AdminProductsController@index')->name('index-products');
    Route::get('/admin/products/create', 'AdminProductsController@create')->name('create-products');
    Route::post('/admin/products/create', 'AdminProductsController@store');
    Route::get('/admin/products/edit/{id}', 'AdminProductsController@edit')->name('edit-products');
    Route::patch('/admin/products/{id}/update', 'AdminProductsController@update')->name('update-products');
    Route::delete('/admin/products/{id}/delete', 'AdminProductsController@destroy');

    // PARTICIPATING COMPANIES
    Route::get('/admin/participating-companies', 'AdminPartCompaniesController@index')->name('index-partcompanies');
    Route::get('/admin/participating-companies/create', 'AdminPartCompaniesController@create')->name('create-partcompanies');
    Route::post('/admin/participating-companies/create', 'AdminPartCompaniesController@store');
    Route::get('/admin/participating-companies/edit/{id}', 'AdminPartCompaniesController@edit')->name('edit-partcompanies');
    Route::patch('/admin/participating-companies/{id}/update', 'AdminPartCompaniesController@update')->name('update-partcompanies');
    Route::delete('/admin/participating-companies/{id}/delete', 'AdminPartCompaniesController@destroy');

    // PRODUCT GALLERY
    Route::get('/product-gallery', 'ProductGalleryController@index');
    Route::post('/product-gallery', 'ProductGalleryController@upload');
    Route::delete('/product-gallery/{id}', 'ProductGalleryController@destroy');

    // TEST
    Route::get('/test', function(){
        $images = ProductGallery::all();
        return view('admin.products.test', compact('images'));
    });
});

























