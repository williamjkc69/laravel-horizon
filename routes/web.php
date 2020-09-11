<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', 'App\Http\Controllers\TestFileController@create');
Route::post('/test', 'App\Http\Controllers\TestFileController@store');
Route::get('/test/{file}', 'App\Http\Controllers\TestFileController@show');
Route::get('/test/email', 'App\Http\Controllers\TestFileController@sendEmail');
