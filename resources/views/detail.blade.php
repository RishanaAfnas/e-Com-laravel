@extends('master')
@section('content')
    <div class="container">
        <div class="row detail">
            <div class="col-sm-6">
                <img class="detail-img" src="{{ $product['gallery'] }}" alt="">

            </div>
            <div class="col-sm-6">
                <a class="text-primary" href="/">Go Back</a>
                <h2>{{ $product['name'] }}</h2>
                <h4>Price : {{ $product['price'] }}<h4>
                        <h5>Details : {{ $product['description'] }}</h5>
                        <h5>Category: {{ $product['category'] }}</h5>
                        <br>
                        <form action="/add_to_cart" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product['id'] }}">

                            <button class="btn btn-primary">Add to Cart</button>
                        </form>
                        <br><br>
                        <button class="btn btn-success">Buy Now</button>
                        <br><br>

            </div>
        </div>

    </div>
@endsection
