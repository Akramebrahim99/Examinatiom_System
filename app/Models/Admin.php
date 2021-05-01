<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admins";
    protected $fillable = ['name','email','password','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = true;

###################################### Relations ##########################################
    public function courses(){
        return $this -> belongsToMany('App\Models\Course','admin_course','admin_id','course_id');
    }

    public function professors(){
        return $this -> belongsToMany('App\Models\Professor','admin_professor','admin_id','professor_id');
    }
    
    public function students(){
        return $this -> belongsToMany('App\Models\Student','admin_student','admin_id','student_id');
    }

}


