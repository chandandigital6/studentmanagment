@extends('layout')
@section('content')
   <h2 class="bg-dark text-center text-white p-3">All Batches</h2>
   <a href="{{route('batch.create')}}" class="btn btn-primary">add batch</a>
  <table class="table table-bordered">
     <tr>
       <th>Id</th>
       <th>batch name</th>
       <th>Course name</th>
       <th>Date</th>
      <th colspan="3" class="text-center">Action</th>
    </tr>
    @foreach ($getBatch as $Batches)
        <tr>
           <td>{{$loop->iteration}}</td>
            <td>{{$Batches->name}}</td>
            <td>{{$Batches->name}}</td>
            <td>{{$Batches->star_date}}</td>
            <td><a href="{{route('batch.edit',['batch'=>$Batches])}}" class="btn btn-info">Edit</a></td>
            <td><a href="{{route('batch.show',['batch'=>$Batches])}}" class="btn btn-warning">show</a></td>
            <td><form action="{{route('batch.delete',['batch'=>$Batches])}}" method="post">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger">Delete</button> 
            </form></td>

        </tr>
    @endforeach
</table>

@endsection
