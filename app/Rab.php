<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rab extends Model
{
    protected $guarded = [];

    public function proker(){
        return $this->belongsTo(Proker::class, 'id_proker', 'id');
    }
}
