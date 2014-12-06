<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Show pages
Route::get('/', 'MastersController@master');

// Show Landing Page
Route::get('/', 'LandingsController@landing');

// Show Contact Us Page
Route::get('/contact', 'ContactsController@contact');

// Show About Us Page
Route::get('/about', 'AboutsController@about');

// Show Bios Page
Route::get('/about/bio/{stylist}', 'BiosController@bio');
