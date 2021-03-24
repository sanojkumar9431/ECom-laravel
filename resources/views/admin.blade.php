<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-com Project</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"></script>

</head>

<!--
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
        <form action="admin">
        
        <a href="/addproduct" class="btn btn-warning" >Add Product</a>
        <a href="/addcategory" class="btn btn-warning" >Add Category</a>
        <a href="/removeproduct" class="btn btn-warning" >Remove Product</a>
        <a href="/logout" class="btn btn-warning" >Logout</a>
        </form>
        </div>
    </div>
</div>
-->
<table class="table">
  <thead>
    <tr>
      <th scope="col" >
      <a href="/addproduct" class="btn btn" >Add Product</a></th>  

    </tr>
    <tr>
      <th scope="col">
      
      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      
      </th>    
    </tr>
    <tr>
      <th scope="col">
      <?php $sum = 0 ?>
          @foreach($products as $item)
					 <?php $sum +=1  ?>			
          	
          @endforeach
          Total Items:{{$sum}}
      </th>    
    </tr>
  </thead>
  
</table>
<table class="table table-striped">

  <thead>
    <tr>
      <th scope="col">
      <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  </label>
</div>
      </th>
      <th scope="col">Product Name</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Sales</th>
      <th scope="col">Earning</th>
      <th scope="col">Updated at</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $item)
    <tr>
   
      <th scope="row">
      <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  </label>
</div>
      </th>
      <td>{{$item['name']}}</td>
      <td>{{$item['category.']}}</td>
      <td>{{$item['price']}}</td>
      <td>{{$item['quantity']}}</td>
      <td>-</td>
      <td>{{$item['updated_at']}}</td>
     
    </tr>
    @endforeach
  </tbody>
</table>

