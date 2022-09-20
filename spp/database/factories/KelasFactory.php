<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
             
           
    'nama_kelas'=>$this->faker->randomelement(['IPA', 'IPS']," "),
    'slug'=>$this->faker->slug(),
    'wali_kelas'=>$this->faker->name(),
     
        ];
    }
}
