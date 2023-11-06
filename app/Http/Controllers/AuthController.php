<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; // Move this line here
use Illuminate\Http\Request;

// ...


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password');



        if (Auth::attempt($credentials)) {
            // Authentication passed...


            return redirect()->intended('/menu');
        }

        return back()->withErrors(['name' => 'Invalid credentials']);
    }
    public function logout()
    {
        Auth::logout(); // Log the user out

        return redirect('/login'); // Redirect to the login page or any other desired page
    }

    public function Clogin(){
        return view('customerlogin');
    }

    public function userProfile()
    {
        return view('userProfile');
    }

    public function userReg()
    {   
        

        return view('userRegister');
    }
}
