<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'tbl_answers';   

    public function likes()
    {
        return $this->hasMany(Likes_Answer::class,'id_answer');
    }

    public function dislikes()
    {
        return $this->hasMany(Dislikes_Answer::class,'id_answer');
    }
    public function user()
    {
        return $this->hasOne(User::class,'id','id_user_dil');
    }
}
