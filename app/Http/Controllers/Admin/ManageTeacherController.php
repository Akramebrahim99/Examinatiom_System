<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Admin;
use App\Models\Course;
use Validator;


class ManageTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::select('id','name','email','collage_name','university_name')->get();
        return view('pages.Admin.add-teacher',compact('teachers'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $rules= [
            'teacherName' => 'required|max:191|string',
            'teacherEmail' => 'required|email|unique:teachers,email|unique:admins,email|unique:students,email',
            'teacherPassword' => 'required',
            'teacherCollage' => 'required|string',
            'teacherUniversity' => 'required|string',
            'teacherPhone' => 'required|numeric|digits:11|unique:teachers,phone|unique:students,phone'
        ];

        $messages = $this->getMessages();

        $validator = Validator::make($request->all(),$rules,$messages);
        
        if($validator -> fails()){
            return redirect()->route('show.teachers')->withErrors($validator)->withInputs($request->all())->with(['faild' => 'You Should Open The Form Again To Add Teacher Correct']);
        }

        $teacher = new Teacher([
            'name' => $request->get('teacherName'),
            'email' => $request->get('teacherEmail'),
            'password' => $request->get('teacherPassword'),
            'collage_name' => $request->get('teacherCollage'),
            'university_name' => $request->get('teacherUniversity'),
            'phone' => $request->get('teacherPhone')
        ]);

        $teacher->save();
        return redirect()->route('show.teachers')->with(['success' => 'Teacher Added Successfully']);
       
    }
    protected function getMessages(){
        return $messages = [
            'teacherName.required' => 'name is required please',
            'teacherEmail.required' => 'email is required please',
            'teacherPassword.required' => 'password is required please',
            'teacherUniversity.required' => 'university name is required please',
            'teacherCollage.required' => 'collage name is required please',
            'teacherPhone.required' => 'phone number is required please',
            'teacherPhone.digits' => 'phone number size is must be 11 number please',
            'teacherPhone.numeric' => 'phone number must be numbers please',
            'teacherPhone.unique' => 'The phone number has already been taken',
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $courses = Course::where('teacher_id',$id)->get();

        if(isset($courses) && $courses -> count() > 0){
            foreach($courses as $course){
                $course->teacher_id = NULL;
                $course ->save();
            } 
        }
        $teacher -> delete();
        return redirect()->route('show.teachers');
    }
}
