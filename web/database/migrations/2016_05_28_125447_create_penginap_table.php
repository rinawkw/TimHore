<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenginapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penginap', function (Blueprint $table) {
            $table->char('id_penginap', 20)->primary();
            $table->char('ktp', 20);
            $table->string('nama_penginap', 20);
            $table->string('alamat_penginap', 30);
            $table->string('telp_penginap', 14);
            $table->date('tanggal_lahir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('penginap');
    }
}
