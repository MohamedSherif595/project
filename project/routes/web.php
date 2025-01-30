<?php
use App\Http\Controllers\PostController;
<<<<<<< Updated upstream
use App\Http\Controllers\jobcontroller;
use App\Http\Controllers\loginusercontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\registeruser;
use Illuminate\Support\Facades\Route;

route::view('/' ,'home');
Route::get('/', [PostController::class, 'index']);
Route::get('/{post}', [PostController::class, 'info']);
route::get('/register' , [registeruser::class , 'reg']);
route::post('/register' , [registeruser::class , 'store']);
route::get('/login' , [loginusercontroller::class , 'log']);
route::post('/login' , [loginusercontroller::class , 'store']);
route::post('/logout' , [loginusercontroller::class , 'destroy']);
=======

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
Route::view( '/' ,'home');

Route::controller(PostController::class)->group(function () {
    Route::get('/post','index')->name('posts.index');
    Route::get('/post/{id}','show')->name('posts.show');
    Route::get('/create' , 'create')->middleware('auth')->name('posts.create');
    Route::post('/post' , 'store')->middleware('auth')->name('posts.store');

});


Route::controller(RegisterController::class)->group(function () {
    Route::get('/register' ,'RegistrationPage')->name('register');
    Route::post('/register' , 'register');

});


Route::controller(LoginController::class)->group(function () {
    Route::get('/login' , 'show')->name('login');
    Route::post('/login' , 'login');
    Route::post('/logout' , 'logout')->name('logout');

});


Route::controller(ProductController::class)->group(function () {
    Route::get('/product' , 'index')->name('products.index');
    Route::get('/product/{id}' , 'show')->name('products.show');
    Route::get('products/create', 'create')->name('products.create')->middleware('auth');
    Route::post('/product' , 'store')->name('products.store');

});








>>>>>>> Stashed changes




