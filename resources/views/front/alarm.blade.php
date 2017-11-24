@extends('layouts.app')

@section('content')
<div class="row">
  <div class="container">


    @forelse($alarms as $alarm)
    <div class="col-md-3">
        <div class="img-wrapper">

          <a href="#">
           <img src="{{url('images',$alarm->image)}}"/>
          </a>
    </div>
    <h3>{{$alarm->name}}</h3>

    <h5>  {{$alarm->price}}</h5>

    <p>{{$alarm->description}}</p>
    <a href="{{route('cart.addItem',$alarm->id)}}" class="button expanded add-to-cart">
      Add to Cart
    </a>
  </div>

  @empty

  <h3>No alarms</h3>

  @endforelse
    </div>
</div>




@endsection
