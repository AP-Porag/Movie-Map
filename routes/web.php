<?php

use Illuminate\Support\Facades\Route;

Route::get('/','MoviesController@index')->name('index');
Route::get('/movies/{movie}','MoviesController@show')->name('single-movie');
Route::view('/about','about');
