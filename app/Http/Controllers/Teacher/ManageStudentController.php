<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Models\Course;
use App\Models\Teacher;
use App\Exports\ResultsExport;
use Maatwebsite\Excel\Facades\Excel;

class ManageStudentController extends Controller
{
    public function showstudentsresults($courseId)
    {
        $course = Course::find($courseId);
        $studentsofcourse = $course->students;
        return view('pages.teacher.students results',compact('studentsofcourse','course'));
    }
    
    public function exportexcel($courseId)
    {
        $course = Course::find($courseId);
        $studentsofcourse = $course->students;
        $allresults[] =array('Student Name', 'Student Id','Student Degree');
        if(isset($studentsofcourse) && count($studentsofcourse) > 0){
            foreach($studentsofcourse as $studentofcourse)
            {
                $allresults[] = array(
                    'Student Name' => $studentofcourse->name,
                    'Student Id' => $studentofcourse->id,
                    'Student Degree' => intval($studentofcourse->pivot->course_degree)
                );
                
            }
        }
        $result = new ResultsExport($allresults);
        return Excel::download($result, $course->name.'Results.xlsx');
    }
}
