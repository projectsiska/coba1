<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $guarded=['id'];

     public function scopeFilter($query)
    {
          if(request('search')) {
            $query->where('nama_kelas','like', '%'. request('search').'%')
                  ->orwhere('wali_kelas','like', '%'. request('search').'%')
                
            ;
        }
    }
}
