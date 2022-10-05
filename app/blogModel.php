<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogModel extends Model
{
    protected $table = 'blog';
    protected $fillable = ['*'];
    protected $dates = ['tgl', 'created_at', 'update_at'];

    public function categoriModels()
    {
        return $this->belongsTo(categoriModel::class, 'id_categori');
    }
}
