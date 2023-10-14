@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">payment Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">enrollment no: {{ $showpay->enrollment_id }}</h5>
        <p class="card-text"> payment date : {{ $showpay->paid_date}}</p>
        <p class="card-text">Amount: {{ $showpay->amount }}</p>
  </div>
       
    </hr>
  
  </div>
</div>





@endsection
