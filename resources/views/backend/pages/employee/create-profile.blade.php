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

<body>
  <form action="{{route('employee.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
          </div>
        </div>
        <div class="form-group col-md-6">
          <label for="inputaddress">Address</label>
          <input type="text" class="form-control" name="address" >
        </div>
        <div class="form-group col-md-6">
          <label for="inputmobile">Mobile Number</label>
          <input type="number" name="number" class="form-control">
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" name="city" class="form-control" >
          </div>
          <div class="form-group">
            <label for="inputAddress2">Image</label>
            <input type="file" name="image" class="form-control" id="inputAddress2">
          </div>
          <button type="submit" class="btn btn-primary">Create New Employee</button>
      </form>
    </div>
  </form>
</body>

</html>
@endsection