<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramKerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_kerja', function (Blueprint $table) {
            $table->increments('id_proker');
            $table->string('eselon1');
            $table->string('eselon2');
            $table->string('nama_proker');
            $table->string('substansi');
            $table->string('pic_proker');
            $table->string('kolaborator')->nullable();
            $table->date('tgl_mulai');
            $table->date('tgl_akhir');
            $table->string('kategori');
            $table->string('status')->nullable();
            $table->string('progres')->nullable();
            $table->string('kendala')->nullable();
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
        Schema::dropIfExists('program_kerja');
    }
}
