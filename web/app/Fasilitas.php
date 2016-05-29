<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';
    protected $timestamps = false;
    protected $primaryKey = 'id_fasilitas';
    protected $incrementing = false;

    protected $fillable = [
    	'id_fasilitas',
    	'nama_fasilitas',
    	'harga',
    ];
}
