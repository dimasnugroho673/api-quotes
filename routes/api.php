<?php

// use Illuminate\Support\Facades\Route;

Route::post('register', 'Api\RegisterController@action');

Route::post('login', 'Api\LoginController@action');

Route::get('user/me', 'Api\UserController@me')->middleware('auth:api');

Route::get('quotes', 'Api\QuoteController@index');
Route::post('quote', 'Api\QuoteController@store')->middleware('auth:api');
Route::get('quote/{id}', 'Api\QuoteController@show');
Route::put('quote/{quote}', 'Api\QuoteController@update')->middleware('auth:api');
Route::delete('quote/{quote}', 'Api\QuoteController@destroy')->middleware('auth:api');
