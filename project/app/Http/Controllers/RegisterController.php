<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
class RegisterController extends Controller
{
    /**
     * Handle a registration request.
     *
     * @param  \App\Http\Requests\RegisterRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    
    public function RegistrationPage() {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        // Validation is automatically handled by the RegisterRequest class

        // Create a new user with first_name, last_name, and other fields
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Authenticate the user
        Auth::login($user);

        // Redirect to the dashboard or any other page
        return redirect('/post');
    }
}
