<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRakorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rakor', function (Blueprint $table) {
            $table->increments('id_rakor');
            $table->integer('id_kegiatan');
            $table->string('topik');
            $table->string('pic');
            $table->string('lokasi');
            $table->time('waktu');
            $table->date('tgl_pelaksanaan');
            $table->string('kegiatan');
            $table->string('catatan');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rakor');
    }
}
