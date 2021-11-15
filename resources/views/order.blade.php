@extends('master')

@section('content')
<div class="custom-product">
<div class="col-sm-10">
  <h1>Order Page</h1>
  <table class="table">  
  <tbody>
    <tr>      
      <td>Amount</td>
      <td>$ {{$total}}</td>      
    </tr>
    <tr>      
      <td>Tax</td>
      <td>0</td>      
    </tr>
    <tr>      
      <td>Delivery Charges</td>
      <td>$ 10</td>      
    </tr>
    <tr>      
      <td>Total Amount</td>
      <td>$ {{$total + 10}}</td>      
    </tr>
  </tbody>
</table>
<form action="/placeorder" method="post">
  @csrf
  <div class="form-group">    
    <textarea class="form-control" name="address" placeholder="Enter Your Address"></textarea>
  </div>
  <div class="form-group">
    <label>Payment Method</label><br><br>
    <input type="radio" value="cash" name="payment"> <span>Online Payment</span><br><br>
    <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span><br><br>
  </div>  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>	
</div>

@endsection