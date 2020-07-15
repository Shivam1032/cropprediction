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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/superadmin','SuperAdminController@index')->name('superadmin');
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/seeddistribution','SeedDistributionController@index')->name('seeddistributor');
Route::get('/soiltester','SoilTesterController@index')->name('soiltester');
Route::get('/buyer','PrivateCompanyController@index')->name('buyer');
Route::get('/farmer','FarmerController@index')->name('farmer');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

