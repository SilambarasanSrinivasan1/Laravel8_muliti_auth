<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

    class Admin extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'admins';

        protected $fillable = [
            'image','name', 'email', 'password','mobile','gender','role'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}
