<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $guarded = [];

    public function recruitment(){

       return $this->belongsTo(Recruitment::class, 'id_recruitment', 'id');
    }

    // public function pengguuna(){
    //     $this->belongsTo(Pengguna::class, 'id_recruitment', 'id');
    // }
}
