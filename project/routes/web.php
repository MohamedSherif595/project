<?php


use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;

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












