<?php

namespace App\Models;
 
class periodeControl 
{
     private static $periode_posts= [
    [
        "id_periode" => "per001",
        "slug" => "detail-per001",
        "bulan" => "Februari",
        "tahun" => "2022"
    ],
    [
        "id_periode" => "per002",
        "slug" => "detail-per002",
        "bulan" => "Maret",
        "tahun" => "2022"
    ]
     ];

     
    public static function all()
    {
        return collect(self::$periode_posts);
    }

    public static function find($slug)
    {
        $periode= static::all();

        // $carian=[];
        // foreach ($periode as $k) {
        //     if($k["slug"]== $slug){
        //         $carian = $k;
        //     }
        // }

        return $periode->firstwhere('slug',$slug);
    }
}
