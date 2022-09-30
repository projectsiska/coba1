<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class siswa extends Model
{
    use HasFactory;
    
    use Sluggable;

    protected $guarded= ['id']; 
    protected $with= ['kelas']; 

    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }

    public function scopeFilter($query)
    {
          if(request('search')) {
            $query->where('nama_siswa','like', '%'. request('search').'%')
                  ->orwhere('nis','like', '%'. request('search').'%')
                  ->orwhere('jk','like', '%'. request('search').'%')
                  ->orwhere('alamat','like', '%'. request('search').'%')
                  ->orwhere('telepon','like', '%'. request('search').'%')
                  ->orwhere('nama_ayah','like', '%'. request('search').'%')
                  ->orwhere('nama_ibu','like', '%'. request('search').'%')
                  ->orwhere('kelas_id','like', '%'. request('search').'%')
                  ->orwhere('tahun_masuk','like', '%'. request('search').'%')
                  ->orwhere('status_byr','like', '%'. request('search').'%')
                  ->orwhere('status_siswa','like', '%'. request('search').'%')
            ;
        }
    }

     public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nis'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

?>