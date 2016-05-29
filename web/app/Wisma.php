<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisma extends Model
{
    protected $table = 'wisma';
    protected $timestamps = false;
    protected $primaryKey = 'id_wisma';
    protected $incrementing = false;

    protected $fillable = [
    	'id_wisma',
    	'nama_wisma',
    ];
}
