<?php

namespace App;

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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function statuses()
    {
        return $this->hasMany('App\Notice');
    }

    public function avatars()
    {
        return $this->hasMany('App\Avatar', 'profile_id', 'id');
    }

    public function profileImageUrl()
    {
        $site = config('app.url');
        $path = '/avatar';

        return "{$site}{$path}/{$this->id}.jpeg";
    }

    public function url()
    {
        return config('app.url') . '/' . $this->username;
    }
}
