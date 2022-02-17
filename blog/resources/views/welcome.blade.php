
@extends('layout.home')
@section('title', 'Home Page')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6">
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" required="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">City</label>
                    <input type="text" name="city" id="city" required="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Marks</label>
                    <input type="text" name="marks" id="marks" required="" class="form-control">
                </div>
                <div class="mb-3">
                    <button class="btn btn-success w-100">Save Student Data</button>
                </div>
            </form>
            @if(session()->has('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
        </div>

        <div class="col-sm-6">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">City</th>
                        <th scope="col">Marks</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $stu)
                    <tr>
                        <td>{{$stu->id}}</td>
                        <td>{{$stu->name}}</td>
                        <td>{{$stu->city}}</td>
                        <td>{{$stu->marks}}</td>
                        <td>
                            <a href="{{route('edit', $stu->id)}}" class="btn btn-info btn-sm">Edit</a>
                            <a href="{{route('destroy', $stu->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

