@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">teacher Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $showTeacher->name }}</h5>
        <p class="card-text">Address : {{ $showTeacher->address }}</p>
        <p class="card-text">Mobile : {{ $showTeacher->mobile_no }}</p>
  </div>
       
    </hr>
  
  </div>
</div>





@endsection
