@extends('layout')
@section('content')

<div class="">Update payment</div>
  <div>
    <form action="{{route('payment.update',['payment'=>$payment])}}" method="POST">
    @csrf
   @method('put')
   <label for="">enter select your enroll number</label>

  <input type="text" name="enrollment_id" placeholder="enter enroll number" class="form-control" value="{{$payment->enrollment_id}}">

  <label for="">Enter  date </label>
  <input type="date" name="paid_date" placeholder="enter paid_date" class="form-control" value="{{$payment->paid_date}}">
  <label for="">Enter amount</label>
  <input type="number" name="amount" placeholder="enter fee" class="form-control" value="{{$payment->amount}}">
  <input type="submit" value="modify payment" class="btn btn-success mt-2">

</form>
</div>






@endsection
