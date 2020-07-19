<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];

    public function pengguna(){
        return $this->belongsTo(Pengguna::class, 'id_pengguna','id');
    }

    public function proker (){
        return $this->belongsTo(Proker::class, 'id_proker','id');
    }

    public function revisi(){
        return $this->hasMany(Revisi::class, 'id_event','id');
    }

}
