@extends('layout')
@section('content')

<div class="">Add new course</div>
  <div>
    <form action="{{route('course.store')}}" method="POST">
    @csrf
   
    <label for="">Enter course name</label>
    <input type="text" name="name" placeholder="enter course name" class="form-control">
    <label for="">Enter syllabus</label>
    <input type="text" name="syllabus" placeholder="enter syllabus" class="form-control">
    <label for="">Enter course duration</label>
    <input type="text" name="duration" placeholder="enter duration" class="form-control">
    <input type="submit" value="add course" class="btn btn-success mt-2">

</form>
</div>






@endsection
