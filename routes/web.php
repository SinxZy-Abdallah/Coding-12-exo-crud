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
Route::get('/servicedit/{id}/edit', 'ServicesController@edit');
Route::post('/servicedit/{id}/update', 'ServicesController@update');

// Create
Route::get('/servicedit/create', 'ServicesController@create');
Route::post('/servicedit/store', 'ServicesController@store');

// delete
Route::get('/servicedit/{id}/destroy', 'ServicesController@destroy');

//  SUBSCRIBE

//Edit
Route::get('/subscribedit', 'SubscribeController@show')->name('subscribe');
Route::get('/subscribedit/{id}/edit', 'SubscribeController@edit');
Route::post('/subscribedit/{id}/update', 'SubscribeController@update');



// PORTOFOLIO

// edit
Route::get('/portofolioedit', 'PortofolioController@show')->name('portofolio');
Route::get('/portofolioedit/{id}/edit', 'PortofolioController@edit');
Route::post('/portofolioedit/{id}/update', 'PortofolioController@update');

// Create
Route::get('/portofolioedit/create', 'PortofolioController@create');
Route::post('/portofolioedit/store', 'PortofolioController@store');

// delete
Route::get('/portofolioedit/{id}/destroy', 'PortofolioController@destroy');




// TESTIMONIAL

// edit
Route::get('/testimonialedit', 'TestimonialController@show')->name('testimonial');
Route::get('/testimonialedit/{id}/edit', 'TestimonialController@edit');
Route::post('/testimonialedit/{id}/update', 'TestimonialController@update');

// Create
Route::get('/testimonialedit/create', 'TestimonialController@create');
Route::post('/testimonialedit/store', 'TestimonialController@store');

// delete
Route::get('/testimonialedit/{id}/destroy', 'TestimonialController@destroy');



// TEAM

// edit
Route::get('/teamedit', 'TeamController@show')->name('team');
Route::get('/teamedit/{id}/edit', 'TeamController@edit');
Route::post('/teamedit/{id}/update', 'TeamController@update');

// Create
Route::get('/teamedit/create', 'TeamController@create');
Route::post('/teamedit/store', 'TeamController@store');

// delete
Route::get('/teamedit/{id}/destroy', 'TeamController@destroy');



// CONTACT

// edit
Route::get('/contactedit', 'ContactController@show')->name('contact');
Route::get('/contactedit/{id}/edit', 'ContactController@edit');
Route::post('/contactedit/{id}/update', 'ContactController@update');

// Create
Route::get('/contactedit/create', 'ContactController@create');
Route::post('/contactedit/store', 'ContactController@store');

// delete
Route::get('/contactedit/{id}/destroy', 'ContactController@destroy');