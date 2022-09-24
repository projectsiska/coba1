<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class kelas extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded=['id'];

     public function scopeFilter($query)
    {
          if(request('search')) {
            $query->where('nama_kelas','like', '%'. request('search').'%')
                  ->orwhere('wali_kelas','like', '%'. request('search').'%')
                
            ;
        }
    }

     public function getRouteKeyName()
    {
        return 'slug';
    }
 
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_kelas'
            ]
        ];
    }
    
}
