<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengumumanModel extends Model
{
    protected $table = 'pengumuman';
    protected $fillable = ['*'];
    protected $dates = ['tgl', 'created_at', 'update_at'];
}
