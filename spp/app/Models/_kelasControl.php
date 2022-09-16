<?php

namespace App\Models;
 
class kelasControl 
{
     private static $kelas_posts= [
    [
        "id_kelas" => "kel01",
        "slug" => "detail-kel01",
        "nama_kelas" => "IPA 1",
        "Wali_kelas" => "Santi"
    ],
    [
        "id_kelas" => "kel02",
        "slug" => "detail-kel02",
        "nama_kelas" => "IPs 1",
        "Wali_kelas" => "Tian"
    ]
     ];

     
    public static function all()
    {
        return collect(self::$kelas_posts);
    }

    public static function find($slug)
    {
        $kelas= static::all();

        // $carian=[];
        // foreach ($kelas as $k) {
        //     if($k["slug"]== $slug){
        //         $carian = $k;
        //     }
        // }

        return $kelas->firstwhere('slug',$slug);
    }
}
