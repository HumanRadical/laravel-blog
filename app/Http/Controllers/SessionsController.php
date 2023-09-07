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

        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/')->with('success', 'Welcome back!');
        }

        throw ValidationException::withMessages([
            'username' => 'We were not able to log you in with the provided credentials.'
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
