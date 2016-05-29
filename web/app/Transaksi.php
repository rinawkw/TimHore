<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $timestamps = false;
    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
    	'id_transaksi',
    	'id_petugas',
    	'id_wisma',
    	'id_penginap',
    	'denda',
    	'tanggal_checkin',
    	'tanggal_checkout',
    	'total_pembayaran',
    	'status',
    ];
}
