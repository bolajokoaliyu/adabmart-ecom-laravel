@extends('master')

@section('content')
<div class="custom-product">
<div class="col-sm-4">
  <a href="#">Filter</a>
</div>	
<div class="col-sm-4">
  <h1>Products Search result</h1>
<div class="trending-wrapper">
	@foreach($products as $product)  	
    <div class="searched-item">
    	<a href="detail/{{$product['id']}}">
      <img class="trending-img" src="{{$product['gallery']}}" alt="Product Image">
      <div class="">
      	<h2>{{$product['name']}}</h5>
        <h3>{{$product['description']}}</h5>
  	  </div> 
  	  </a>       
  	</div>
  	@endforeach 
</div>
</div>	
</div>

@endsection