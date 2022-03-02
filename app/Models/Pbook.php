<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pbook extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function dpinjam()
    {
        return $this->belongsTo(Dpinjam::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function scopeFilter($query, array $filters)
    {
        
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('users.name','like','%' . $search .'%')
            ->orWhereHas('name','like','%' . $search .'%');
        });
    }
    
}
