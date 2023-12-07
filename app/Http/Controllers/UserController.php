<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        return view('user.login');
    }
    public function log(Request $req)
    {
        if (Auth::attempt($req->only(['email', 'password']))) {
            return redirect()->route('create');
        } else return redirect()->back();
    }
    public function register()
    {
        return view('user.register');
    }

    public function reg(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'email' => $req->email,
            'name' => $req->name,
            'password' => Hash::make($req->password),
        ]);
        return $this->log($req);
    }
}
