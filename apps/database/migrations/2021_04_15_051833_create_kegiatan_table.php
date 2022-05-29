<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->increments('id_kegiatan');
            $table->integer('id_renaksi')->nullable();
            $table->integer('id_proker');
            $table->string('nama_kegiatan');
            $table->string('lokasi');
            $table->string('pic');
            $table->date('tgl_mulai');
            $table->date('tgl_akhir');
            $table->string('keterangan')->nullable();
            $table->string('status')->nullable();
            $table->date('tgl_mulairealisasi')->nullable();
            $table->date('tgl_akhirrealisasi')->nullable();
            $table->string('alasan')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kegiatan');
    }
}
