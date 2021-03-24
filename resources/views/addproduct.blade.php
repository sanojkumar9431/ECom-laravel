<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-com Project</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"></script>

</head>



<div class="container custom-login">
  <div class="row">
  <a href="/addcategory" class="btn btn-warning"> Add Category</a>
    <div class="col-sm-4 col-sm-offset-4">
    
      <form action="save" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Product Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product Name">

        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Price</label>
          <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Price">

        </div>

        <div class="dropdown">
          <label for="exampleInputEmail1">Category</label>

          <select name="category" id="category">
            @foreach($category as $item)
            <option value="{{$item->id}}">{{$item->category}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Quantity</label>
          <input type="integer" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Quantity">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <input type="name" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description">
        </div>


        <label class="form-label" for="customFile">Image</label>
        <input type="file" name="image" class="form-control" id="customFile" />
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
  
  </form>
</div>

<a href="/removeproduct" class="btn btn-warning" >Remove product</a>
<a href="/logout" class="btn btn-warning" >Logout</a>

</div>
</div>