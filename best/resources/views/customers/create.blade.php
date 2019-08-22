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
		h1,h2,input[class="btn btn-primary"][value="ADD CUSTOMER"]{
			margin: auto;
			padding: 10px;
			text-align: center;
		}
	
	</style>
</head>
<body>

	@extends('layouts.app')
 
@section('content')
		<h1>add new customer</h1>

		<form action="{{route('customers.store')}}" method="post" enctype="multipart/form-data">
				@include('customers.form')

				<input type="submit" value="ADD CUSTOMER" class="btn btn-primary">
		</form>
		
@endsection

</body>
</html>