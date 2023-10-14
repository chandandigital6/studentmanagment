@extends('layout')
@section('content')
   <h2 class="bg-dark text-center text-white p-3">All Student</h2>
   <a href="{{route('student.create')}}" class="btn btn-primary">add student</a>
  <table class="table table-bordered">
     <tr>
       <th>Id</th>
       <th>Student name</th>
       <th>Address</th>
       <th>Mobile_no</th>
      <th colspan="3" class="text-center">Action</th>
    </tr>
    @foreach ($student as $student)
        <tr>
           <td>{{$loop->iteration}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->mobile_no}}</td>
            <td><a href="{{route('student.edit',['student'=>$student])}}" class="btn btn-info">Edit</a></td>
            <td><a href="{{route('student.show',['student'=>$student])}}" class="btn btn-warning">show</a></td>
            <td><form action="{{route('student.delete',['student'=>$student])}}" method="post">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger">Delete</button> 
            </form></td>

        </tr>
    @endforeach
</table>

@endsection
