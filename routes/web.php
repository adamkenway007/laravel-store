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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'PageController@home_page') {
//     // return '<h1>Hi this is the most important laravel project</h1>';
// });

Route::get('/', function() {
	return view('pages.index');
    // return '<h1>Hi this is the most important laravel project in the about page</h1>';
});

Route::get('/about', function() {
	return view('pages.about');
    // return '<h1>Hi this is the most important laravel project in the about page</h1>';
});

Route::get('/services', function() {
	return view('pages.services');
    // return '<h1>Hi this is the most important laravel project in the services page</h1>';
});

Route::get('/services/{name}/{id}', function($name, $id) {
    return '<h1>My name is '.$name.' and My id is '.$id.'</h1>';
});