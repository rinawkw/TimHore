<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomplainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komplain', function (Blueprint $table) {
            $table->char('id_komplain', 10)->primary();
            $table->char('id_petugas', 10)->foreign()->references('id_petugas')->on('petugas');
            $table->char('id_penginap', 20)->foreign()->references('id_penginap')->on('penginap');
            $table->text('isi_komplain');
            $table->date('tanggal_komplain');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('komplain');
    }
}
