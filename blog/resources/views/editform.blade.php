@extends('layout.home')
@section('title', 'Edit Page')
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<form action="" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$student->name}}">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">City</label>
                    <input type="text" name="city" id="city" class="form-control" value="{{$student->city}}">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Marks</label>
                    <input type="text" name="marks" id="marks" class="form-control" value="{{$student->marks}}">
                </div>
                <div class="mb-3">
                    <button class="btn btn-info w-100">Edit</button>
                </div>
            </form>
            @if(session()->has('status'))
            	<div class="alert alert-success">
            		{{session('status')}}
            	</div>
            @endif
			</div>
		</div>
	</div>
