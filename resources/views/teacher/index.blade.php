@extends('layout')
@section('content')
   <h2 class="bg-dark text-center text-white p-3">All Teacher</h2>
   <a href="{{route('teacher.create')}}" class="btn btn-primary">add teacher</a>
  <table class="table table-bordered">
     <tr>
       <th>Id</th>
       <th>Student name</th>
       <th>Address</th>
       <th>Mobile_no</th>
      <th colspan="3" class="text-center">Action</th>
    </tr>
    @foreach ($teacher as $teacher)
        <tr>
           <td>{{$loop->iteration}}</td>
            <td>{{$teacher->name}}</td>
            <td>{{$teacher->address}}</td>
            <td>{{$teacher->mobile_no}}</td>
            <td><a href="{{route('teacher.edit',['teacher'=>$teacher])}}" class="btn btn-info">Edit</a></td>
            <td><a href="{{route('teacher.show',['teacher'=>$teacher])}}" class="btn btn-warning">show</a></td>
            <td><form action="{{route('teacher.delete',['teacher'=>$teacher])}}" method="post">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger">Delete</button> 
            </form></td>

        </tr>
    @endforeach
</table>

@endsection
