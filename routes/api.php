<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/index','mahsolat@index');
Route::post('/create','mahsolat@create');
Route::delete('/destroy','mahsolat@destroy');
Route::post('/purch','mahsolat@update');
