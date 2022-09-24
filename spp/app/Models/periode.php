<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class periode extends Model
{
    use HasFactory;

      protected $guarded= ['id'];  

   

    public function scopeFilter($query)
    {
          if(request('search')) {
            $query->where('bulan','like', '%'. request('search').'%')
                  ->orwhere('tahun','like', '%'. request('search').'%')
                 
            ;
        }
    }

      public function getRouteKeyName()
    {
        return 'id';
    }
}
