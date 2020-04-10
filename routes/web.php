<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// page d'accueil
Route::get('/', 'AllController@show');
// page admin
Route::get('admin', function(){
    return view('layout.admin');
});


// ABOUT
// edit
Route::get('/aboutedit', 'AboutController@show')->name('about');
Route::get('/aboutedit/{id}/edit', 'AboutController@edit');
Route::post('/aboutedit/{id}/update', 'AboutController@update');

// Create
Route::get('/aboutedit/create', 'AboutController@create');
Route::post('/aboutedit/store', 'AboutController@store');

// delete
Route::get('/aboutedit/{id}/destroy', 'AboutController@destroy');


// SERVICES

// edit
Route::get('/servicedit', 'ServicesController@show')->name('service');
Route::get('/servicedit/{id}/edit', 'AboutController@edit');
Route::post('/servicedit/{id}/update', 'ServicesController@update');

// Create
Route::get('/servicedit/create', 'ServicesController@create');
Route::post('/servicedit/store', 'ServicesController@store');

// delete
Route::get('/servicedit/{id}/destroy', 'ServicesController@destroy');