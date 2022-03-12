<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breturn extends Model
{
    use HasFactory;
    protected $table = 'breturns';
    protected $guard = ['id'];
    protected $fillable = ['tkembali',
                            'denda',
                            'user_id',
                            'staff_id',
                            'book_id'
                        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function scopeFilter($query, array $filters)
    {
        
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->whereHas('user', function($query) use ($search){
              $query->where('name',$search);
            })->orWhereHas('staff',function($query) use ($search){
              $query->where('name',$search);
            })->orWhereHas('book',function($query) use ($search){
              $query->where('name',$search);
            });
          });

        
    }
}
