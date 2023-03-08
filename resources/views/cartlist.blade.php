@extends('master')
@section('content')
    <div class=" custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper ">
                <h3 class="mb-5 text-primary">Results</h3>
                <a href="ordernow" class="btn btn-success mx-3">Order Now</a><br><br>
                @foreach ($products as $item)
                    <div class="row searched-item">
                        <div class="col-sm-4">
                            <a href="detail/{{ $item->id }}">
                                <img class="trending-image" src="{{ $item->gallery }}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                                <h4>{{ $item->name }}</h4>
                                <h5>{{ $item->description }}</h5>
                            </div>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning mt-4">Remove</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="ordernow" class="btn btn-success mx-5">Order Now</a><br><br>
        </div>
    </div>
@endsection
