<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'department'], function(){
    Route::get('/', 'App\Http\Controllers\DepartmentController@index');
});
Route::group(['prefix'=>'position'], function(){
    Route::get('/', 'App\Http\Controllers\PositionController@index');
});
Route::group(['prefix'=>'salary'], function(){
    Route::get('/', 'App\Http\Controllers\SalaryController@index');
});
Route::group(['prefix'=>'employee'], function(){
    Route::get('/', 'App\Http\Controllers\EmployeeController@index');
});
Route::group(['prefix'=>'attendance'], function(){
    Route::get('/', 'App\Http\Controllers\AttendanceController@index');
});
