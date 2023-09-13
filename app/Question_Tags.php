<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question_Tags extends Model
{
    protected $table = 'tbl_question_tags';

    // public function quest()
    // {
    //     return $this->belongsToMany(Question::class,'tbl_question_tags','id_tag','id_quest')
    //                 ->withTimestamps();
    // }
}
