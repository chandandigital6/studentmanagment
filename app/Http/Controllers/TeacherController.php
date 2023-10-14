<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teacher=Teacher::all();
        return view('teacher.index',compact('teacher'));
    }
      public function show($teacher){
            $showTeacher=Teacher::find($teacher);
            // return $showStudent;
            return view('teacher.show',compact('showTeacher'));

      }
    public function create(){
        return view('teacher.create');
    }

    public function store(TeacherRequest $request){
        // dd($request);
         $student=Teacher::create($request->all());
         return redirect()->route('teacher.index');
    }

    public function edit(Teacher $teacher){
           return view('teacher.edit',compact('teacher'));
    }
    public function update(Teacher $teacher, TeacherRequest $request){
        $teacher->update($request->all());
        return redirect()->route('teacher.index');
    }

    public function delete($teacher){
       Teacher::findOrfail($teacher)->delete();
       return redirect()->route('teacher.index');
    }

}
