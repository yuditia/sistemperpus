<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        return view('backend.staff.index',[
            'staffs'=>Staff::latest()->filter(request(['search']))->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.staff.create');
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
            'username' => 'required  | min:5 | max:255',
            'password' => 'required |min:5|max:255',
            'name' => 'required ',
            'mobile' => 'required |max:14',
            'address' => 'required',
            
        ]);

        $validated['password'] = Hash::make($validated['password']);
        Staff::create($validated);

        return redirect('/perpus/staffs')->with('success','Registration Success!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        
        return view('backend.staff.edit',[
            'staff' =>$staff
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        $validated = $request->validate([
            'username' => 'required  | min:5 | max:255',
            'password' => 'required |min:5|max:255',
            'name' => 'required ',
            'mobile' => 'required |max:14',
            'address' => 'required',
            
        ]);
        $validated['password'] = Hash::make($validated['password']);
                
            $staff->update($validated);

            return redirect('/perpus/staffs')->with('success','Update Success!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        Staff::destroy($staff->id);

        return redirect('/perpus/staffs')->with('success','Data has been deleted!!');
    }
}
