@extends('layouts.app')

@section('content')

 <center> <h3>{{$user->name}}</h3> </center>

@forelse($user->orders as $order)
 <table class="table table-bordered">
   <tr>
     <th>Item</th>
     <th>Name</th>
     <th>Price</th>
   </tr>
          @forelse($order->products as $product)
          <tr>
            <td>
              <div class="col-md-3">
                  <div class="img-wrapper">

                    <a href="#">
                     <img src="{{url('images',$product->image)}}"/>
                    </a>
              </div>
            </td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
          @empty
              no product

          @endforelse


    @empty

    <h5>No items</h5>


@endforelse

  </tr>
</table>
@endsection
