@extends('master')
@section("content")
<div class="custom-product">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      @foreach($products as $item)
      <div class="carousel-item {{$item['id']==1?'active':''}}">
      <a href="detail/{{$item['id']}}">
        <img class="d-block w-100 slider-img" src="{{$item['gallery']}}">
        <div class="slider-text">
          <h3>{{$item['name']}}</h3>
          <p>{{$item['description']}}</p>
        </div>

      </a>
      </div>
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="trending-wrapper">
      <h3>Trending Products </h3>
    @foreach($products as $item)

    <div class="trending-item">
      <a href="detail/{{$item['id']}}">
      <img src="{{$item['gallery']}}" alt="" class="trending-image">
      <div class="">
        <h3>{{$item['name']}}</h3>
      </div>
    </a>
    </div>
    @endforeach
  </div>
</div>
@endsection
