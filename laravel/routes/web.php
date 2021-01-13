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
    return view('proclinic.home');
});


Route::get('/ProclinicHome', function () {
    return view('proclinic.home');
});

Route::get('/doctor', function () {
    return view('proclinic.doctor');
});
Route::get('/departments', function () {
    return view('proclinic.departments');
});
Route::get('/blogs', function () {
    return view('proclinic.blog');
});
Route::get('/contact', function () {
    return view('proclinic.contact');
});
Route::get('/about', function () {
    return view('proclinic.about');
});
Route::get('/appointment', function () {
    return view('proclinic.appointment');
});

