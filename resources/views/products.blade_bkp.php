@extends('layouts.app')

@section('content')
    <h1>Products</h1>
            <div class="well">
                <div class="row">
                <div class="col-md-4 col-sm-4">
                        <h2>Name</h2>
                </div>
                <div class="col-md-4 col-sm-4">
                       <h3>Price</h3>
                        
                </div>  
                <div class="col-md-4 col-sm-4">
                       <h3>Action</h3>
                        
                </div> 				
                </div>   
            </div>
    @if(count($products)>0)
        @foreach ($products as $product)
            <div class="well">
                <div class="row">
                <div class="col-md-4 col-sm-4">
                        <h4>{{$product->name}}</h4>
                </div>
                <div class="col-md-4 col-sm-4">
                       <h4>{{$product->price}}</h4>
                        
                </div>  
                <div class="col-md-4 col-sm-4">
                       <h3>Buy Now</h3>
                        
                </div> 				
                </div>   
            </div>
        @endforeach
    @else
        <p>No products found</p>
    @endif
@endsection

