
@extends('master')

@section('content')
<div class="container">  	 	
    <div class="row">
    	<div class="col-sm-6">
    		<img class="detail-img" src="{{$product['gallery']}}" alt="Image">
    	</div>      
      <div class="col-sm-6">
      	<a href="/">Go Back</a>
      	<h5>{{$product['name']}}</h5>
    	<h4>Price: {{$product['price']}}</h4>
    	<h4>Category: {{$product['category']}}</h4>
    	<h4>Description: {{$product['description']}}</h4>
    	<br><br>
    	<form action="/addToCart" method="post">
    		@csrf
    		<input type="hidden" name="product_id" value="{{$product['id']}}">
    		<button class="btn btn-primary">Add to Cart</button>
    	</form>
    	
    	<br><br>
    	<button class="btn btn-success">Buy Now</button>
  	  </div>
  	       
  	</div>
  	
   
</div>

@endsection