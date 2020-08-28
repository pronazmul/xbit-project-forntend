<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'mainController');
Route::post('/insertContractData', 'mainController@insertContractData');

// Login & Resistration Pages Route....
Route::get('/login', 'mainController@login');
Route::get('/registration', 'mainController@registration');


// User Login & Resistration 
Route::post('/userResisger', 'userController@userResisger');
Route::post('/userLogin', 'userController@userLogin');
Route::get('/logout', 'userController@logout');
Route::get('/dashboard', 'userController@dashboard')->middleware('loginCheck');

