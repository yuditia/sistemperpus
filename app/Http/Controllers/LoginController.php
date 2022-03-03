<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Contracts\Auth\Authenticatable;

class LoginController extends Controller
{
    public function index()
    {
        return view('backend.login.index',[
            'user'=>User::all()
        ]);
    } 
    
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/dashboard');
        }
 
        return back()->with('loginError','Login Fail');
    }

}
