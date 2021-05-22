<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
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
        $course = Course::find(session('course_id'));
        $students = $course->students;
        foreach($students as $student){
            if($student->id == $studentId)
                $student->pivot->course_status = True;
        }
        $student->pivot->save();
        return back()->withInput();
    }

    public function rejectstuudednt($studentId)
    {
        //reject student request
        $course = Course::find(session('course_id'));
        $students = $course->students;
        foreach($students as $student){
            if($student->id == $studentId)
                $student->pivot-> delete();
        }
        return back()->withInput();
    }

    public function studentreg($courseId)
    {
        $course = Course::find($courseId);
        $courseName = $course->name;
        $courseId = $course->id;
        $studentsofcourse = $course->students;
        return view('pages.teacher.students-registered-in-course',compact('studentsofcourse','courseName','courseId'));
    }

    public function deletestd(Request $request){
        $course = Course::find($request->course_id);
        $studentsofcourse = $course->students;
        if(isset($studentsofcourse)){
            foreach($studentsofcourse as $student){
                if($student->pivot->student_id == $request->student_id)
                    $student->pivot->delete();
            }
        }
        return back()->withInput();
    }
}
