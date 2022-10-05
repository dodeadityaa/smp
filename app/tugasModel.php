<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tugasModel extends Model
{
    protected $table = 'tugas';
    protected $fillable = ['*'];
    protected $dates = ['tgl', 'created_at', 'update_at'];
}
