<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Pbook;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        return view('backend.pinjam.index',[
            'pinjams' => Pbook::with(['user', 'staff'])->latest()->filter(request(['search']))->paginate(10),
            
            
        ]);

        

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pinjam.create',[
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
            'tpinjam' => 'required',
            'tkembali' => 'required',
            'user_id' => 'required ',
            'staff_id' => 'required',
            'book_id' => 'required',
            
        ]);
            
            Pbook::create($validated);
    
            return redirect('/perpus/pinjams')->with('success','Registration Success!!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pbook  $pbook
     * @return \Illuminate\Http\Response
     */
    public function show(Pbook $pbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pbook  $pbook
     * @return \Illuminate\Http\Response
     */
    public function edit(Pbook $pinjam)
    {
        
        return view('backend.pinjam.edit',[
            'pbook'=>$pinjam,
            'books'=>Book::all(),
            'users'=>User::all(),
            'staffs'=>Staff::all()

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pbook  $pbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pbook $pinjam)
    {
        
        $validated = $request->validate([
            'tpinjam' => 'required',
            'tkembali' => 'required',
            'user_id' => 'required ',
            'staff_id' => 'required',
            'book_id' => 'required',
            
        ]);
            
            $pinjam->update($validated);
    
            return redirect('/perpus/pinjams')->with('success','update Success!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pbook  $pbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pbook $pinjam)
    {
        Pbook::destroy($pinjam->id);

        return redirect('/perpus/pinjams')->with('success','Data has been deleted!!');
    }
}
