<?php

namespace App\Http\Controllers;

use App\Models\Pbook;
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
        // $pbooks = DB::table('pbooks')
        //     ->join('users', 'pbook.user_id', '=', 'users.id')
        //     ->join('staffs', 'pbook.staff_id', '=', 'staffs.id')
        //     ->join('dpinjams','pbook.id', '=', 'dpinjams.pbook_id')
        //     ->where('users.name',$request->search)
        //     ->orWhere('staff.name',$request->search)
        //     ->select('pbooks.', 'users.name', 'staffs.name','dpinjams')
        //     ->get();

        return view('backend.pinjam.index',[
            'pinjams' => Pbook::latest()->filter(request(['search']))->paginate(10)
        ]);

        

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Pbook $pbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pbook  $pbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pbook $pbook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pbook  $pbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pbook $pbook)
    {
        //
    }
}
