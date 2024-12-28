<?php

namespace App\Http\Controllers;
use App\Models\User ;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

use function Laravel\Prompts\password;

class registeruser extends Controller
{
    public function reg (){
        return view('auth.register') ;
    }


    public function  store (){
    $atrr =  request()->validate([
        'firstname' => ['required' , 'min:5'] , 
        'lastname' => ['required'], 
        'email' => ['required' , 'email'],
        'password' => ['required' , 'min:5']
    ]);
    $user =User::create($atrr);
    FacadesAuth::login($user);

    return redirect('/jobs');
    

    }
};
