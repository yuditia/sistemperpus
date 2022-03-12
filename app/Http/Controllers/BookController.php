<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Jbuku;
use App\Models\Rbuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.book.index',[
            'books'=> Book::latest()->filter(request(['search']))->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.book.create',[
            'jbukus'=>Jbuku::all(),
            'books'=>Book::all(),
            'rbukus'=>Rbuku::all()
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
            
            
            'name' => 'required ',
            'author' => 'required',
            'publisher'=>'required',
            'isbn'=>'required',
            'image'=>'image | file| max:1024',
            'jbuku_id' => 'required',
            'rbuku_id' => 'required'
            
        ]);
        if($request->file('image')){
            $validated['image'] = $request->file('image')->store('book-image');
        } else{
            $validated['image'] = Book::all();
        }
        Book::create($validated);

        return redirect('/perpus/books')->with('success','Registration Book Success!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('backend.book.show',[
            'jbukus'=>Jbuku::all(),
            'book'=>$book,
            'rbukus'=>Rbuku::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('backend.book.edit',[
            'book' => $book,
            'jbukus'=>Jbuku::all(),
            'rbukus'=>Rbuku::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            
            
            'name' => 'required ',
            'author' => 'required',
            'publisher'=>'required',
            'isbn'=>'required',
            'image'=>'image | file| max:1024',
            'jbuku_id' => 'required',
            'rbuku_id' => 'required'
            
        ]);
        if($request->file('image')){
            $validated['image'] = $request->file('image')->store('book-image');
        } 
        $book->update($validated);

        return redirect('/perpus/books')->with('success','Update Book Success!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        Book::destroy($book->id);

        return redirect('/perpus/books')->with('success','Book has been deleted!!');
    }
}
