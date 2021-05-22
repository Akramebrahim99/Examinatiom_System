<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index(){
        return view('Register');
    }

    public function store(Request $request)
    {
        
        $rules= [
            'name' => 'required|max:191|string',
            'email' => 'required|email',
            'pass' => 'required',
            'id' => 'required|numeric|unique:students,id',
            'ssn' => 'required|numeric|digits:14|unique:students,ssn',
            'university' => 'required|string',
            'collage' => 'required|string',
            'phone-num' => 'required|numeric|digits:11|unique:students,phone'
        ];

        $messages = $this->getMessages();

        $validator = Validator::make($request->all(),$rules,$messages);
        
        if($validator -> fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }


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
        return redirect()->back()->with(['success' => 'YOU Are Member Now Congrtulations']);
       // return redirect()->route('login');
       
    }

    protected function getMessages(){
        return $messages = [
            'name.required' => 'your name is required please',
            'email.required' => 'your email is required please',
            'pass.required' => 'your password is required please',
            'id.required' => 'your id is required please',
            'id.numeric' => 'your id must be numbers please',
            'ssn.required' => 'your ssn is required please',
            'ssn.size' => 'your ssn size is must be 14 number please',
            'ssn.numeric' => 'your ssn must be numbers please',
            'university.required' => 'your university name is required please',
            'collage.required' => 'your collage name is required please',
            'phone-num.required' => 'your phone number is required please',
            'phone-num.digits' => 'your phone number size is must be 11 number please',
            'phone-num.numeric' => 'your phone number must be numbers please',
        ];
    }
}
