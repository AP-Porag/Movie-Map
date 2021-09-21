<?php

use Illuminate\Support\Facades\Route;

Route::get('/','HomePageController@index')->name('website');

Route::get('/movies','MoviesController@index')->name('index');
Route::get('/movies/{movie}','MoviesController@show')->name('single-movie');

Route::get('/tv-shows','TvController@index')->name('tv-shows');
Route::get('/tv-shows/{id}','TvController@show')->name('tv-show');

Route::get('/actors','ActorsController@index')->name('actors');
Route::get('/actors/page/{page?}', 'ActorsController@index');
Route::get('/actors/{id}','ActorsController@show')->name('actor');

Route::view('/about','about')->name('about');
