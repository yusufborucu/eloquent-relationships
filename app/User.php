<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name'
    ];

    public function address()
    {
        return $this->hasOne('App\Address')->select('address');
    }

    public function articles()
    {
        return $this->hasMany('App\Article')->select('title', 'body');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role')->select('name');
    }
}
