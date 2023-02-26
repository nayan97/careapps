<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

/*
|

|
*/

Route::get('/',[HomeController::class, 'index']);
Route::get('/home',[HomeController::class, 'redirect']);
Route::post('/appointment',[HomeController::class, 'send']);
Route::get('/myappointment',[HomeController::class, 'myappointment']);
Route::get('/cancel_appoinment/{id}',[HomeController::class, 'apcancel']);

Route::get('/add_doctor_view',[AdminController::class, 'addview']);
Route::post('/upload_doctor',[AdminController::class, 'upload']);
Route::get('/showappoinments',[AdminController::class, 'showappoinments']);
Route::get('/approved/{id}',[AdminController::class, 'approved']);
Route::get('/cancel/{id}',[AdminController::class, 'cancel']);
Route::get('/alldoctor',[AdminController::class, 'alldoctor']);
Route::get('/deletedoctor/{id}',[AdminController::class, 'deletedoctor']);
Route::get('/updatedoctor/{id}',[AdminController::class, 'updatedoctor']);
Route::post('/editdoctor/{id}',[AdminController::class, 'editdoctor']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
