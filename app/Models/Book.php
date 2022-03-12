<?php

namespace App\Models;

use App\Http\Controllers\JbukuController;
use App\Http\Controllers\RbukuController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $guarded = ['id'];

    public function jbuku()
    {
        return $this->belongsTo(Jbuku::class);
    }

    public function rbuku()
    {
        return $this->belongsTo(Rbuku::class);
    }

    public function pbook()
    {
        return $this->hasMany(Pbook::class);
    }

    public function breturn()
    {
        return $this->hasMany(Breturn::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('name','like','%' . $search .'%')
            ->orWhere('author','like','%' . $search .'%')
            ->orWhere('isbn','like','%' . $search .'%')
            ->orWhere('publisher','like','%' . $search .'%');
        });
    }

    
}
