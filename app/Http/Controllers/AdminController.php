<?php

namespace App\Http\Controllers;
use App\Models\User;


class AdminController extends Controller
{
    public function index()
    {
        
        return view('AdminDashboard.AdminHome'); // Pass the $promotions variable to the view
    }

    public function addUser()
    {   $user = User::get();
        return view('AdminDashboard.addUser')->with('user', $user); 
    }

    

    
}
