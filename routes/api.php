<?php

use Illuminate\Http\Request;

Route::post('/values', 'ApiController@store');
Route::get('/values', 'ApiController@getAll');
Route::get('/value', 'ApiController@getByKey');
Route::patch('/values', 'ApiController@updateKey');


/* REST api phpunit test */
Route::post('/test/values', 'ApiTestController@store');
Route::get('/test/values', 'ApiTestController@getAll');
Route::post('/values', 'ApiTestController@updateKey');
