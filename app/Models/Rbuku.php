<?php

namespace App\Models;

use App\Http\Controllers\BookController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rbuku extends Model
{
    use HasFactory;
    protected $table = 'rbukus';
    protected $guarded = ['id'];

    public function books()
    {
        return $this->hasMany(BookController::class);
    }
    
}
