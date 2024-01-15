<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('user.register');
    }

    public function create(RegisterFormRequest $request)
    {
        // dd($request->all());
        User::create([
            'name' =>  $request->name,
            'email' => $request->email,
            'is_admin' => false,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login.index');
    }
}
