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
    echo "kenapa kok lemot";
});
Route::get('/home', function () {
    echo "disini omah";
});
Route::get('/sama', function () {
    return "sama saja sami mawon omah";
});
Route::get('/home', function () {
    return view('telo');
});
//pakai kontroller
Route::get('/terong', 'CapungController@index');
//memanggil controller
//capung dengan fungsi pujangga

Route::get('/brokoli', 'CapungController@pujangga');

Route::get('/brokoli/dewa', 'CapungController@siti');
Route::get('/Supplier', 'SupplierController@index');

//route untuk customer
Route::get('/Customer', 'CustomerController@index');
//route untuk customer untuk add customer
Route::get('/Customer/create', 'CustomerController@create');

//untuk store dari customer
//Route::get('/Customer/store', 'CustomerController@store');

Route::resource('Customer', 'CustomerController');


//route untuk supplier
Route::get('/Supplier', 'SupplierController@index');
//route untuk supplier untuk add supplier
Route::get('/Supplier/create', 'SupplierController@create');

Route::resource('Supplier', 'SupplierController');

//route untuk employee
Route::get('/Employee', 'EmployeeController@index');
//route untuk employee untuk add employee
Route::get('/Employee/create', 'EmployeeController@create');

//untuk store dari employee
//Route::get('/Employee/store', 'EmployeeController@store');

Route::resource('Employee', 'EmployeeController');

//route untuk buku
Route::get('/Buku', 'BukuController@index');

//route untuk buku untuk add buku
Route::get('/Buku/create', 'BukuController@create');

//untuk store dari customer
//Route::get('/Customer/store', 'CustomerController@store');
Route::resource('Buku', 'BukuController');