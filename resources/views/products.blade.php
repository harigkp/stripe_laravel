@extends('layouts.app')

@section('content')
<h1>Products</h1>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th class="text-center">Name</th>
      <th class="text-center">Price</th>
      <th class="text-center">Action</th>
    </tr>
  </thead>
  @if(count($products)>0)
        @foreach ($products as $product)
  <tbody>
    <tr>
      <td class="text-center">{{$product->name}}</td>
      <td class="text-center">Rs. {{$product->price}}</td>
      <td class="text-center"><a class="btn btn-primary" href="/productdetail/{{$product->name}}/{{$product->id}}" role="button">Buy Now</a></td>
    </tr>
 @endforeach
    @else
        <p>No products found</p>
    @endif   
  </tbody>
</table>
@endsection