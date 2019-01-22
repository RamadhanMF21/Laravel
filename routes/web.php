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
    return view('welcome');
});

Route::get('/lemot', function () {
    echo "Kok Lemot ?";
});

Route::get('/home', function () {
    echo "di sini rumah";
});

Route::get('/sama', function () {
    return "Sama saja";
});

Route::get('/nasgor', function () {
    return view('Nasigoreng');
});

//pakai kontroler
Route::get('/capung', 'CapungController@index');

Route::get('/brokoli', 'CapungController@pujangga');

Route::get('/brokoli/dewa', 'CapungController@siti');

//Route::get('/Supplier/create', 'SupplierController@index');

//Route::get('/Customer', 'CustomerController@index');

//add customer
//Route::get('/Customer/create', 'CustomerController@create');

//Route::get('/Customer/store', 'CustomerController@store');
Route::resource('Supplier', 'SupplierController');

Route::resource('Customer', 'CustomerController');

Route::resource('Employee', 'EmployeeController');
