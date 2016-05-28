<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipeKamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipe_kamar', function (Blueprint $table) {
            $table->char('id_tipe', 10)->primary();
            $table->string('nama_tipe', 20);
            $table->integer('harga_tipe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tipe_kamar');
    }
}
