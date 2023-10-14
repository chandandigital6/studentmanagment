<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $course=Course::all();
        return view('course.index',compact('course'));
    }
      public function show($course){
            $showCourse=Course::find($course);
           
            return view('course.show',compact('showCourse'));

      }
    public function create(){
        return view('course.create');
    }

    public function store(CourseRequest $request){
        // dd($request);
         $course=Course::create($request->all());
         return redirect()->route('course.index');
    }

    public function edit(Course $course){
           return view('course.edit',compact('course'));
    }
    public function update(Course $course, CourseRequest $request){
        $course->update($request->all());
        return redirect()->route('course.index');
    }

    public function delete($course){
       Course::findOrfail($course)->delete();
       return redirect()->route('course.index');
    }

}
