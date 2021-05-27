<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Question;

class TeacherController extends Controller
{
    public function index()
    {
        return view('pages.teacher.teacher-navbar');
    }

    public function exams()
    {
        $courses = Course::where('teacher_id',session('user_id'))->get();
        return view('pages.teacher.exam-links',compact('courses'));
    }

    public function result()
    {
        return view('pages.teacher');
    }

    public function course()
    {
        $courses = Course::where('teacher_id',session('user_id'))->get();
        return view('pages.teacher.teacher-courses',compact('courses'));
    }

    public function examscreen()
    {
        return view('pages.teacher.exam-screen');
    }

    public function profile()
    {
        return view('pages.teacher.Teacher Profile');
    }
    public function editprofile()
    {
        return view('pages.teacher.Edit Teacher Profile');
    }

    public function addexam($courseId)
    {
        $course = Course::find($courseId);
        $questions = $course->questions;
        return view('pages.teacher.CreateExam English and Arabic',compact('course','questions'));
    }

    public function addquestion(Request $request)
    {
        $this->validate($request,[
            'question' => 'required',
            'RightAns' => 'required',
            'degree' => 'required'
        ]);
        
        $rightAns = $request->get('RightAns');
        if($rightAns == 'Essay Question'){
            $rightAns = NULL;
        }
        else
        {
            $rightAns = $request->get($request->get('RightAns'));
        }

        $question = new Question([
            'description' => $request->get('question'),
            'answer1' => $request->get('option1'),
            'answer2' => $request->get('option2'),
            'answer3' => $request->get('option3'),
            'answer4' => $request->get('option4'),
            'correct_answer' => $rightAns,
            'degree' => $request->get('degree'),
            'course_id' => $request->course_id
        ]);

        $question->save();
        return back()->withInput();
    }

    public function showexams(){
        $courses = Course::where('teacher_id',session('user_id'))->get();
        return view('pages.teacher.examspage',compact('courses'));
    }

    public function deletequestion($questionId){
        $question = Question::find($questionId);
        $question ->delete();
        return back()->withInput();
    }

    public function editquestion($questionId)
    {
        $question = Question::find($questionId);
        return view('pages.teacher.edit question',compact('question'));
    }

    public function editquestioninfo(Request $request)
    {
        $question = Question::find($request->question_id);

        $this->validate($request,[
            'question' => 'required',
            'RightAns' => 'required',
            'degree' => 'required'
        ]);
        
        $rightAns = $request->get('RightAns');
        if($rightAns == 'Essay Question'){
            $rightAns = NULL;
        }
        else
        {
            $rightAns = $request->get($request->get('RightAns'));
        }

        $question->description = $request->get('question');
        $question->answer1 = $request->get('option1');
        $question->answer2 = $request->get('option2');
        $question->answer3 = $request->get('option3');
        $question->answer4 = $request->get('option4');
        $question->correct_answer = $rightAns;
        $question->degree = $request->get('degree');
        $question->save();


        return $this->addexam($question->course_id);
    }

    public function getessay($courseId)
    {
        $course = Course::find($courseId);
        $questions = $course->questions;

        foreach($questions as $key => $question){
            if($question->answer1 != Null || $question->answer2 != Null || $question->answer3 != Null || $question->answer4 != Null )
                unset($questions[$key]);
        }

        return view('pages.teacher.essayquestion',compact('questions'));
    }

    public function markessayquestion($questionId)
    {
        $count = 0;
        $question = Question::find($questionId);
        $students = $question->students;
        return view('pages.teacher.markessayquestion',compact('students','question','count'));
    }

    public function addmarkessayquestion(Request $request)
    {
        $question = Question::find($request->question_id);
        $studentsIds = session('studentsid');
        $course = Course::find($question->course_id);
        session()->forget('questionsid');

        for($i=0; $i<count($studentsIds); $i++)
        {
            $question->students()->updateExistingPivot($studentsIds[$i], ['question_degree' => $request->get('degree'.$i)]);
            $course->students->find($studentsIds[$i])->pivot->course_degree += $request->get('degree'.$i);
            $course->students->find($studentsIds[$i])->pivot->save();
        }

        return $this->getessay($question->course_id);
    }

}
