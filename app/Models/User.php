<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Contracts\Auth\Authenticatable;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $guarded = ['id'];

    public function jenis_anggota()
    {
        return $this->belongsTo(JenisAnggota::class);
    }

    public function pbook()
    {
        return $this->hasMany(Pbook::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('name','like','%' . request('search') .'%')
            ->orWhere('email','like','%' . $search .'%');
        });
    }
}
