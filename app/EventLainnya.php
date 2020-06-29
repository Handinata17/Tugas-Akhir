<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventLainnya extends Model
{
    protected $guarded = [];

    public function pengguna(){
        return $this->belongsTo(Pengguna::class, 'id_pengguna','id');
    }

    public function proker (){
        return $this->belongsTo(Proker::class, 'id_proker','id');
    }
}
