<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => ['required', 'exists:users,username'],
            'password' => ['required']
        ]);
        
        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'username' => 'We were not able to log you in with the provided credentials.'
            ]);
        }

        session()->regenerate();
        return redirect('/')->with('success', 'Welcome back!');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
