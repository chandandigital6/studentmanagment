<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnrollmentRequest;
use App\Models\Batch;
use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Http\Request;

class EnrollmentCOntroller extends Controller
{
    public function index(){
        $getEnroll= Enrollment::all();
        
        return view('enroll.index',compact('getEnroll'));
    }
      public function show($enrollment){
            $showbatch=Enrollment::find($enrollment);
            
            return view('enroll.show',compact('showbatch'));

      }
    public function create(){
        $student=Student::pluck('name','id');
        $batch=Batch::pluck('name','id');
        return view('enroll.create',compact('student','batch'));
    }

    public function store(EnrollmentRequest $request){
      
         $enrollment=Enrollment::create($request->all());
         return redirect()->route('enroll.index');
    }

    public function edit(Enrollment $enrollment){
           return view('enroll.edit',compact('enrollment'));
    }
    public function update(Enrollment $enrollment, EnrollmentRequest $request){
        $enrollment->update($request->all());
        return redirect()->route('enroll.index');
    }

    public function delete($enrollment){
       Enrollment::findOrfail($enrollment)->delete();
       return redirect()->route('enroll.index');
    }
}
