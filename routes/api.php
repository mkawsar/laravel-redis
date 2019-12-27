<?php

use Illuminate\Http\Request;

Route::post('/values', 'ApiController@store');
Route::get('/values', 'ApiController@getAll');
Route::get('/value', 'ApiController@getByKey');
Route::patch('/values', 'ApiController@updateKey');
