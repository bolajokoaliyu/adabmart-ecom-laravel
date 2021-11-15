@extends('master')

@section('content')
<div class="custom-product">
<div class="col-sm-10">
  <h1>Orders List</h1>  
<div class="trending-wrapper">
	@foreach($orders as $item)  	
    <div class="row searched-item cart-list-divider">
      <div class="col-sm-4">    	
      <img class="trending-img" src="{{$item->gallery}}" alt="Product Image">  	  
      </div>      
      <div class="col-sm-4">      
        <div class="">
          <h2>Name: {{$item->name}}</h5>
          <h5>Delivery Status: {{$item->description}}</h5>
          <h5>Payment_method: {{$item->payment_method}}</h5>
          <h5>Payment_status{{$item->payment_status}}</h5>              
          <h5>Address: {{$item->address}}</h5>
        </div>       
      </div>      
  	</div>
  	@endforeach 
</div>
</div>	
</div>

@endsection