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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/main', function () {
    return view('main');
})->name('main');
Route::get('/company', function () {
    return view('company');
})->name('company');
Route::get('/news', function () {
    return view('news');
})->name('news');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/map', function () {
    return view('map');
})->name('map');
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');