<?php

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
    return view('template');
});
Route::resource('invoices','invoice');
Route::resource('product','product',['only'=>['index','create','store','udate','destroy']]);
Route::resource('customers','customers',['excpt'=>['show']]);