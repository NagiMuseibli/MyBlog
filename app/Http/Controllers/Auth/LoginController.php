<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('user.login');
    }

    public function login(LoginFormRequest $request)
    {
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->back()->with('danger_login', 'Invalid email or password');
        } elseif (Auth::user()->is_admin == false) {
            return "Successfully logged in to User page";
        } elseif (Auth::user()->is_admin == true) {
            return "Successfully logged in to Admin page";
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login.index');
    }
}
