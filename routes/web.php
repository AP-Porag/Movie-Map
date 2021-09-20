<?php

use Illuminate\Support\Facades\Route;

//Route::get('/','HomePageController@index')->name('website');
Route::view('/','website')->name('website');
Route::get('/movies','MoviesController@index')->name('index');
Route::get('/tv-shows','MoviesController@index')->name('tv-shows');
Route::get('/actors','MoviesController@index')->name('actors');
Route::get('/movies/{movie}','MoviesController@show')->name('single-movie');
Route::view('/about','about')->name('about');
