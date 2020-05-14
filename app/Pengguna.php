<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable
{
    protected $guarded = [];

    protected $table = 'penggunas';

    public function events(){
        return $this->hasMany(Event::class, 'id_pengguna','id');
    }
}
