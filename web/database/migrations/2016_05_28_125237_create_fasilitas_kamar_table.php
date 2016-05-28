<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFasilitasKamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas_kamar', function (Blueprint $table) {
            $table->char('id_fasilitas', 10)->primary()->foreign()->references('id_fasilitas')->on('fasilitas');
            $table->char('id_tipe', 10)->foreign()->references('id_tipe')->on('tipe_kamar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fasilitas_kamar');
    }
}
