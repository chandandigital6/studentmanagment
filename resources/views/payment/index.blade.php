@extends('layout')
@section('content')
   <h2 class="bg-dark text-center text-white p-3">Payment</h2>
   <a href="{{route('pay.ask')}}" class="btn btn-primary">New payment</a>
  <table class="table table-bordered">
     <tr>
       <th>Id</th>
            <th>Enrollment no.</th>
            <th>Date</th>
            <th>Amount</th>

      <th colspan="3" class="text-center">Action</th>
    </tr>
    @foreach ($getPayment as $payment)
        <tr>
           <td>{{$loop->iteration}}</td>
            <td>{{$payment->enrollment_id}}</td>
            <td>{{$payment->paid_date}}</td>
            <td>{{$payment->amount}}</td>

            <td><a href="{{route('payment.edit',['payment'=>$payment])}}" class="btn btn-info">Edit</a></td>
            <td><a href="{{route('payment.show',['payment'=>$payment])}}" class="btn btn-warning">show</a></td>
            <td><form action="{{route('payment.delete',['payment'=>$payment])}}" method="post">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger">Delete</button>
            </form>
          </td>
          <td><a href="{{route('report.index',['id'=>$payment])}}" class="btn btn-dark">Print</a>

{{--              <div class="card card-default">--}}
{{--                  <div class="card-body text-center">--}}
{{--                      <form action="" method="POST" >--}}
{{--                          @csrf--}}
{{--                          <script src="https://checkout.razorpay.com/v1/checkout.js"--}}
{{--                                  data-key="{{ env('RAZORPAY_KEY') }}"--}}
{{--                                  data-amount="10000"--}}
{{--                                  data-buttontext="Pay 100 INR"--}}
{{--                                  data-name="GeekyAnts official"--}}
{{--                                  data-description="Razorpay payment"--}}
{{--                                  data-image="/images/logo-icon.png"--}}
{{--                                  data-prefill.name="ABC"--}}
{{--                                  data-prefill.email="abc@gmail.com"--}}
{{--                                  data-theme.color="#ff7529">--}}
{{--                          </script>--}}
{{--                      </form>--}}
{{--                  </div>--}}
{{--              </div>--}}
          </td>

        </tr>
    @endforeach
</table>

@endsection
