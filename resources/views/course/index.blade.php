@extends('layout')
@section('content')
   <h2 class="bg-dark text-center text-white p-3">All Course</h2>
   <a href="{{route('course.create')}}" class="btn btn-primary">add course</a>
  <table class="table table-bordered">
     <tr>
       <th>Id</th>
       <th>Course name</th>
       <th>Syllabus</th>
       <th>Duration</th>
      <th colspan="3" class="text-center">Action</th>
    </tr>
    @foreach ($course as $courses)
        <tr>
           <td>{{$loop->iteration}}</td>
            <td>{{$courses->name}}</td>
            <td>{{$courses->syllabus}}</td>
            <td>{{$courses->duration}}</td>
            <td><a href="{{route('course.edit',['course'=>$courses])}}" class="btn btn-info">Edit</a></td>
            <td><a href="{{route('course.show',['course'=>$courses])}}" class="btn btn-warning">show</a></td>
            <td><form action="{{route('course.delete',['course'=>$courses])}}" method="post">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger">Delete</button> 
            </form></td>

        </tr>
    @endforeach
</table>

@endsection
