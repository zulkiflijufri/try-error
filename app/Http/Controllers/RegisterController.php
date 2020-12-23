<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'username' => request('username'),
            'password' => Hash::make(request('password'))
        ]);

        return redirect('/login');
    }
}
