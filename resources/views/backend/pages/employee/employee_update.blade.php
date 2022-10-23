@extends('master')
@section('content')


    <div>
        <h1>Update employee information</h1>
        <hr>
        @if(session()->has('success'))
        <p class="alert alert-success">
          {{session()->get('success')}}
        </p>
    @endif
    
    @if ($errors->any())
    <div class="alert alert-warning" role="alert">
      <ul>
        @foreach ($errors->all() as $error)
          <li>
            {{$error}}
          </li>   
        @endforeach
      </ul>
    </div>
    @endif
    <img style="border-radius: 4px;" width="500px;" src="{{url('/uploads/users/'. $user->image)}}" alt="employee">
        <form action="{{route('employee.update',$user->id)}}" method="POST" enctype="multipart/form-data" >
     
          @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                  <div class="col">
                    <label for="inputEmail4">Name</label>
                    <input value="{{$user->name}}"type="text" name="name" class="form-control" placeholder=" Employee Name">
                  </div>
                    </div>
                </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input value="{{$user->email}}" type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="inputAddress">Address</label>
                <input value="{{$user->address}}" type="text" name="address" class="form-control" id="inputAddress" >
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input value="{{$user->city}}" type="text" name="city" class="form-control" id="inputCity">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputPassword6">Mobile Number</label>
                <input value="{{$user->number}}" type="text" name="number" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
            </div>
              </div>    
            </div>
            <div class="form-group col-md-6">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">employee Image</label>
              <input value="{{url('/uploads/users/'.$user->image)}}"name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          </div>
            
            <button type="submit" class="btn btn-success">Update</button>
          </form>
    </div>
@endsection