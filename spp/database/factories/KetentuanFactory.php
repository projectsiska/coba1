<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class KetentuanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
             
           
    'nis'=>$this->faker->unique()->randomNumber(5, true),
    'nama_siswa'=>$this->faker->name(),
    'slug'=>$this->faker->slug(),
    'jk'=>$this->faker->randomelement(['male', 'female']),
    'alamat'=>$this->faker->address(),
    'telepon'=>$this->faker->phoneNumber() ,
    'nama_ayah'=>$this->faker->firstName($gender = 'male'),
    'nama_ibu'=>$this->faker->firstName($gender = 'female'),
    'telepon_ortu'=>$this->faker->phoneNumber() ,
    'kelas_id'=>$this->faker->randomNumber(1, 3),
    'tahun_masuk'=>'2020',
    'status_byr'=>$this->faker->randomelement(['Mandiri', 'Bantuan']),
    'status_siswa'=>$this->faker->randomelement(['Aktif', 'Alumni', 'Keluar']),
    'username'=>$this->faker->name(),
    'remember_token' => Str::random(10),
    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' // password
 
        ];
    }
}
