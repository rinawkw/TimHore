<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_transaksi', function (Blueprint $table) {
            $table->increments('id_log');
            $table->integer('id_transaksi')->foreign()->references('id_transaksi')->on('transaksi');
            $table->timestamps('waktu');
            $table->string('action', 10);
            $table->char('id_penginap', 20)->foreign()->references('id_penginap')->on('penginap');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('log_transaksi');
    }
}
