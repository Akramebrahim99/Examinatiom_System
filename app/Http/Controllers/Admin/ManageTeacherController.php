<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
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
        
        $this->validate($request,[
            'teacherName' => 'required',
            'teacherEmail' => 'required',
            'teacherPassword' => 'required',
            'teacherCollage' => 'required',
            'teacherUniversity' => 'required',
            'teacherPhone' => 'required'
        ]);

        $teacher = new Teacher([
            'name' => $request->get('teacherName'),
            'email' => $request->get('teacherEmail'),
            'password' => $request->get('teacherPassword'),
            'collage_name' => $request->get('teacherCollage'),
            'university_name' => $request->get('teacherUniversity'),
            'phone' => $request->get('teacherPhone')
        ]);

        $teacher->save();

        return redirect()->route('show.teachers');
       
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
        $teacher -> delete();
        return redirect()->route('show.teachers');
    }
}
