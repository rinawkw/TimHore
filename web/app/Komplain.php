<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komplain extends Model
{
    protected $table = 'komplain';
    protected $timestamps = false;
    protected $primaryKey = 'id_komplain';
    protected $incrementing = false;

    protected $fillable = [
    	'id_komplain',
    	'id_petugas',
    	'id_penginap',
    	'isi_komplain',
    	'tanggal_komplain',
    ];
}
