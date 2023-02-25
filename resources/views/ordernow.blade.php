@extends('master')
@section('content')
<div class="container-fluid">
    <div class=" custom-product">
     <div class="col-sm-10">
        <table class="table">
           
            <tbody>
              <tr>
                {{-- <th scope="row">1</th> --}}
                <td>Amount</td>
                <td>$ {{$total}}</td>
              
              </tr>
              <tr>
                
                <td>Tax</td>
                <td>$ 0</td>
               
              </tr>
               <tr>
                
                <td>Delivery</td>
                <td>$ 10</td>
               
              </tr>
              <tr>
                
                <td >Total Amount</td>
                <td>$  {{$total+10}}</td>
              </tr>
            
            </tbody>
          </table>
     
     </div>
     <form action="/placeorder" method="POST">
    @csrf
    
      <div class="mb-3 col-sm-8">
       
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your Address" name="address"></textarea>
      </div>
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Payment Method</label>
    
    <div class="form-check mt-2">
      <input class="form-check-input" type="radio" name="payment" value="cash" id="flexRadioDefault1">
      <label class="form-check-label" for="flexRadioDefault1">
       Online Payment
      </label>
      
    </div>
    <div class="form-check mt-3">
      <input class="form-check-input" type="radio"  name="payment" value="cash" id="flexRadioDefault1">
      <label class="form-check-label" for="flexRadioDefault1">
        EMI Payment
      </label>
      
    </div>
    <div class="form-check mt-3">
      <input class="form-check-input" type="radio" name="payment" value="cash" id="flexRadioDefault1">
      <label class="form-check-label" for="flexRadioDefault1">
        Payment on Delivery
      </label>
      
    </div>
  </div>
 
  <button type="submit" class="btn btn-primary mt-3">Order Now</button>
    </div>
</form>
    </div>
@endsection
