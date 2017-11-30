@extends('layouts.app')

@section('content')
<div class="row">
  <div class="container">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Price</th>

        </tr>
      </thead>

      <tbody>
        @foreach($cartItems as $cartItem )
        <tr>
          <td>  {{$cartItem->name}}</td>
          <td>  ${{$cartItem->price}}</td>
        </tr>
        @endforeach

      </tbody>

    </table>
  </div>




</div>


<div class="row">
  <div class="col-md-6 col-md-offset-3">
      <form action="{{route('payment.store')}}"  method="post" id="payment-form">
        {{csrf_field()}}
        <div class="form-row">
          <label for="card-element">
            Credit or debit card
          </label>
          <div id="card-element">
            <!-- a Stripe Element will be inserted here. -->
          </div>

          <!-- Used to display Element errors -->
          <div id="card-errors" role="alert"></div>
        </div>

        <button>Submit Payment</button>
      </form>


</div>


@endsection
