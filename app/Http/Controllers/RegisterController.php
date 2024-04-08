<?php

namespace App\Http\Controllers;

use App\Models\User;
use Couchbase\Role;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('user.register');
    }
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' =>'required|min:7|max:255'
        ]);

        $user = User::create($attributes);
        auth()->login($user);
        return redirect('/')->with('success','your account has been created');
    }
}
