<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamar';
    protected $timestamps = false;
    protected $primaryKey = 'id_kamar';
    protected $incrementing = false;

    protected $fillable = [
    	'id_kamar',
    	'id_tipe',
    	'id_wisma',
    ];
}
