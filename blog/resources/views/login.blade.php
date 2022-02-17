@extends('layout.app')
@section('title', 'Login')



<form action="{{route('login-user')}}" method="post">
  @csrf
  <div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="mb-3">
            <h3>Login</h3>
            <hr>
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="text" class="form-control" id="" name="email" value="{{old('email')}}">
    <span class="text-danger">@error('email'){{$message}} @enderror</span>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="" name="password" value="{{old('password')}}">
    <span class="text-danger">@error('password'){{$message}} @enderror</span>
  </div>
  
  <button type="submit" class="btn btn-danger">Login</button>
 
        </div>
        

    </div>
    <a href="/register">If you don't Have an account!Register</a>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    @if(Session::has('fail'))
        <div class="alert alert-danger">
            {{Session::get('fail')}}
        </div>
    @endif
  </div>
 
</form>