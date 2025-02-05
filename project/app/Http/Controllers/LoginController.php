<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Facade;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function show (){
        return view('auth.login');
    }


    public function login (LoginRequest $request){
    
    $credenticals = $request -> validated();
    
    if ( ! Auth::attempt($credenticals)) {
        throw ValidationException::withMessages([
            'emaill' => 'your email is wrong',
            'password' => 'your pass is wrong'
        ]);
    }       
        request()->session()->regenerate();
        return redirect('/posts');
    }



    public function logout (){
        Auth::logout();

        return redirect('/posts');
    }
}
