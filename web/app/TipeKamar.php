<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipeKamar extends Model
{
    protected $table = 'tipe_kamar';
    protected $timestamps = false;
    protected $primaryKey = 'id_tipe';
    protected $incrementing = false;

    protected $fillable = [
    	'id_tipe',
    	'nama_tipe',
    	'harga_tipe',
    ];
}
