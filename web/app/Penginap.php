<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penginap extends Model
{
    protected $table = 'penginap';
    protected $timestamps = false;
    protected $primaryKey = 'id_penginap';
    protected $incrementing = false;

    protected $fillable = [
    	'id_penginap',
    	'ktp',
    	'nama_penginap',
    	'alamat_penginap',
    	'telp_penginap',
    	'tanggal_lahir',
    ];
}
