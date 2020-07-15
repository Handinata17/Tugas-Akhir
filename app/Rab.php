<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rab extends Model
{
    protected $guarded = [];

    public function rab(){
        return $this->belongsTo(Rab::class, 'id_proker', 'id');
    }
}
