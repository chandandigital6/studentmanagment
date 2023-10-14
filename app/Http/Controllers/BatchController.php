<?php

namespace App\Http\Controllers;

use App\Http\Requests\BatchRequest;
use App\Models\Batch;
use App\Models\Course;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function index(){
        $getBatch= Batch::all();
        
        return view('batch.index',compact('getBatch'));
    }
      public function show($batch){
            $showbatch=Batch::find($batch);
            // return $showStudent;
            return view('batch.show',compact('showbatch'));

      }
    public function create(){
        $course=Course::pluck('name','id');
       
        // dd($course);
        return view('batch.create',compact('course'));
    }

    public function store(BatchRequest $request){
        // dd($request);
         $batch=Batch::create($request->all());
         return redirect()->route('batch.index');
    }

    public function edit(Batch $batch){
           return view('batch.edit',compact('batch'));
    }
    public function update(Batch $batch, BatchRequest $request){
        $batch->update($request->all());
        return redirect()->route('batch.index');
    }

    public function delete($batch){
       Batch::findOrfail($batch)->delete();
       return redirect()->route('batch.index');
    }
}
