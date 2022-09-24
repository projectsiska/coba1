<?php

namespace Database\Seeders;
use App\Models\Pembayaran;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Periode;
use App\Models\Kelas;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Siswa::factory(10)->create();
        User::factory(3)->create();
        Periode::factory(8)->create();
        Kelas::factory(8)->create();
   

  User::create([
        'name'=> 'Admin Siska',
        'email'=> 'sh.fransiskadewi@gmail.com',
        'level'=> 'Administrator',
        'username'=> 'siska',
        'password'=> bcrypt('siska')
        ]);


    }
}
