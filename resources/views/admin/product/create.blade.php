@extends('layouts.app')

@section('content')

<h3> Add Product</h3>

  <div class="row">
    <div class="col-md-8 col-offset-3">
      {!! Form::open(['route' => 'product.store', 'method' => 'post', 'files' => true]) !!}
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
              {{ Form::label('door', 'Door') }}
              {{ Form::select('door', [ 'one door' => 'One door', 'Two door' => 'Two door','Three door'=>'Three door'], null, ['class' => 'form-control']) }}
          </div>

        <div class="form-group">
          {{ Form:: label('image', 'Image')}}
          {{ Form:: file('image', array('class' => 'form-control')) }}

        </div>

        {{Form::submit('Create', array('class' => 'btn btn->default'))}}
      {!! Form::close() !!}

    </div>

  </div>



@endsection
