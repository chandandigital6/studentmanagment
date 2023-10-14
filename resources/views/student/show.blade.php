@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $showStudent->name }}</h5>
        <p class="card-text">Address : {{ $showStudent->address }}</p>
        <p class="card-text">Mobile : {{ $showStudent->mobile_no }}</p>
  </div>
       
    </hr>
  
  </div>
</div>





@endsection
