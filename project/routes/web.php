<?php


use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
Route::view( '/' ,'home');

Route::prefix('posts')->controller(PostController::class)->group(function () {
    Route::get('/posts','index')->name('posts.index');
    Route::get('/{id}','show')->name('posts.show');
    Route::get('/create' , 'create')->middleware('auth')->name('posts.create');
    Route::post('/posts' , 'store')->middleware('auth')->name('posts.store');

});


Route::controller(RegisterController::class)->group(function () {
    Route::get('/register' ,'RegistrationPage')->name('register.form');
    Route::post('/register' , 'register')->name('register');

});


Route::controller(LoginController::class)->group(function () {
    Route::get('/login' , 'show')->name('login.form');
    Route::post('/login' , 'login')->name('login');
    Route::post('/logout' , 'logout')->name('logout');

});


Route::prefix('products')->controller(ProductController::class)->group(function () {
    Route::get( '/products' ,'index')->name('products.index');
    Route::get('/{id}' , 'show')->name('products.show');
    Route::get('/create', 'create')->name('products.create')->middleware('auth');
    Route::post('/products' ,'store')->name('products.store');

});












