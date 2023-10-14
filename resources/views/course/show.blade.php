@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">course Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $showCourse->name }}</h5>
        <p class="card-text">Syllabus : {{ $showCourse->syllabus}}</p>
        <p class="card-text">Duration: {{ $showCourse->duration }}</p>
  </div>
       
    </hr>
  
  </div>
</div>





@endsection
