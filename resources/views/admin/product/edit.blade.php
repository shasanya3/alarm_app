@extends('layouts.app')

@section('content')

<center><h3> Edit Product</h3></center>


  <div class="row">
    <div class="col-xs-8 col-xs-offset-2">
      {!! Form::model($product,['route' => ['product.update',$product->id], 'method' => 'PUT', 'files' => true]) !!}
        <div class="form-group">
          {{ Form:: label('name', 'Name')}}
          {{ Form:: text('name', null, array('class' => 'form-control')) }}

        </div>

        <div class="form-group">
          {{ Form:: label('description', 'Description')}}
          {{ Form:: text('description', null, array('class' => 'form-control')) }}

        </div>

        <div class="form-group">
         {{ Form:: label('price', 'Price')}}
         {{ Form:: text('price', null, array('class' => 'form-control')) }}

       </div>


        <div class="form-group">
          {{ Form:: label('image', 'Image')}}
          {{ Form:: file('image', array('class' => 'form-control')) }}

        </div>

             {{ Form::submit('Edit', array('class' => 'btn btn-default')) }}
            {!! Form::close() !!}

    </div>

  </div>



@endsection
