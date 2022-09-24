<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ketentuan extends Model
{
     use HasFactory;

    protected $guarded=['id'];

     public function scopeFilter($query)
    {
          if(request('search')) {
            $query->where('spp','like', '%'. request('search').'%')
                  ->orwhere('denda','like', '%'. request('search').'%')
                  ->orwhere('uang_lainnya','like', '%'. request('search').'%')
                  ->orwhere('keterangan','like', '%'. request('search').'%')
                
            ;
        }
    }

     public function getRouteKeyName()
    {
        return 'slug';
    }
    
}
