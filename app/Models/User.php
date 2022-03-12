<?php

namespace App\Models;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $table = 'users';
    protected $guarded = ['id'];
    protected $hidden = ['password'];

    public function jenis_anggota()
    {
        return $this->belongsTo(JenisAnggota::class);
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
            return $query->where('name','like','%' . request('search') .'%')
            ->orWhere('email','like','%' . $search .'%');
        });
    }
}
