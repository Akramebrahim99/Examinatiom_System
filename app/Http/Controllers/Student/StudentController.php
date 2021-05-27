<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\Question;


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
        $count = 0;
        $course = Course::find($courseId);
        $questions = $course->questions;
        $questions =  iterator_to_array($questions);
        shuffle($questions);
        foreach($questions as $question){
            $answers =array($question->answer1,$question->answer2,$question->answer3,$question->answer4);
            shuffle($answers);
            $question->answer1 = $answers[0];
            $question->answer2 = $answers[1];
            $question->answer3 = $answers[2];
            $question->answer4 = $answers[3];
        }
        return view('pages.student.exam',compact('course','questions','count'));
    }

    public function profile()
    {
        return view('pages.Student.Student Profile');
    }
    public function editprofile()
    {
        return view('pages.Student.Edit Student Profile');
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
