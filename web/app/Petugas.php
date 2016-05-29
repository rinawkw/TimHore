<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
    protected $timestamps = false;
    protected $primaryKey = 'id_petugas';
    protected $incrementing = false;

    protected $fillable = [
    	'id_petugas',
    	'nama_petugas',
    	'alamat_petugas',
    	'telp_petugas',
    	'password',
    ];
}
