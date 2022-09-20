<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    use HasFactory;

     protected $guarded=['id'];

     public function scopeFilter($query)
    {
          if(request('search')) {
            $query->where('tanggal','like', '%'. request('search').'%')
                  ->orwhere('jam','like', '%'. request('search').'%')
                  ->orwhere('acara','like', '%'. request('search').'%')
                  ->orwhere('tempat','like', '%'. request('search').'%')
                  ->orwhere('penyelenggara','like', '%'. request('search').'%')
                  ->orwhere('disposisi','like', '%'. request('search').'%')
                  ->orwhere('kehadiran','like', '%'. request('search').'%')
                  ->orwhere('keterangan','like', '%'. request('search').'%')
                
            ;
        }
    }
 
     public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->Attributes['tanggal'])
        ->translatedFormat('l, d F Y');
         return Carbon::parse($this->Attributes['jam'])
        ->translatedFormat('H');
    } 

    
}
