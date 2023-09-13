<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = 'tbl_tags';
    
    // public function quest()
    // {
    //     return $this->belongsToMany(Question_Tags::class,'tbl_question_tags','id_tag','id_quest')
    //                 ->withTimestamps();
    // }

    public function quest()
    {
        return $this->belongsToMany(Question::class);
                
    }
    
    public function quest_tags()
    {
        return $this->hasMany(Question_Tags::class,'id_tag');
                
    }
    
}
