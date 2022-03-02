<?php

namespace App\Models;

use App\Http\Controllers\BookController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jbuku extends Model
{
    use HasFactory;
    protected $table = 'jbukus';
    protected $guarded = ['id'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
