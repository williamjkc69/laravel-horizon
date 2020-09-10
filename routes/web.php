<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', 'App\Http\Controllers\TestFileController@create');
Route::post('/test', 'App\Http\Controllers\TestFileController@store');
Route::get('/test/{file}', 'App\Http\Controllers\TestFileController@show');

Route::get('/upload', 'App\Http\Controllers\UploadController@create');
Route::post('/upload', 'App\Http\Controllers\UploadController@store');
Route::get('/upload/{file}', 'App\Http\Controllers\UploadController@show');
