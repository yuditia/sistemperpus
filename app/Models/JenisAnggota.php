<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisAnggota extends Model
{
    use HasFactory;
    protected $table = 'jenis_anggotas';
    protected $guarded = ['id'];
    
    public function user()
    {
        return $this->hasMany(User::class);
    }
    
    
}
