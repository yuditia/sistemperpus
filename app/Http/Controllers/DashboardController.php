<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Breturn;
use App\Models\Pbook;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::all();
        $staff = Staff::all();
        $book = Book::all();
        $pbook = Pbook::all();
        $return = Breturn::all();
        return view('backend.dashboard.index',[
            'users'=>$user->count(),
            'staffs'=>$staff->count(),
            'books'=>$book->count(),
            'pbooks'=>Pbook::all(),
            'returns'=>Breturn::all()
        ]);
    }

    
}
