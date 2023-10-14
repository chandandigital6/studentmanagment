@extends('layout')
@section('content')
   <h2 class="bg-dark text-center text-white p-3">Enrollment </h2>
   <a href="{{route('enroll.create')}}" class="btn btn-primary">add new enrollment</a>
  <table class="table table-bordered">
     <tr>
       <th>Id</th>
       <th>Enrollment no.</th>
       <th>batch id</th>
       <th>Student id</th>
       <th>join Date</th>
       <th>Fee</th>
       <th>Date</th>
      <th colspan="3" class="text-center">Action</th>
    </tr>
    @foreach ($getEnroll as $enroll)
        <tr>
           <td>{{$loop->iteration}}</td>
            <td>{{$enroll->enroll_no}}</td>
            <td>{{$enroll->batch->name}}</td>
            <td>{{$enroll->student->name}}</td>
            <td>{{$enroll->join_date}}</td>
            <td>{{$enroll->fee}}</td>
            <td><a href="{{route('enroll.edit',['enrollment'=>$enroll])}}" class="btn btn-info">Edit</a></td>
            <td><a href="{{route('enroll.show',['enrollment'=>$enroll])}}" class="btn btn-warning">show</a></td>
            <td><form action="{{route('enroll.delete',['enrollment'=>$enroll])}}" method="post">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger">Delete</button> 
            </form></td>

        </tr>
    @endforeach
</table>

@endsection
