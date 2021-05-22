<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

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
    public function addexam()
    {
        return view('pages.teacher.CreateExam English and Arabic');
    }

    public function showexams(){
        $courses = Course::where('teacher_id',session('user_id'))->get();
        return view('pages.teacher.examspage',compact('courses'));
    }
}
