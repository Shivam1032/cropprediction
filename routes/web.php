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

Route::get('lang/{locale}','HomeController@lang');     //ADDED THIS LINE FOR LANG

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/superadmin','SuperAdminController@index')->name('superadmin');
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/seeddistribution','SeedDistributionController@index')->name('seeddistributor');
Route::get('/soiltester','SoilTesterController@index')->name('soiltester');
Route::get('/buyer','PrivateCompanyController@index')->name('buyer');
Route::get('/farmer','FarmerController@index')->name('farmer');

Route::get('/superadmin/home','SuperAdminController@home')->name('superadminhome');
Route::get('/admin/home','AdminController@home')->name('adminhome');
Route::get('/seeddistribution/home','SeedDistributionController@home')->name('seeddistributorhome');
Route::get('/soiltester/home','SoilTesterController@home')->name('soiltesterhome');
Route::get('/buyer/home','PrivateCompanyController@home')->name('buyerhome');
Route::get('/farmer/home','FarmerController@home')->name('farmerhome');

// Route::get('/getuserid', function(){
//     // $data['id'] = Auth::user()->id;
//     // return response()->json($data,200);
//     return Auth::user()->id;
//   });

  Route::Resources([
    'user'        => 'WEB\UserController',
    'soiltesting' => 'WEB\SoilController',
    'history'     => 'WEB\HistoryController',
    'request'     => 'WEB\RequestController',
    'contact'     => 'WEB\ContactController',
    'distaloc'    => 'WEB\AlotDistrictsController',
    'bidding'     => 'WEB\BiddingController',
    'product'     => 'WEB\ProductController',
    'sell'        => 'WEB\SellsController',
]);


// Auth::routes()

// Route::get('/home', 'HomeController@index')->name('home')

