<!DOCTYPE html>
<html>
<head>
	@section('title','contact us')
	<style type="text/css">
		.error{
			color: red;
		}
		h1{
			text-align: center;
		}


	</style>
</head>
<body>


	@extends('layouts.app')
@section('content')
<h1>contact</h1>
@if(!session()->has('message'))
<form method="post" action="{{route('contact.store')}}">
<div class="form-group" >
				<label for="name">name</label>
				<input type="text" name="name" placeholder="name" value="{{old('name')}}" id="name" class="form-control">
				<p class="error">{{$errors->first('name')}}</p>
				</div>



				<div class="form-group">

				<label for="email">E-mail</label>
				<input type="text" name="email" placeholder="email" value="{{old('email')}}" id="email" class="form-control">
				<p class="error">{{$errors->first('email')}}</p>
				</div>


				<div class="form-group">
					<label for="message">your message</label>
					<textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="your message here"></textarea>
					<p class="error">{{$errors->first('message')}}</p>
				</div>

				
				<center><button class="btn btn-primary">send message</button></center>
				
				@csrf
				</form>
				@endif

@endsection
</body>
</html>