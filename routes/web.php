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

Route::get("emp-list",'EmployeeController@index');
Route::get("emp-create",'EmployeeController@create');
Route::post("emp-save","EmployeeController@store");
Route::get("emp-edit/{id}",'EmployeeController@edit');
Route::post("emp-update/{id}","EmployeeController@update");
Route::get("emp-delete/{id}",'EmployeeController@destroy');

