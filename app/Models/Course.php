<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "courses";
    protected $fillable = ['name','course_degree','date_of_exam',
    'duration','teacher_id','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = true;

###################################### Relations ##########################################
    public function teachers(){
        return $this -> belongsTo('App\Models\Teacher','teacher_id','id');
    }

    public function questions(){
        return $this -> hasMany('App\Models\Question','course_id','id');
    }


    public function students(){
        return $this -> belongsToMany('App\Models\Student','student_course','course_id','student_id')
        ->withPivot(['course_degree','course_status']);
    }

}
