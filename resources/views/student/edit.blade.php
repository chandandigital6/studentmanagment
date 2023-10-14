@extends('layout')
@section('content')

<div class="">Update student record</div>
  <div>
    <form action="{{route('student.update',['student'=>$student])}}" method="POST">
    @csrf
   @method('put')
    <label for="">Enter your name</label>
    <input type="text" name="name" placeholder="enter your name" class="form-control" value="{{$student->name}}">
    <label for="">Enter your address</label>
    <input type="text" name="address" placeholder="enter your address" class="form-control" value="{{$student->address}}">
    <label for="">Enter your contact number</label>
    <input type="text" name="mobile_no" placeholder="enter your number" class="form-control" value="{{$student->mobile_no}}">
    <input type="submit" value="Update record" class="btn btn-success mt-2">

</form>
</div>






@endsection
