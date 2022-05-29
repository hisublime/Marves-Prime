<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Turen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turen', function (Blueprint $table) {
            $table->increments('id_turen');
            $table->integer('id_proker');
            $table->string('nama_turen');
            $table->integer('id_renaksiinduk');
            $table->string('pic');
            $table->date('tgl_mulai_turen');
            $table->date('tgl_akhir_turen');
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
        Schema::dropIfExists('turen');
    }
}
