<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class pembayaran extends Model
{
     use HasFactory;
     use Sluggable;


    protected $guarded= ['id'];  
    protected $with= ['pembayaran'];   

    public function pembayaran()
    {
        return $this->belongsTo(pembayaran::class);
    }

     public function periode()
    {
        return $this->belongsTo(periode::class);
    }

      public function kelas()
    {
        return $this->belongsTo(pembayaran::class);
    }

     public function ketentuan()
    {
        return $this->belongsTo(ketentuan::class);
    }


      public function scopeFilter($query, array $filters)
    {

         /*  if(request('search')) {
            $query->where('pembayaran_id','like', '%'. request('search').'%')
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

            return $query->where('pembayaran_id','like', '%'. $search.'%')
                         ->where('periode_id','like', '%'. $search.'%')
                         ->where('spp','like', '%'. $search.'%')
                         ->where('denda','like', '%'. $search.'%')
                         ->where('lainnya','like', '%'. $search.'%')
                         ->where('total','like', '%'. $search.'%')
                         ->where('bukti','like', '%'. $search.'%')
                         ->where('status','like', '%'. $search.'%')
                         ;
        });

        $query->when($filters['pembayaran'] ?? false, function($query, $pembayaran){
            return $query->whereHas('pembayaran', function($query) use ($pembayaran) {
                         $query->where('slug', $pembayaran);
                         
            });
        });

    }

      public function getRouteKeyName()
    {
        return 'slug';
    }
 
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'periode',
                'source2' => 'id'
            ]
        ];
    }

}