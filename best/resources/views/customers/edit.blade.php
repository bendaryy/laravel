<!DOCTYPE html>
<html>
<head>
	@section('title','add new customer')
	<style type="text/css">
		p{
			display: inline-block;
		}
		.error{
			color: red;
		}
		input[type="submit"]{
			display: block;
			margin: 5px;
		}
		h1,h2,input[class="btn btn-primary"][value="SAVE EDITS"]{
			margin: auto;
			padding: 10px;
			text-align: center;
		}
	
	</style>
</head>
<body>

	@extends('layouts.app')
   
<div class="row">
	<div class="col-12">
		<h1>edit customer {{$customer->name}}</h1>
	</div>
</div>
@section('content')
		

		<form action="{{route('customers.update',['customer'=>$customer])}}" method="post"  enctype="multipart/form-data">
				@method('patch')
				@include('customers.form')

				<input type="submit" value="SAVE EDITS" class="btn btn-primary">
		</form>
		
@endsection

</body>
</html>