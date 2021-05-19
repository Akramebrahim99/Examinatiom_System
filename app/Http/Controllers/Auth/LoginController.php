<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Teacher;
use App\Models\Student;

class LoginController extends Controller
{
    public function index(){
        return view('Login');
    }

    public function logout(){
        return redirect()->route('login');
    }

    public function login(Request $request){
        
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            ]);


        $admin = Admin::select('email','password')->where('email',$request->email)->first();
        $teacher = Teacher::select('email','password')->where('email',$request->email)->first();
        $student = Student::select('email','password')->where('email',$request->email)->first();


        if(isset($admin)){
            if($admin->password == $request->pass)
            return redirect()->route('admin.index');
        }
        elseif(isset($teacher)){
            if($teacher->password == $request->pass)
            return redirect()->route('teacher.index');
        }
        elseif(isset($student)){
            if($student->password == $request->pass)
            return redirect()->route('student.index');
        }
        return redirect()->route('login');
    }
    
}
