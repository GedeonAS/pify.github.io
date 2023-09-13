<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer_Comment extends Model
{
    protected $table = 'tbl_answer_comments';

    public function user()
    {
        return $this->hasOne(User::class,'id','id_user');
    }
}
