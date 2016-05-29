<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogTransaksi extends Model
{
    protected $table = 'log_transaksi';
    protected $timestamps = false;
    protected $primaryKey = 'id_log';

    protected $fillable = [
    	'id_log',
    	'id_transaksi',
    	'waktu',
    	'action',
    	'id_penginap',
    ];
}
