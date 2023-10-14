@extends('layout')
@section('content')

<div class="">Add new batch</div>
  <div>
    <form action="{{route('batch.store')}}" method="POST">
    @csrf
   
    <label for="">Enter batch name</label>
    <input type="text" name="name" placeholder="enter batch name" class="form-control">
    <label for="">Enter course id</label>
    {{-- <input type="text" name="course_id" placeholder="enter course id" class="form-control"> --}}
    <select name="course_id" id="" class="form-control">
        @foreach ($course as $id=>$name)
          <option value="{{$id}}">{{$name}}</option>
        @endforeach
    </select>
    <label for="">Enter batch start date</label>
    <input type="date" name="star_date" placeholder="enter batch start date" class="form-control">
    <input type="submit" value="add batch" class="btn btn-success mt-2">

</form>
</div>






@endsection
