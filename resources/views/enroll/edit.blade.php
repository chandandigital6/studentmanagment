@extends('layout')
@section('content')

<div class="">Update teacher record</div>
  <div>
    <form action="{{route('enroll.update',['enrollment'=>$enrollment])}}" method="POST">
    @csrf
   @method('put')
   <label for="">enter your enrollment number</label>
   <input type="text" name="enroll_no" placeholder="enter enroll number" class="form-control" value="{{$enrollment->enroll_no}}">
   <label for="">Enter batch_id </label>
   <input type="text" name="batch_id" placeholder="enter batch id" class="form-control" value="{{$enrollment->batch_id}}">
   <label for="">Enter student_id </label>
   <input type="text" name="student_id" placeholder="enter student_id" class="form-control" value="{{$enrollment->student_id}}">
   <label for="">Enter join_date</label>
   <input type="date" name="join_date" placeholder="enter join_date" class="form-control" value="{{$enrollment->join_date}}">
   <label for="">Enter fee</label>
   <input type="number" name="fee" placeholder="enter fee" class="form-control" value="{{$enrollment->fee}}">
   <input type="submit" value="update enrollment" class="btn btn-success mt-2">

</form>
</div>






@endsection
