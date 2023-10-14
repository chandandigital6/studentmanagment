<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class StudentController extends Controller
{
    public function index(){
        $student=Student::all();
        return view('student.index',compact('student'));
    }
      public function show($student){
            $showStudent=Student::find($student);
            // return $showStudent;
            return view('student.show',compact('showStudent'));

      }
    public function create(){
        return view('student.create');
    }

    public function store(StudentRequest $request){
        // dd($request);
         $student=Student::create($request->all());
         return redirect()->route('student.index');
    }

    public function edit(Student $student){
           return view('student.edit',compact('student'));
    }
    public function update(Student $student, StudentRequest $request){
        $student->update($request->all());
        return redirect()->route('student.index');
    }

    public function delete($student){
       Student::findOrfail($student)->delete();
       return redirect()->route('student.index');
    }

}
