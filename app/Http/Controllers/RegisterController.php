<?php

namespace App\Http\Controllers;

use App\Models\JenisAnggota;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('backend.register.index',[
            'jenis'=>JenisAnggota::all()
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            
            'password' => 'required |min:5|max:255',
            'confirm_password'=>'required |same:password',
            'name' => 'required ',
            'email' => 'required |email|unique:users',
            'jenis_anggota_id' => 'required'
            
        ]);

        $validated['password'] = Hash::make($validated['password']);
        
        User::create($validated);

        return redirect('/register')->with('success','Registration Success!!');
    }
}
