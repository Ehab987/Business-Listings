<?php

use App\Mail\NotifyEmail;
use Illuminate\Support\Facades\Mail;


Auth::routes();
Route::get('/','Front\ListingsController@index')->name('Listings');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/listings/create','Front\ListingsController@create')->name('create.Listing');

Route::post('/listings/store','Front\ListingsController@store')->name('listing.store');

Route::get('/listings/edit/{id}','Front\ListingsController@edit')->name('listing.edit');
Route::post('/listings/update/{id}','Front\ListingsController@update')->name('update.Listing');

Route::get('/listings/delete/{id}','Front\ListingsController@delete')->name('delete.Listing');

Route::get('/listings/show/{id}','Front\ListingsController@show')->name('listing.show');