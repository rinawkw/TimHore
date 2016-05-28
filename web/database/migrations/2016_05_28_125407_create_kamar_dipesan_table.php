<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKamarDipesanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamar_dipesan', function (Blueprint $table) {
            $table->char('id_kamar', 10)->foreign()->references('id_kamar')->on('kamar');
            $table->integer('id_transaksi')->foreign()->references('id_transaksi')->on('transaksi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kamar_dipesan');
    }
}
