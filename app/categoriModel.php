<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoriModel extends Model
{
    protected $table = 'categori';
    protected $fillable = ['*'];
    protected $dates = ['created_at', 'update_at'];
}
