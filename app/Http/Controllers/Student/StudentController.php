<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\course;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.student.index');
    }

    public function exam()
    {
        $student = Student::find(session('user_id'));
        $studendCourses = $student -> courses;
        return view('pages.student.exam-links',compact('studendCourses'));
    }

    public function result()
    {
        return view('pages.student.result');
    }

    public function course()
    {   
        $student = Student::find(session('user_id'));
        $studendCourses = $student -> courses;
        $courses = Course::select('id','name','course_degree','date_of_exam','duration')->get();
        foreach($studendCourses as $studendCourse)
        {
            foreach($courses as $key => $course){
                if($course -> id == $studendCourse->pivot->course_id){
                    unset($courses[$key]);
                }
            }
        }
        return view('pages.student.student-courses',compact('courses'));
    }

    public function addcourse($courseId)
    {
        $student = Student::find(session('user_id'));
        $student ->courses()->syncWithoutDetaching($courseId);
        return redirect()->back();
    }


    public function profile()
    {
        return view('pages.Student.Student Profile');
    }
    public function editprofile()
    {
        return view('pages.Student.Edit Student Profile');
    }
    
}
