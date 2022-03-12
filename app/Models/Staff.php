<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staff';
    protected $guarded = ['id'];
    
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
            return $query->where('username','like','%' . request('search') .'%')
            ->orWhere('name','like','%' . $search .'%')
            ->orWhere('mobile','like','%' . $search .'%')
            ->orWhere('address','like','%' . $search .'%');
        });
    }

    
}
