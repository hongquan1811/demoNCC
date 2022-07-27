<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Mentor;
use App\Models\School;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentResourceController extends Controller
{

    public function index()
    {
        $students = Student::get();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classroom = Classroom::get();
        $mentor = Mentor::get();
        $school = School::get();
        return view('student.add',compact('classroom','mentor','school'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create($request->all());

        $notification = [
            'message'    => 'Add Student Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('students.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show= Student::where('id','=',$id)->first();
        $school = School::get();
        $classroom = Classroom::get();
        $mentor = Mentor::get();
        $classroom_infor = $show->classroom;
        $mentor_infor = $show->mentor;
        $school_infor = $show->school;
        return view('student.show',compact('show','school','classroom','mentor','classroom_infor','mentor_infor','school_infor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit= Student::where('id','=',$id)->first();
        $school = School::get();
        $classroom = Classroom::get();
        $mentor = Mentor::get();
        $classroom_infor = $edit->classroom;
        $mentor_infor = $edit->mentor;
        $school_infor = $edit->school;
        return view('student.edit',compact('edit','school','classroom','mentor','classroom_infor','mentor_infor','school_infor'));
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
        Student::where('id','=',$id)->update($request->except(['_token', '_method']),$request->$id);
        $notification = [
            'message'    => 'Update Student Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('students.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);
        $notification = [
            'message'    => 'Delete Student Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('students.index')->with($notification);
    }
}
