<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pbook extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'pbooks';
    protected $casts = [
      'tpinjam' => 'datetime:m-d-Y',
      'tkembali' => 'datetime:m-d-Y',
  ];

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
        return $this->belongsTo(Staff::class,'staff_id');
    }
    public function book()
    {
      return $this->belongsTo(Book::class,'book_id');
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
