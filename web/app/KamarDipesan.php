<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KamarDipesan extends Model
{
    protected $table = 'kamar_dipesan';
    protected $timestamps = false;
    protected $primaryKey = NULL;
    protected $incrementing = false;

    protected $fillable = [
    	'id_kamar',
    	'id_transaksi',
    ];
}
