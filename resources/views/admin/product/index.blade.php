@extends('layouts.app')

@section('content')

  <center><h3> Company Products</h3></center>
  <div class="container">
    <table class="table table-hover">
      <thead>
        <th>Name</th>
        <th>Price</th>
        <th>Delete Product</th>
        <th>Edit Product</th>
      </thead>

      <tbody>
        @foreach($products as $product)
        <tr>
          <td>{{$product->name}}</td>
          <td>{{$product->price}}</td>

          <td>
            <form action="{{route('product.destroy',$product->id)}}"  method="POST">
           {{csrf_field()}}
           {{method_field('DELETE')}}
           <input class="btn btn-sm btn-danger" type="submit" value="Delete">
         </form>
          </td>
          <td>
            <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary btn-sm ">Edit</a>
          </td>
        </tr>
            @endforeach
      </tbody>

    </table>

  </div>




@endsection
