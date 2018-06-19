<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','access_level'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var arra
y     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
    
}
