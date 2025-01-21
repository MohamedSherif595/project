<?php


use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\jobcontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\registeruser;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

Route::get('/post', [PostController::class, 'index']);
Route::get('/post/{id}', [postController::class , 'UserInfo']);
route::get('/create' , [PostController::class , 'create'])->middleware('auth');
Route::post('/post' , [PostController::class , 'store'])->middleware('auth');
Route::get('/register' , [RegisterController::class, 'RegistrationPage']);
Route::post('/register' , [RegisterController::class, 'register']);
Route::get('/login' , [LoginController::class , 'show'])->name('login');
Route::post('/login' , [LoginController::class , 'login']);
Route::post('/logout' , [LoginController::class , 'logout']);




