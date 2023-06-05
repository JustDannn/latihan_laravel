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
    return view('home');
});

Route::get('User', 'UserManagementController@index');
Route::get('User/create', 'UserManagementController@create');
Route::post('User', 'UserManagementController@store' );
Route::get('User/edit/{id}', 'UserManagementController@edit');
Route::patch('User/{id}', 'UserManagementController@update');
Route::delete('User/{id}', 'UserManagementController@delete');

Route::resource('bill', 'BillingController');

Route::resource('BillCat', 'BillCatController');
Route::get('/BillCat', 'BillCatController@index');
Route::get('/BillCat/create', 'BillCatController@create');
Route::post('/BillCat', 'BillCatController@store' );
Route::get('/BillCat/edit/{id}', 'BillCatController@edit');
Route::patch('/BillCat/{id}', 'BillCatController@update');
Route::delete('/BillCat/{id}', 'BillCatController@delete');
