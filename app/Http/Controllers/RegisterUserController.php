<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterUserController extends Controller
{
    public function addUser(Request $request)
    {
        $user = User::create(
            [
                'name' => request('name'),
                'email' => request('email'),
                'password' => Hash::make($request->input('password')),
                'user_role' => $request->input('user_role'),
            ]
        );
        return back()->with('success', 'Sucessfully added');
    }
    public function deleteUser(Request $request)
    {
        User::find($request->input('id'))->delete();
        return back()->with('success', 'Successfully deleted Item!');
    }
}
