@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{asset('images/'.$product->image)}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go BAck</a>
        <h2>{{$product['name']}}</h2>
        <h3>Price : {{$product['price']}}</h3>
        <h4>Details : {{$product['description']}}</h4>
      <!--  <h3>Category : {{$product['category']}}</h3> -->
        <br><br>
        <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value={{$product['id']}} >
            <button class="btn btn-primary">Add to Cart</button>
        </form>
        <br><br>
        <a href="/paywithpaypal" class="btn btn-success"> Buy Now</a>
        <br><br>



        </div>
    </div>
</div>

@endsection 

