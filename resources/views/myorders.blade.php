@extends('master')
@section('content')
    <div class=" custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper ">
            <h3 class="mb-5 text-primary">My Orders</h3>
            
            @foreach ($orders as $item)
                <div class="row searched-item">
                   <div class="col-sm-4">
                    <a href="detail/{{ $item->id }}">
                        <img class="trending-image" src="{{ $item->gallery }}">
                       
                    </a>
                   </div>
                   <div class="col-sm-4">
                   
                        <div >
                            <h2>Name : {{ $item->name }}</h2>
                            <h6>Delivery Status : {{ $item->status }}</h6>
                            
                          
                            <h6>Address : {{$item->address}}</h6>
                            <h6>payment Status : {{ $item->payment_status }}</h6>
                            <h6>Payment method : {{ $item->payment_method }}</h6> 

                        </div>
                    </a>
                   </div>
                  
                </div>
            @endforeach
           


        </div>
       
     </div>
    </div>
@endsection
