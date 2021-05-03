<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = "teachers";
    protected $fillable = ['name','email','password',
    'university_name','collage_name','phone','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = true;

###################################### Relations ##########################################
    public function courses(){
        return $this -> hasMany('App\Models\Course','teacher_id','id');
    }

    public function questions(){
        return $this -> hasMany('App\Models\Question','teacher_id','id');
    }


    public function students(){
        return $this -> belongsToMany('App\Models\Student','student_teacher','teacher_id','student_id');
    }
}
