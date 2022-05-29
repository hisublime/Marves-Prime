<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RencanaAksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rencana_aksi', function (Blueprint $table) {
            $table->increments('id_renaksi');
            $table->integer('id_proker');
            $table->string('nama_renaksi');
            // $table->string('id_renaksiinduk')->nullable();
            $table->string('pic');
            $table->date('tgl_mulai');
            $table->date('tgl_akhir');
            $table->string('status')->nullable();
            $table->string('tindak_lanjut')->nullable();
            $table->string('keterangan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rencana_aksi');
    }
}
