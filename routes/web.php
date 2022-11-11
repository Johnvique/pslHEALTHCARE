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
Route::get('/about_us', function () {
    return view('about_us');
});
Route::get('/book_appointment', function () {
    return view('book_appointment');
});
Route::get('/contact_us', function () {
    return view('contact_us');
});
Route::get('/our_specialists', function () {
    return view('our_specialists');
});
Route::get('/pharmacy', function () {
    return view('pharmacy');
});
Route::get('/various_departments', function () {
    return view('various_departments');
});
Route::get('/what_we_offer', function () {
    return view('what_we_offer');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
