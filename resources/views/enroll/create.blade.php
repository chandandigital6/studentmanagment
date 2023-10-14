@extends('layout')
@section('content')

<div class="">Add new batch</div>
  <div>
    <form action="{{route('enroll.store')}}" method="POST">
    @csrf
   
    <label for="">enter your enrollment number</label>
    <input type="text" name="enroll_no" placeholder="enter enroll number" class="form-control">
    <label for="">Enter batch_id </label>
    {{-- <input type="text" name="batch_id" placeholder="enter batch id" class="form-control"> --}}
    <select name="batch_id" class="form-control">
      @foreach ($batch as $id=>$name)
      <option value="{{$id}}">{{$name}}</option>
    @endforeach
    </select>
    <label for="">Enter student_id </label>
    {{-- <input type="text" name="student_id" placeholder="enter student_id" class="form-control"> --}}
    <select name="student_id" class="form-control">
      @foreach ($student as $id=>$name)
      <option value="{{$id}}">{{$name}}</option>
    @endforeach
    </select>
    <label for="">Enter join_date</label>
    <input type="date" name="join_date" placeholder="enter join_date" class="form-control">
    <label for="">Enter fee</label>
    <input type="number" name="fee" placeholder="enter fee" class="form-control">
    <input type="submit" value="add enrollment" class="btn btn-success mt-2">

</form>
</div>






@endsection
