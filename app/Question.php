<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'tbl_questions';
    protected $dates = ['created_at', 'updated_at'];
    
    
    public function quest_tag()
    {
        return $this->belongsToMany(Question_Tags::class,'tbl_question_tags','id_quest','id_tag')
                    ->withTimestamps();
    }

    public function tag()
    {
        return $this->belongsToMany(Tags::class,'tbl_question_tags','id_quest','id_tag');
    }
    
    public function likes()
    {
        return $this->hasMany(Likes::class,'id_quest');
    }
    
    public function dislikes()
    {
        return $this->hasMany(Dislikes::class,'id_quest');
    }
    public function answers()
    {
        return $this->hasMany(Answer::class,'id_question');
    }
    public function user()
    {
        return $this->hasOne(User::class,'id','id_user_dil');
    }
    public function community()
    {
        return $this->hasOne(Communities::class,'id','id_comunity');
    }
}
