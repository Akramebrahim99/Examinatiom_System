<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "questions";
    protected $fillable = ['id','description','degree','course_id','correct_answer','qestiontype','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = true;

    ###################################### Relations ##########################################
    public function course(){
        return $this -> belongsTo('App\Models\Course','course_id','id');
    }

    public function students(){
        return $this -> belongsToMany('App\Models\Student','student_question','question_id','student_id')
        ->withPivot(['question_degree','student_answer']);
    }

    public function answers(){
        return $this -> hasMany('App\Models\Answer','question_id','id');
    }

}
