@extends('master')
@section('content')
<div id="carouselExampleDark" class="carousel carousel-dark slide custom-product">
  <div class="carousel-inner">
    @foreach ($products as $item)
    <div class="carousel-item {{$item['id']==1 ? 'active':''}}" data-bs-interval="10000">
      <a href="detail/{{$item['id']}}">
        <img class="slider-img" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block slider-text">
        <h2>{{$item['name']}}</h2>
        <p>{{$item['description']}}</p>
      </div>
      </a>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <div class="trending-wrapper " >
    <h3 >Trending Products</h3>
    @foreach ($products as $item)
     <div class="trending-item">
      <a href="detail/{{$item['id']}}">
      <img class="trending-image" src="{{$item['gallery']}}" >
      <div class=>
        <h4>{{$item['name']}}</h4>
       
      </div>
    </a>
    </div>
    @endforeach
    

  </div>
</div>

@endsection
