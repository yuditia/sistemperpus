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
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/perpus/dashboard');
        }
 
        return back()->with('loginError','Login Fails');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('auth/login');
    }

}
