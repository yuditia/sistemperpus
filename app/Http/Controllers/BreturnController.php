<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Breturn;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;

class BreturnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pengembalian.index',[
            'breturns'=>Breturn::with(['user','book','staff'])->latest()->filter(request(['search']))->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pengembalian.create',[
            'books'=>Book::all(),
            'users'=>User::all(),
            'staffs'=>Staff::all()
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
            'tkembali' => 'required',
            'denda'=>'required',
            'user_id' => 'required ',
            'staff_id' => 'required',
            'book_id' => 'required',
            
        ]);
            
            Breturn::create($validated);
    
            return redirect('/perpus/returns')->with('success','Registration Success!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Breturn  $breturn
     * @return \Illuminate\Http\Response
     */
    public function show(Breturn $breturn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Breturn  $breturn
     * @return \Illuminate\Http\Response
     */
    public function edit(Breturn $return)
    {
        return view('backend.pengembalian.edit',[
            'returns'=>$return,
            'books'=>Book::all(),
            'users'=>User::all(),
            'staffs'=>Staff::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Breturn  $breturn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Breturn $return)
    {
        
        $validated = $request->validate([
            'tkembali' => 'required',
            'denda'=>'required',
            'user_id' => 'required ',
            'staff_id' => 'required',
            'book_id' => 'required',
            
        ]);
            
            $return->update($validated);
    
            return redirect('/perpus/returns')->with('success','Update Success!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Breturn  $breturn
     * @return \Illuminate\Http\Response
     */
    public function destroy(Breturn $return)
    {
        Breturn::destroy($return->id);

        return redirect('/perpus/returns')->with('success','Data has been deleted!!');
    }
}
