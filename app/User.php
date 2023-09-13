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
        'name', 'email', 'password','password_showed',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function community()
    {
        return $this->belongsToMany(Communities::class,'tbl_community_followers','id_user','id_community');
    }
    public function groups()
    {
        return $this->belongsToMany(Groups::class,'tbl_group_followers','id_user','id_group');
    }
}
