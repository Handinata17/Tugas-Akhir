<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pendaftaran extends Authenticatable
{
    protected $guarded = [];

    use Notifiable;

    public function recruitment(){
        return $this->belongsTo(Recruitment::class, 'id_recruitment','id');
    }

    public function sendEmailVerificationNotification()
    {
      $this->notify(new VerifyEmailNotification());
    }
}
