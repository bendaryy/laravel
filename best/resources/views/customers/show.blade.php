@extends('layouts.app')

@section('title','details for '.$customer->name)
@section('content')


<style type="text/css">
	table,tr,th,td{
		margin: auto;
		padding: 10px;
		border: 1px solid black;
		text-align: center;
	}
	h1{
		text-align: center;
	}
</style>
<h1>details of {{$customer->name}}</h1>

<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th>company name</th>
		<th>company phone</th>
		<th>statues</th>
		<th colspan="2">action</th>
	</tr>

	<tr>
		<td>{{$customer->id}}</td>
		<td>{{$customer->name}}</td>
		<td>{{$customer->email}}</td>
		<td>{{$customer->company->name}}</td>
		<td>{{$customer->company->phone}}</td>
		<td>{{$customer->active}}</td>
		<td>
		<a href="{{route('customers.edit',['customer'=>$customer])}}" class="btn btn-success">Edit</a>
	</td>
		<td>
			<form action="{{action('customersController@destroy',['customer'=>$customer])}}" method="post">
			@method('delete')	
			@csrf
			<button type="submit" class="btn btn-danger">Delete</button>
			</form>
		</td>
	</tr>

</table>
	
@if($customer->image)

<div class="row">
	<div class="col-12">

		<center>
			<h2 style="margin-top: 60px;">profile picture</h2>
			<a href="{{asset('storage/'.$customer->image)}}">
		<img src="{{asset('storage/'.$customer->image)}}"  class="img-thumbnail" >
			</a>
		</center>
	</div>
</div>

@endif
@endsection