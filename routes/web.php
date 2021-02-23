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

Route::get('/details/{sdate}', 'App\Http\Controllers\StudentController@display');

Route::get('/details2/{age}', 'App\Http\Controllers\StudentController@displayy');

Route::get('/students/{id}', 'App\Http\Controllers\StudentController@show');
