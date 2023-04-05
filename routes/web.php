<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\CatController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ThemeOptionController;

/*
||
*/
Route::middleware('auth') -> group (function(){
    Route::resource('/tag', TagController::class);
    Route::resource('/category', CatController::class);
    Route::resource('/post', PostController::class);
    Route::resource('/theme', ThemeOptionController::class);
});


Route::get('/',[HomeController::class, 'index']);
Route::get('/home',[HomeController::class, 'redirect']) ->middleware('auth','verified');
Route::post('/appointment',[HomeController::class, 'send']);
Route::get('/myappointment',[HomeController::class, 'myappointment']);
Route::get('/cancel_appoinment/{id}',[HomeController::class, 'apcancel']);

Route::get('/doctors',[FrontendController::class, 'doctors']);
Route::get('/about',[FrontendController::class, 'aboutUs']);
Route::get('/contact',[FrontendController::class, 'contactUs']);
Route::get('/blog',[FrontendController::class, 'showBlog']);
Route::get('/single/{slug}',[FrontendController::class, 'showBlogSingle']) -> name('blog.single');
Route::get('/post-search/{key}',[FrontendController::class, 'showBlogSingleBySearch']) -> name('blog.single.search');

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
