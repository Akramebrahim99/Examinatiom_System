<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('pages.teacher.teacher-navbar');
    }

    public function exam()
    {
        return view('pages.teacher.exam-links');
    }

    public function result()
    {
        return view('pages.teacher');
    }

    public function course()
    {
        return view('pages.teacher.teacher-courses');
    }

    public function examscreen()
    {
        return view('pages.teacher.exam-screen');
    }

    public function studentreq()
    {
        return view('pages.teacher.student-requests');
    }

    public function studentreg()
    {
        return view('pages.teacher.students-registered-in-course');
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
}
