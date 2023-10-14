@extends('layout')
@section('content')

<div class="">Update teacher record</div>
  <div>
    <form action="{{route('course.update',['course'=>$course])}}" method="POST">
    @csrf
   @method('put')
    <label for="">Enter course name</label>
    <input type="text" name="name" placeholder="enter course name" class="form-control" value="{{$course->name}}">
    <label for="">Enter your sllabus</label>
    <input type="text" name="syllabus" placeholder="enter sllabus" class="form-control" value="{{$course->syllabus}}">
    <label for="">Enter your contact number</label>
    <input type="text" name="duration" placeholder="enter course duration" class="form-control" value="{{$course->duration}}">
    <input type="submit" value="Update record" class="btn btn-success mt-2">

</form>
</div>






@endsection
