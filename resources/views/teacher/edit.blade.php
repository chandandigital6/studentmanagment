@extends('layout')
@section('content')

<div class="">Update teacher record</div>
  <div>
    <form action="{{route('teacher.update',['teacher'=>$teacher])}}" method="POST">
    @csrf
   @method('put')
    <label for="">Enter your name</label>
    <input type="text" name="name" placeholder="enter your name" class="form-control" value="{{$teacher->name}}">
    <label for="">Enter your address</label>
    <input type="text" name="address" placeholder="enter your address" class="form-control" value="{{$teacher->address}}">
    <label for="">Enter your contact number</label>
    <input type="text" name="mobile_no" placeholder="enter your number" class="form-control" value="{{$teacher->mobile_no}}">
    <input type="submit" value="Update record" class="btn btn-success mt-2">

</form>
</div>






@endsection
