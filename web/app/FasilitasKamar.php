<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasKamar extends Model
{
    protected $table = 'fasilitas_kamar';
    protected $timestamps = false;
    protected $primaryKey = 'id_fasilitas';
    protected $incrementing = false;

    protected $fillable = [
    	'id_fasilitas',
    	'id_tipe',
    ];
}
