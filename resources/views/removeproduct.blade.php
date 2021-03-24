<div class="trending-wrapper">
<h1></h1>

<div class="row">
    @foreach($addproducts as $item)
    <div class ="col-sm-1">
    
      <img class="trending-img" src="{{asset('images/'.$item->image)}}" width="100" height="100" >
    </div>
      <div class="col-sm-1">
        <h3>{{$item['name']}}</h3>
       
       <a href="removeproduct/{{$item['id']}}" class="btn btn-warning" >Remove Product</a>
      </div>
 
    </div>
    @endforeach
    <a href="/logout" class="btn btn-warning" >Logout</a>
  </div>

