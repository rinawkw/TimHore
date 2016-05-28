<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamar', function (Blueprint $table) {
            $table->char('id_kamar', 10)->primary();
            $table->char('id_tipe', 10)->foreign()->references('id_tipe')->on('tipe_kamar');
            $table->char('id_wisma', 10)->foreign()->references('id_wisma')->on('wisma');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kamar');
    }
}
