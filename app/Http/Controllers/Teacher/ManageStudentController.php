<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Teacher;

class ManageStudentController extends Controller
{
    public function studentsrequest()
    {
        $courses = Course::select('id','name','teacher_id')->where('teacher_id',session('user_id'))->get();
        return view('pages.teacher.student-requests',compact('courses'));
    }

    public function studentsrequestCourse(Request $request)
    {
        $courses = Course::select('id','name','teacher_id')->where('teacher_id',session('user_id'))->get();
        $course = Course::find($request->course_id);
        session(['course_id' => $course->id, 'course_name' => $course->name ]);
        $students = $course->students;
        return view('pages.teacher.student-requests',compact('students','courses'));
    }

    public function acceptstudent($studentId)
    {
        
        //accept student request
    }

    public function rejectstuudednt()
    {
        //reject student request
    }
}
