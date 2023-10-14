@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">batch Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title"> batch Name : {{ $showbatch->name }}</h5>
        <p class="card-text">course id : {{ $showbatch->course_id}}</p>
        <p class="card-text">Date: {{ $showbatch->star_date }}</p>
  </div>
       
    </hr>
  
  </div>
</div>





@endsection
