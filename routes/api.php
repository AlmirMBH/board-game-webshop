<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/cities/list/{id}', 'PagesControllerApi@listCities');
Route::get('/providers/list/{id}', 'PagesControllerApi@listProviders');
Route::get('/outlets/list/{id}', 'PagesControllerApi@listOutlets');
Route::get('/partcompanies/list/{id}', 'PagesControllerApi@listPartCompanies');
