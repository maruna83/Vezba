<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\roomController;

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

Route::get('/admin', function () {
    return view('admin.Pages.index');
});


Route::get('/admin/about','App\Http\Controllers\AboutController@about');
Route::get('/updateAbout','App\Http\Controllers\AboutController@updateAbout');

Route::get('admin/contact','App\Http\Controllers\contactController@contact');
Route::post('admin/editContact','App\Http\Controllers\contactController@editContact');

Route::get('admin/rooms','App\Http\Controllers\roomController@viewAllRooms');
Route::get('admin/insertRooms','App\Http\Controllers\roomController@viewInsertPage');
Route::post('admin/saveRooms','App\Http\Controllers\roomController@insertRooms');
Route::get('admin/previewRoom/id/{id}','App\Http\Controllers\roomController@previewRoom');
Route::post('admin/editRoom/id/{id}','App\Http\Controllers\roomController@editRoom');
Route::get('admin/deleteRoom/id/{id}','App\Http\Controllers\roomController@deleteRoom');

Route::get('admin/category','App\Http\Controllers\categoryController@category');