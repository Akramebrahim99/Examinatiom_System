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

}
