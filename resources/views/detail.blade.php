@extends('master')
@section("content")
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <img class="detail-img" src="{{$product['gallery']}}" alt="" >
    </div>
    <div class="col-sm-6">
      <a href="/">Go back</a>
      <h3>{{$product['name']}}</h3>
      <h3>Price : {{$product['price']}}</h3>
      <h4>Detail : {{$product['description']}}</h4>
      <br><br>
      <form class="" action="/add_to_cart" method="POST">
          @csrf
          <input type="hidden" name="product_id" value="{{$product['id']}}">
          <button class="btn btn-primary">Add to Cart</button>
      </form>
      <br><br>
      <button class="btn btn-success">Buy Now</button>
      <br><br>
    </div>
  </div>
</div>
@endsection
