<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilaisiswaModel extends Model
{
    protected $table = 'nilai_siswa';
    protected $fillable = ['*'];
    protected $dates = ['created_at', 'update_at'];

    public function nilaiModels()
    {
        return $this->hasMany(nilaiModel::class, 'id_nilai');
    }
}
