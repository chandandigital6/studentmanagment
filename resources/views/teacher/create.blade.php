@extends('layout')
@section('content')

<div class="">Add new teacher</div>
  <div>
    <form action="{{route('teacher.store')}}" method="POST">
    @csrf
   
    <label for="">Enter your name</label>
    <input type="text" name="name" placeholder="enter your name" class="form-control">
    <label for="">Enter your address</label>
    <input type="text" name="address" placeholder="enter your address" class="form-control">
    <label for="">Enter your contact number</label>
    <input type="text" name="mobile_no" placeholder="enter your number" class="form-control">
    <input type="submit" value="add record" class="btn btn-success mt-2">

</form>
</div>






@endsection
