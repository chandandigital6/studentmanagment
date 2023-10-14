@extends('layout')
@section('content')

<div class="">Add new payment</div>
  <div>
    <form action="{{route('payment.store')}}" method="POST">
    @csrf
    <label for="">enter select your enroll number</label>
    <select name="enrollment_id" id="" class="form-control">
      @foreach ($enrollment as $id=>$enrollno)
          {{ $id }}
        <option value="{{$id}}">{{$enrollno}}</option>
      @endforeach
  </select>
    {{-- <label for="">enter your enrollment number</label>
    <input type="text" name="enrollment_id" placeholder="enter enroll number" class="form-control"> --}}

    <label for="">Enter paid  date </label>
    <input type="date" name="paid_date" placeholder="enter paid_date" class="form-control">
    <label for="">Enter amount</label>
    <input type="number" name="amount" placeholder="enter fee" class="form-control">
    <input type="submit" value="payment" class="btn btn-success mt-2">

</form>
</div>






@endsection
