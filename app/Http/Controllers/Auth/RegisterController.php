<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class RegisterController extends Controller
{
    public function index(){
        return view('Register');
    }

    public function store(Request $request)
    {
        
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

        $student = new Student([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('pass'),
            'id' => $request->get('id'),
            'ssn' => $request->get('ssn'),
            'university_name' => $request->get('university'),
            'collage_name' => $request->get('collage'),
            'phone' => $request->get('phone-num')
        ]);

        $student->save();

        return redirect()->route('login');
       
    }
}
