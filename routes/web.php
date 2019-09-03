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
Route::resource('invoices','invoicescontroller');
Route::resource('product','productcontroller');
//Route::resource('customer','customerscontroller');
Route::resource('tax','taxcontroller');
Route::resource('payment','paymentcontroller');
Route::resource('detail','detailcontroller');
Route::resource('note','notecontroller');
