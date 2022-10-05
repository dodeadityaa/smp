<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilaiModel extends Model
{
    protected $table = 'nilai';
    protected $fillable = ['*'];
    protected $dates = ['tgl', 'created_at', 'update_at'];
}
