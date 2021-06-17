<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\Question;
use Carbon\Carbon;


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
        $student = Student::find(session('user_id'));
        $courses = $student -> courses;
        return view('pages.student.result',compact('courses'));
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

    public function requestedcourses(){
        $student = Student::find(session('user_id'));
        $studentCourses = $student -> courses;
        foreach($studentCourses as   $key => $student){
            if($student->pivot->course_status == True)
                unset($studentCourses[$key]);
        }
        return view('pages.student.student-requestedcourses',compact('studentCourses'));
    }

    public function deletereq($courseid)
    {
        //delete student request
        $course = Course::find($courseid);
        $students = $course->students;
        foreach($students as $student){
            if($student->id == session('user_id'))
                $student->pivot-> delete();
        }
        return back()->withInput();
    }

    public function getexam($courseId)
    {
        $course = Course::find($courseId);

        if(now()->greaterThanOrEqualTo((Carbon::parse($course->date_of_exam))->addHours($course->duration)) || now()->lessThan(Carbon::parse($course->date_of_exam)))
        {
            return view('404');
        }
        $count = 0;
        $questions = $course->questions;
        $questions =  iterator_to_array($questions);
        shuffle($questions);
        return view('pages.student.exam',compact('course','questions','count'));
    }

    public function profile()
    {
        $student = Student::find(session('user_id'));
        return view('pages.Student.Student Profile',compact('student'));
    }
    public function editprofile()
    {
        $student = Student::find(session('user_id'));
        return view('pages.Student.Edit Student Profile',compact('student'));
    }

    public  function editstudentprofile(Request $request)
    {
        $student = Student::find(session('user_id'));
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'pass' => 'required',
            'id' => 'required',
            'ssn' => 'required',
            'university' => 'required',
            'collage' => 'required',
            'phone-num' => 'required'
        ]);

        $student->name = $request->get('name');
        $student->university_name = $request->get('university');
        $student->collage_name = $request->get('collage');
        $student->email = $request->get('email');
        $student->password = $request->get('pass');
        $student->phone = $request->get('phone-num');
        $student->id = $request->get('id');
        $student->ssn = $request->get('ssn');

        $student->save();
        return $this->profile();
    }

    public function correectexam(Request $request)
    {
        $studentDegree = 0;
        $student = Student::find(session('user_id'));
        $questionsIds = session('questionsid');
        session()->forget('questionsid');
        $question = Question::find($questionsIds[0]);
        $course = Course::find($question->course_id);
        $students = $course->students;

        if(now()->greaterThanOrEqualTo((Carbon::parse($course->date_of_exam))->addHours($course->duration)) || now()->lessThan(Carbon::parse($course->date_of_exam)))
        {
            return view('404');
        }

        for($i=0; $i<count($questionsIds); $i++)
        {
            $question = Question::find($questionsIds[$i]);
            if($question -> correct_answer == NULL)
            {
                $student->questions()->syncWithoutDetaching([$questionsIds[$i] => ['student_answer' => $request->get('radio'.$i) ]]);     
            }
            elseif($question -> correct_answer == $request->get('radio'.$i))
            {
                $student->questions()->syncWithoutDetaching([$questionsIds[$i] => ['question_degree' => $question -> degree, 'student_answer' => $request->get('radio'.$i) ]]);
                $studentDegree = $studentDegree + $question -> degree;
            }
            else
            {
                $student->questions()->syncWithoutDetaching([$questionsIds[$i] => ['question_degree' => 0, 'student_answer' => $request->get('radio'.$i) ]]);     
            }
        }

        foreach($students as $student){
            if($student->id == session('user_id'))
            {
                $student->pivot->course_degree = $studentDegree;
                $student->pivot->save();
            }
        }

        return view('pages.student.index');
    }
    
}
