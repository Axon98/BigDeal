<?php

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

Route::get('/', 'ListingController@main')->name('index');
Route::get('/listing/{id}', 'ListingController@view')->name('view');

Route::get('/listings', 'ListingController@index')->name('listing.index');

Route::any('/search', 'ListingController@search')->name('listing.search');

Route::get('/listing/create', 'ListingController@create')->name('listing.create');

Route::get('/listing/edit/{id}', 'ListingController@edit')->name('listing.edit');

Route::get('/listing/show/{id}', 'ListingController@show')->name('listing.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
