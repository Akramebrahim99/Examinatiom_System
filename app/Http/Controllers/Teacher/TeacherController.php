<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Question;
use App\Models\Teacher;
use App\Models\Answer;
use phpDocumentor\Reflection\Types\Null_;

class TeacherController extends Controller
{
    public function index()
    {
        return view('pages.teacher.teacher-navbar');
    }

    public function exams()
    {
        $courses = Course::where('teacher_id', session('user_id'))->get();
        return view('pages.teacher.exam-links', compact('courses'));
    }

    public function result()
    {
        return view('pages.teacher');
    }

    public function course()
    {
        $courses = Course::where('teacher_id', session('user_id'))->get();
        return view('pages.teacher.teacher-courses', compact('courses'));
    }

    public function examscreen()
    {
        return view('pages.teacher.exam-screen');
    }

    public function profile()
    {
        $teacher = Teacher::find(session('user_id'));
        return view('pages.teacher.Teacher Profile', compact('teacher'));
    }
    public function editprofile()
    {
        $teacher = Teacher::find(session('user_id'));
        return view('pages.teacher.Edit Teacher Profile', compact('teacher'));
    }

    public  function editteacherprofile(Request $request)
    {
        $teacher = Teacher::find(session('user_id'));
        $this->validate($request, [
            'teacherName' => 'required',
            'teacherEmail' => 'required',
            'teacherPassword' => 'required',
            'teacherCollage' => 'required',
            'teacherUniversity' => 'required',
            'teacherPhone' => 'required'
        ]);

        $teacher->name = $request->get('teacherName');
        $teacher->university_name = $request->get('teacherUniversity');
        $teacher->collage_name = $request->get('teacherCollage');
        $teacher->email = $request->get('teacherEmail');
        $teacher->password = $request->get('teacherPassword');
        $teacher->phone = $request->get('teacherPhone');

        $teacher->save();
        return $this->profile();
    }

    public function addexam($courseId)
    {
        $course = Course::find($courseId);
        $questions = $course->questions;
        return view('pages.teacher.CreateExam English and Arabic', compact('course', 'questions'));
    }

    public function addEssayQuestion(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'degree' => 'required'
        ]);

        $question = new Question([
            'description' => $request->get('question'),
            'degree' => $request->get('degree'),
            'course_id' => $request->course_id,
            'qestiontype' => 'Essay'
        ]);

        $question->save();
        return back()->withInput();
    }

    public function addTFQuestion(Request $request)
    {
        $rightAns = Null;
        $this->validate($request, [
            'question' => 'required',
            'RightAns' => 'required',
            'degree' => 'required'
        ]);

        if ($request->get('RightAns') == "option1") {
            $rightAns = "True";
        } else {
            $rightAns = "False";
        }

        $question = new Question([
            'description' => $request->get('question'),
            'degree' => $request->get('degree'),
            'correct_answer' => $rightAns,
            'course_id' => $request->course_id,
            'qestiontype' => 'TF'
        ]);

        $question->save();

        $answer1 = new Answer([
            'question_id' => $question->id,
            'answer' => "True"
        ]);
        $answer1->save();
        $answer2 = new Answer([
            'question_id' => $question->id,
            'answer' => "False"
        ]);
        $answer2->save();
        return back()->withInput();
    }

    public function addMcqQuestion(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'RightAns' => 'required',
            'degree' => 'required'
        ]);

        $question = new Question([
            'description' => $request->get('question'),
            'correct_answer' => $request->get($request->get('RightAns')),
            'degree' => $request->get('degree'),
            'course_id' => $request->course_id,
            'qestiontype' => 'MCQ'
        ]);
        $question->save();

        for ($i = (count($request->all()) - 4); $i > 0; $i--) {
            $answer = new Answer([
                'question_id' => $question->id,
                'answer' => $request->get('option' . $i),
            ]);
            $answer->save();
        }

        return back()->withInput();
    }

    public function showexams()
    {
        $courses = Course::where('teacher_id', session('user_id'))->get();
        return view('pages.teacher.examspage', compact('courses'));
    }

    public function deletequestion($questionId)
    {
        $question = Question::find($questionId);
        $answers = Answer::where('question_id', $questionId)->get();
        if (isset($answers)) {
            foreach ($answers as $answer)
                $answer->delete();
        }
        $question->delete();
        return back()->withInput();
    }

    public function editquestion($questionId)
    {
        $question = Question::find($questionId);
        return view('pages.teacher.edit question', compact('question'));
    }

    public function editquestioninfo(Request $request)
    {
        $question = Question::find($request->question_id);

        if ($question->qestiontype == 'MCQ') {
            $this->validate($request, [
                'question' => 'required',
                'RightAns' => 'required',
                'degree' => 'required'
            ]);


            $question->description = $request->get('question');
            $question->correct_answer = $request->get($request->get('RightAns'));
            $question->degree = $request->get('degree');
            $question->save();

            $answers = Answer::where('question_id', $request->question_id)->get();
            foreach($answers as $answer){
                $answer->delete();
            }

            for ($i = (count($request->all()) - 4); $i > 0; $i--) {
                $answer = new Answer([
                    'question_id' => $question->id,
                    'answer' => $request->get('option' . $i),
                ]);
                $answer->save();
            }
        }
        elseif ($question->qestiontype == 'TF')
        {
            $rightAns = Null;
            $this->validate($request, [
                'question' => 'required',
                'RightAns' => 'required',
                'degree' => 'required'
            ]);

            if ($request->get('RightAns') == "option1") {
                $rightAns = "True";
            } else {
                $rightAns = "False";
            }
            $question->description = $request->get('question');
            $question->correct_answer = $rightAns;
            $question->degree = $request->get('degree');
            $question->save();
        }
        else
        {
            $this->validate($request, [
                'question' => 'required',
                'degree' => 'required'
            ]);
            $question->description = $request->get('question');
            $question->degree = $request->get('degree');
            $question->save();
        }

        return $this->addexam($question->course_id);
    }

    public function getessay($courseId)
    {
        $course = Course::find($courseId);
        $questions = $course->questions;

        foreach ($questions as $key => $question) {
            if ($question->qestiontype != 'Essay')
                unset($questions[$key]);
        }

        return view('pages.teacher.essayquestion', compact('questions'));
    }

    public function markessayquestion($questionId)
    {
        $count = 0;
        $question = Question::find($questionId);
        $students = $question->students;
        return view('pages.teacher.markessayquestion', compact('students', 'question', 'count'));
    }

    public function addmarkessayquestion(Request $request)
    {
        $question = Question::find($request->question_id);
        $studentsIds = session('studentsid');
        $course = Course::find($question->course_id);
        session()->forget('questionsid');

        for ($i = 0; $i < count($studentsIds); $i++) {
            $question->students()->updateExistingPivot($studentsIds[$i], ['question_degree' => $request->get('degree' . $i)]);
            $course->students->find($studentsIds[$i])->pivot->course_degree += $request->get('degree' . $i);
            $course->students->find($studentsIds[$i])->pivot->save();
        }

        return $this->getessay($question->course_id);
    }

    public function editcourse($courseId)
    {
        $course = Course::find($courseId);
        return view('pages.teacher.edit course', compact('course'));
    }

    public function editcourseinfo(Request $request)
    {
        $course = Course::find($request->course_id);

        $this->validate($request, [
            'date_of_exam' => 'required',
            'course_degree' => 'required',
            'duration' => 'required',
            'no_of_submit' => 'required',
            'pages' => 'required',
            'previous' => 'required'
        ]);

        $course->date_of_exam = $request->get('date_of_exam');
        $course->course_degree = $request->get('course_degree');
        $course->duration = $request->get('duration');
        $course->no_of_submit = $request->get('no_of_submit');
        $course->one_page = $request->get('pages');
        $course->previous = $request->get('previous');
        $course->save();

        return back()->withInput();
    }
}
