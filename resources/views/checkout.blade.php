@extends('master')
@section("content")
<div class="custom-product">
    
    <div class="col-sm-10">
    <div class="trending-wrapper">
<h2>Place your order</h2>
<div class="">
    @foreach($products as $item)
    <div class="row searched-item cart-list-devider">
    <div class="col-sm-1"> 
    <a href="detail/{{$item->id}}">
      <img class="trending-img" src="{{asset('images/'.$item->image)}}" >
      </a>
    </div>
    <div class="col-sm-2">
      <div class="">
        <h2>{{$item->name}}</h2>
        <h2>{{$item->price}}</h2>
      </div>
      <div class="col-sm-3">
    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning"> Remove to Cart</a>
      </div>
    </div>
      </a>
    </div>
    </div>
    @endforeach
    
    <a href="/" class="btn btn-success"> Add Product</a>
  </div>
    </div>
    <div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-1">
        <form action="login" method="post">
        <div class="form-group">
            @csrf
            <label for="exampleInputEmail1">Address</label>
            <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">City</label>
            <input type="text" name="city" class="form-control" id="exampleInputPassword1" placeholder="city">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">State</label>
            <input type="text" name="state" class="form-control" id="exampleInputPassword1" placeholder="state">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Pin Code</label>
            <input type="text" name="pin code" class="form-control" id="exampleInputPassword1" placeholder="pincode">
        </div>
        
        <a href="/paywithpaypal" class="btn btn-success"> Order Now</a>
        </form>
        </div>
    </div>
</div>
</div>


@endsection 
