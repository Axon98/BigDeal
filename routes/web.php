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

Route::get('/information', 'PagesController@information')->name('information');

Route::get('/contact', 'PagesController@contact')->name('contact');

Route::get('/terms', 'PagesController@terms')->name('terms');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/policy', 'PagesController@policy')->name('policy');

Route::get('/listings', 'ListingController@index')->name('listing.index');

Route::any('/search', 'ListingController@search')->name('listing.search');

Route::get('/listing/{id}', 'ListingController@view')->name('view');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/listing/create', 'ListingController@create')->name('listing.create');

Route::get('/listing/edit/{id}', 'ListingController@edit')->name('listing.edit');

Route::get('/listing/show/{id}', 'ListingController@show')->name('listing.show');

Route::get('/profile', 'UserController@index')->name('profile.index');

Route::post('/profile', 'UserController@update')->name('profile.update');
