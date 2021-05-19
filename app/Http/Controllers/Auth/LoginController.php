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
        if(session()->has('user_id'))
            return Redirect()->back();

        return view('Login');
    }

    public function logout(){
        if(session()->has('user_id'))
            session()->pull('user_id');
        
        return redirect()->route('login');
    }

    public function login(Request $request){
<<<<<<< HEAD
        $admin = Admin::select('id','email','password')->where('email',$request->email)->first();
        $teacher = Teacher::select('id','email','password')->where('email',$request->email)->first();
        $student = Student::select('id','email','password')->where('email',$request->email)->first();
=======
        
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            ]);


        $admin = Admin::select('email','password')->where('email',$request->email)->first();
        $teacher = Teacher::select('email','password')->where('email',$request->email)->first();
        $student = Student::select('email','password')->where('email',$request->email)->first();
>>>>>>> 6e9b484302021f2a69db6bafba85a64c06246180


        if(isset($admin)){
            if($admin->password == $request->pass){
                session(['user_id' => $admin->id ]);
                return redirect()->route('admin.index');
            }
        }
        elseif(isset($teacher)){
            if($teacher->password == $request->pass){
                session(['user_id' => $teacher->id ]);
                return redirect()->route('teacher.index');
            }
        }
        elseif(isset($student)){
            if($student->password == $request->pass){
                session(['user_id' => $student->id ]);
                return redirect()->route('student.index');
            }
        }
        return redirect()->route('login');
    }
    
}
