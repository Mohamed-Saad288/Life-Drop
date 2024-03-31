<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('user.login');
    }
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($attributes))
        {
            session()->regenerate();
            return redirect('/')->with('success','Welcome Again');
        }
        return back()
            ->withInput()
            ->withErrors(['email' => 'something wrong']);
    }
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success','Good bye !');
    }
}
