<?php
use App\Http\Controllers\PostController;
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




