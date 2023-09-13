<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Communities extends Model
{
    protected $table = 'tbl_communities';

    public function user()
    {
        return $this->belongsToMany(User::class,'tbl_community_followers','id_community','id_user');
                
    }
    
    public function followers()
    {
        return $this->hasMany(Community_Followers::class,'id_community','id');
                
    }
}
