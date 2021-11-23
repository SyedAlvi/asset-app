@extends('master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <form>
        <div class="form-group">
          <label for="exampleFormControlInput1">Product Name</label>
          <input type="name" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Product Name">
          
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Product Id</label>
            <input type="name"  class="form-control" id="exampleFormControlInput1" placeholder="ID">
            
          </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Product Category</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
       
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Product Details</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create New Product</button>
      </form>
    </html>
@endsection