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
Route::get('/AddEmployee','EmployeeController@AddEmployee')->name('Add-Employee');

Route::get('/AddUser','UserController@AddUser')->name('Add-User');
Route::get('/GetUser','UserController@GetUserByCondition')->name('Get-User');
Route::get('/GetEmployee','EmployeeController@FetchEmployee')->name('Get-Employee');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
