<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
     use HasFactory;

    protected $guarded= ['id'];  
    protected $with= ['siswa'];   

    public function siswa()
    {
        return $this->belongsTo(siswa::class);
    }

     public function periode()
    {
        return $this->belongsTo(periode::class);
    }

      public function kelas()
    {
        return $this->belongsTo(siswa::class);
    }

     public function ketentuan()
    {
        return $this->belongsTo(ketentuan::class);
    }


      public function scopeFilter($query, array $filters)
    {

         /*  if(request('search')) {
            $query->where('siswa_id','like', '%'. request('search').'%')
                  ->orwhere('periode_id','like', '%'. request('search').'%')
                  ->orwhere('spp','like', '%'. request('search').'%')
                  ->orwhere('denda','like', '%'. request('search').'%')
                  ->orwhere('lainnya','like', '%'. request('search').'%')
                  ->orwhere('total','like', '%'. request('search').'%')
                  ->orwhere('bukti','like', '%'. request('search').'%')
                  ->orwhere('status','like', '%'. request('search').'%')
                    ;
        } */


        $query->when($filters['search'] ?? false, function($query, $search){

            return $query->where('siswa_id','like', '%'. $search.'%')
                         ->where('periode_id','like', '%'. $search.'%')
                         ->where('spp','like', '%'. $search.'%')
                         ->where('denda','like', '%'. $search.'%')
                         ->where('lainnya','like', '%'. $search.'%')
                         ->where('total','like', '%'. $search.'%')
                         ->where('bukti','like', '%'. $search.'%')
                         ->where('status','like', '%'. $search.'%')
                         ;
        });

        $query->when($filters['siswa'] ?? false, function($query, $siswa){
            return $query->whereHas('siswa', function($query) use ($siswa) {
                         $query->where('slug', $siswa);
                         
            });
        });

    }

}