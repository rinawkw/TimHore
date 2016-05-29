<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CounterTransaksi extends Model
{
    protected $table = 'counter_transaksi';
    protected $timestamps = false;
    protected $primaryKey = 'id_counter';

    protected $fillable = [
    	'id_counter',
    	'waktu_counter',
    	'counter',
    ];


}
