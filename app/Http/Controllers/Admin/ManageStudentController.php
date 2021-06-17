<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;

class ManageStudentController extends Controller
{
    public function studentsrequestCourse($courseId)
    {
        $course = Course::find($courseId);
        $students = $course->students;
        return view('pages.Admin.student-requests',compact('students','course'));
    }

    public function acceptstudent(Request $request)
    {
        //accept student request
        $course = Course::find($request->course_id);
        $students = $course->students;
        foreach($students as $student){
            if($student->id == $request->student_id)
                $student->pivot->course_status = True;
        }
        $student->pivot->save();
        return back()->withInput();
    }

    public function rejectstuudednt(Request $request)
    {
        //reject student request
        $course = Course::find($request->course_id);
        $students = $course->students;
        foreach($students as $student){
            if($student->id == $request->student_id)
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
        return view('pages.Admin.students-registered-in-course',compact('studentsofcourse','courseName','courseId'));
    }

    public function deletestd(Request $request)
    {
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
