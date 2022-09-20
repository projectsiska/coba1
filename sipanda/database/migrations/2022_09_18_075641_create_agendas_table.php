<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->time('jam');
            $table->string('acara');
            $table->string('tempat');
            $table->string('penyelenggara');
            $table->enum('disposisi', ['Super Admin', 'Admin', 'Kabid PPM','Kabid PPEPD','Kabid Litbang','Kabid PSI', 'Sekre','Kaban']);
            $table->enum('kehadiran', ['Mewakili', 'Hadir', 'Bersama Saya','Utus JFT','Utus Staf']);
            $table->string('keterangan');
            $table->string('user_id');
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
        Schema::dropIfExists('agendas');
    }
}
