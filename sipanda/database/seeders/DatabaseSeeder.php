<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agenda;
use App\Models\User;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

     
    public function run()
    {
         //\App\Models\User::factory(6)->create(); 
        $faker = Faker::create('id_ID');
        Agenda::factory(10)->create();
        User::factory(8)->create();

        User::create([
        'name'=> 'Admin Siska',
        'email'=> 'sh.fransiskadewi@gmail.com',
        'level'=> 'Super Admin',
        'username'=> 'siska',
        'password'=> bcrypt('siska')
        ]);
    }
}
