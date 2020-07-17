<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revisi extends Model
{
    protected $guarded = [];

    public function pengguna(){
        return $this->belongsTo(Pengguna::class, 'id_pengguna','id');
    }

    // public function revisi (){
    //     return $this->belongsTo(Revisi::class, 'id_revisi','id');
    // }
}
