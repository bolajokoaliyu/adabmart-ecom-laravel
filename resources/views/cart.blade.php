@extends('master')

@section('content')
<div class="custom-product">
<div class="col-sm-10">
  <h1>Cart List</h1>
  <a href="/ordernow" class="btn btn-success">Order Now</a>
<div class="trending-wrapper">
	@foreach($products as $product)  	
    <div class="row searched-item cart-list-divider">
      <div class="col-sm-4">
    	<a href="detail/{{$product->id}}">
      <img class="trending-img" src="{{$product->gallery}}" alt="Product Image">      
  	  </a>
      </div>      
      <div class="col-sm-4">      
      <div class="">
        <h2>{{$product->name}}</h5>
        <h3>{{$product->description}}</h5>
      </div>       
      </div>
      <div class="col-sm-4">
      <a href="/removecart/{{$product->cart_id}}" class="btn btn-warning">Remove From Cart</a>
      </div>
  	</div>
  	@endforeach 
</div>
<a href="/ordernow" class="btn btn-success">Order Now</a>
</div>	
</div>

@endsection