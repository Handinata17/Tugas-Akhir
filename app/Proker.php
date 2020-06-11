<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proker extends Model
{
    protected $guarded = [];

    public function pengguna(){
        return $this->belongsTo(Pengguna::class, 'id_pengguna','id');
    }
}
