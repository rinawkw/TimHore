<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->char('id_petugas', 10)->foreign()->references('id_petugas')->on('petugas');
            $table->char('id_wisma', 10)->foreign()->references('id_wisma')->on('wisma');
            $table->char('id_penginap', 20)->foreign()->references('id_penginap')->on('penginap');
            $table->integer('denda');
            $table->date('tanggal_checkin');
            $table->date('tanggal_checkout');
            $table->integer('total_pembayaran');
            $table->smallInteger('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transaksi');
    }
}
