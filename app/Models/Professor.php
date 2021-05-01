<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = "professors";
    protected $fillable = ['name','email','password',
    'university_name','collage_name','phone','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = true;

###################################### Relations ##########################################
    public function courses(){
        return $this -> hasMany('App\Models\Course','professor_id','id');
    }

    public function questions(){
        return $this -> hasMany('App\Models\Question','professor_id','id');
    }

    public function admins(){
        return $this -> belongsToMany('App\Models\Admin','admin_professor','professor_id','admin_id');
    }

    public function students(){
        return $this -> belongsToMany('App\Models\Student','student_professor','professor_id','student_id');
    }
}
