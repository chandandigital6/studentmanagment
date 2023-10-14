@extends('layout')
@section('content')

<div class="">Update teacher record</div>
  <div>
    <form action="{{route('batch.update',['batch'=>$batch])}}" method="POST">
    @csrf
   @method('put')
   <label for="">Enter batch name</label>
    <input type="text" name="name" placeholder="enter batch name" class="form-control" value="{{$batch->name}}">
    <label for="">Enter course id</label>
    <input type="text" name="course_id" placeholder="enter course id" class="form-control" value="{{$batch->course_id}}">
    <label for="">Enter batch start date</label>
    <input type="date" name="star_date" placeholder="enter batch start date" class="form-control" value="{{$batch->star_date}}" >
    <input type="submit" value="update batch" class="btn btn-success mt-2">

</form>
</div>






@endsection
