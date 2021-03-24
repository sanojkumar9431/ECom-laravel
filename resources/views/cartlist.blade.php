@extends('master')
@section("content")
<div class="custom-product">
    
    <div class="col-sm-10">
    <div class="trending-wrapper">
<h4>Result for Products</h4>
<div class="">
    @foreach($products as $item)
    <div class="row searched-item cart-list-devider">
    <div class="col-sm-3">
    <a href="detail/{{$item->id}}">
      <img class="trending-img" src="{{asset('images/'.$item->image)}}" >
      </a>
    </div>
    <div class="col-sm-4">
      <div class="">
        <h2>{{$item->name}}</h2>
        <h5>{{$item->description}}</h5>
        <h5>{{$item->price}}</h5>
        <div class="dropdown">
          <label for="exampleInputEmail1">Quantity</label>
          <select name="buyquantity" id="quantity" >    
            <option value="1">1</option> 
            <option value="2">2</option>      
            <option value="3">3</option>      
            <option value="4">4</option>      
            <option value="5">5</option>      
            <option value="6">6</option>      
            <option value="7">7</option>      
            <option value="8">8</option>      
            <option value="9">9</option>      
            <option value="10">10</option>      
            <select onchange="change()">
          </select>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning"> Remove to Cart</a>

      </div>
      </a>
    </div>
    </div>
    @endforeach
  </div>
  <a href="/checkout" class="btn btn-warning"> Check Out</a>
    </div>
</div>
<script>
function change() {
 // var x = document.getElementById("mySelect").value;
  //document.getElementById("demo").innerHTML = "You selected: " + x;
  get('/cartlist'+ cart.id & value)
}
</script>


@endsection 
