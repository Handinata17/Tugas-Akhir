<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revisi extends Model
{
    protected $guarded = [];

    public function pengguna(){
        return $this->belongsTo(Pengguna::class, 'id_pengguna','id');
    }

    public function event(){
        return $this->belongsTo(Event::class, 'id_event','id');
    }
}
