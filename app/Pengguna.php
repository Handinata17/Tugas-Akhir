<?php

namespace App;

use App\Notifications\PenggunaResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $guarded = [];

    protected $table = 'penggunas';

    public function events(){
        return $this->hasMany(Event::class, 'id_pengguna','id');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PenggunaResetPasswordNotification($token));
    }
}
