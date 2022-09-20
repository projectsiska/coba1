<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nis')->unique();
            $table->string('nama_siswa');
            $table->string('slug')->unique();
            $table->string('jk');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('telepon_ortu');
            $table->foreignId('kelas_id');
            $table->string('tahun_masuk');
            $table->string('status_byr');
            $table->string('status_siswa');
            $table->string('username')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
