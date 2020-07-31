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

Route::get('/', "MyController@home")->name('home');
Route::get('aboutme', "MyController@aboutme")->name('aboutme');
Route::get('sample', "MyController@sample")->name('sample');
Route::get('contact', "MyController@contact")->name('contact');