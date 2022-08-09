<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

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
Route::get('/customer/create', 'CustomerController@create');

Route::post('/customers', 'CustomerController@store');

Route::delete('/customer/{id}', 'CustomerController@destroy');
/////////////////////////////////////////////////////////////
///////////////////// search by phone
Route::get('/customer/search_by_phone','CustomerController@search_by_phone');

Route::post('/customer/search_by_phone','CustomerController@result_by_phone');
//////////////////// search by name
Route::get('/customer/search_by_name','CustomerController@search_by_name');

Route::post('/customer/search_by_name','CustomerController@result_by_name');
//////////////////// by field
Route::get('/customer/search_by_field','CustomerController@search_by_field');

Route::post('/customer/search_by_field','CustomerController@result_by_field');
//////////////////// by field
Route::get('/customer/search_by_all','CustomerController@search_by_all');

Route::post('/customer/search_by_all','CustomerController@result_by_all');
///////////////////////////// Customers Actibe & Deleted ////////////////////////////////////
Route::get('/customers','CustomerController@index');

Route::get('/customers/deleted','CustomerController@indexTrash');

Route::get('/customers/deleted/{id}/restore','CustomerController@restore');

Route::get('/customers/deleted/{id}/delete_forever','CustomerController@deleteForever');


///////////////////////////////////////////////

Route::get('/customer/{id}', 'CustomerController@show');

Route::put('/customer/{id}', 'CustomerController@update');

Route::get('/customer/{id}/edit', 'CustomerController@edit');



