<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\JenisAnggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.user.index',[
            'users'=>User::latest()->filter(request(['search']))->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.user.create',[
            'jenis_anggotas' => JenisAnggota::all()
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
            'name' => 'required ',
            'email' => 'required |email:dns',
            'jenis_anggota_id' => 'required'
            
        ]);

        
        $validated['password'] = Hash::make($validated['password']);
        
        User::create($validated);

        return redirect('/perpus/users')->with('success','Registration Success!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('backend.user.show',[
            'user' => $user,
            'jenis_anggota' => JenisAnggota::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('backend.user.edit',[
            'user' => $user,
            'jenis_anggota' => JenisAnggota::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            
            'password' => 'required |min:5|max:255',
            'name' => 'required ',
            'email' => 'required ',
            'jenis_anggota_id' => 'required'
            
        ]);

        
        $validated['password'] = Hash::make($validated['password']);
        
        $user->update($validated);

        return redirect('/perpus/users')->with('success','Update Success!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect('/perpus/users')->with('success','Data has been deleted!!');
    }
}
