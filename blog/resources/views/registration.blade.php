@extends('layout.app')
@section('title', 'Registration')

<form action="{{route('register-user')}}" method="post">
    @csrf
  <div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="mb-3">
            <h3>Registration</h3>
            <hr>
    <label for="exampleInputEmail1" class="form-label">Name </label>
    <input type="text" class="form-control" id="" name="name" value="{{old('name')}}">
    <span class="text-danger">@error('name'){{$message}} @enderror</span>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="text" class="form-control" id="" name="email" value="{{old('email')}}">
    <span class="text-danger">@error('email'){{$message}} @enderror</span>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="" name="password" value="{{old('password')}}">
    <span class="text-danger">@error('password') {{$message}} @enderror</span>
  </div>
  
  <button type="submit" class="btn btn-primary">Register</button>
 
        </div>
        

    </div>
    <a href="/login">Alreday Have an account!Login</a>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    @if(Session::has('fail'))
        <div class="alert alert-success">
            {{Session::get('fail')}}
        </div>
    @endif
  </div>
 
</form>