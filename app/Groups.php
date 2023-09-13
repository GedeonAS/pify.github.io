<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    protected $table = 'tbl_groups';

    public function followers()
    {
        return $this->hasMany(Group_Followers::class,'id_group','id');
                
    }
}
