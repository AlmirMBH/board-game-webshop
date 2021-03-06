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
Auth::routes();

Route::get('/', 'PagesController@home')->name('home');
Route::get('/uber-uns', 'PagesController@about')->name('about');
Route::get('/search', 'ProductSearchController@search')->name('search');

// PRODUCTS
Route::get('/shop', 'ProductController@index')->name('web-shop');
Route::get('/shop/auftrag/{product}', 'ProductController@show')->name('order');

Route::get('/warenkorb', 'CartController@index')->name('cart');
Route::post('/shop/auftrag/{product}', 'CartController@store');

Route::get('/web-shop/auftrag/auschecken', 'CheckoutController@index')->name('checkout');
Route::post('/web-shop/auftrag/auschecken', 'CheckoutController@store');

// PAYMENT
Route::get('/web-shop/auftrag/auschecken/zahlung', 'StripeController@handleGet')->name('stripe.get');
Route::post('/web-shop/auftrag/auschecken/zahlung', 'StripeController@handlePost')->name('stripe.payment');

//Route::get('/stripe-payment', 'StripeController@handleGet');
//Route::post('/stripe-payment', 'StripeController@handlePost')->name('stripe.payment');

Route::get('/bestellvorgang-erfolgreich/', 'ShopController@orderSuccessful')->name('order-successful');

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

    // ORDERS
    Route::get('/admin/orders', 'AdminOrdersController@index')->name('index-orders');
    Route::get('/admin/orders/{id}', 'AdminOrdersController@show')->name('show-orders');
    Route::get('/generate-pdf/{id}', 'PDFController@generatePdf')->name('generate-pdf');

    // SLIDER
    Route::get('/admin/slider', 'AdminSliderController@index')->name('slider-all');
    Route::get('/admin/slider/create', 'AdminSliderController@create')->name('slider-create');
    Route::post('/admin/slider/create', 'AdminSliderController@store')->name('slider-store');
    Route::delete('/admin/slider/{id}/delete', 'AdminSliderController@destroy')->name('slider-delete');
});























