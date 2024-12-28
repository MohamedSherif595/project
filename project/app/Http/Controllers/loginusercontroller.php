<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Facade;
use Illuminate\Validation\ValidationException;

class loginusercontroller extends Controller
{
    public function log (){
        return view('auth.login');
    }


    public function store (){
        $atrr = request()->validate([
            'email' => ['required', 'email'],
            'password' =>['required']
        ]);
    
    if ( ! Auth::attempt($atrr)) {
        throw ValidationException::withMessages([
            'emaill' => 'your email is wrong',
            'password' => 'your pass is wrong'
        ]);
    }       


        request()->session()->regenerate();
        return redirect('/');
    }



    public function destroy (){
        Auth::logout();

        return redirect('/');
    }
}
