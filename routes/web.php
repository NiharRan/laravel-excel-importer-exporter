<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::group([
    'middleware' => 'auth:web'
], function () {
    Route::get('/excel-data', 'ExcelDataController@index')->name('excel-data.index');
    Route::post('/excel-data/inport', 'ExcelDataController@inport')->name('excel-data.inport');
    Route::get('/excel-data/export', 'ExcelDataController@export')->name('excel-data.export');
});
