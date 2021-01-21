<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// //////// proclinic //////////////
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

Route::get('/doctorProfile', function () {
    return view('proclinic.doctorProfile');
});



//////////// control //////////////////

Route::get('/control', function () {
    return view('control.home');
});

//resource controller for employee
Route::resource("employees",Controllers\EmployeeController::class);
Route::resource("patients",Controllers\PatientController::class);
Route::resource("appointments",Controllers\AppointmentController::class);
Route::resource("books",Controllers\BookController::class);
Route::resource("emppatients",Controllers\EmppatientController::class);
//login Admin
Route::get('/loginEmp', function () {
    return view('loginEmp');
});
Route::post("/loginEmp",[App\Http\Controllers\EmployeeController::class,'loginEmp']);
Route::get('/editMedicine/{id}',[App\Http\Controllers\EmppatientController::class,'edit'] )->name('editMedecine');







