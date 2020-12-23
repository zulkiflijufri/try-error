<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function index()
    {
        return view('auth.login');
    }

    public function store()
    {
        $this->validate(request(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        $credential = request()->only(['username', 'password']);

        if (!auth()->attempt($credential)) {
            return back()->withError('username or password is wrong');
        }

        return redirect()->intended('/');
    }

    public function logout()
    {
        auth()->logout();

        return redirect('login');
    }
}
