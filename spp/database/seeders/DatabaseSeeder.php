<?php

namespace Database\Seeders;
use App\Models\Pembayaran;
use App\Models\User;
use App\Models\Siswa;
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
      /*   Kelas::create([
            'nama_kelas' =>'IPA 2',
            'slug' =>'IPA-2',
            'wali_kelas' =>'Ghani'

        ]);

        Kelas::create([
            'nama_kelas' =>'IPS 2',
            'slug' =>'IPS-2',
            'wali_kelas' =>'Yahya'

        ]);

        kelas::create([
            'nama_kelas' =>'IPA 3',
            'slug' =>'IPA-3',
            'wali_kelas' =>'Arnold'

        ]);


        siswa::create([
        'nis'=>'002144',
        'nama_siswa'=>'Dhena',
        'slug'=>'det-002144',
        'jk'=>'P',
        'alamat'=>'Panjaitan',
        'telepon'=>'81002',
        'nama_ayah'=>'Dhio',
        'nama_ibu'=>'Dhella',
        'telepon_ortu'=>'08221',
        'kelas_id'=>'1',
        'tahun_masuk'=>'2020',
        'status'=> 'Bantuan Pemerintah',
        'username'=>'dhena',
        'password'=>bcrypt('dhena')
        ]);

        siswa::create([
        'nis'=>'003881',
        'nama_siswa'=>'Zidan',
        'slug'=>'det-003881',
        'jk'=>'L',
        'alamat'=>'Hidayah',
        'telepon'=>'819992',
        'nama_ayah'=>'Erno',
        'nama_ibu'=>'Gina',
        'telepon_ortu'=>'0894',
        'kelas_id'=>'4',
        'tahun_masuk'=>'2020',
        'status'=> 'Bantuan Pemerintah',
        'username'=>'zidan',
        'password'=>bcrypt('zidan')
        ]);
 */

 


    }
}
