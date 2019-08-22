<!DOCTYPE html>
<html>
<head>
	@section('title','customers')
	<style type="text/css">
	
	</style>
</head>
<body>

	@extends('layouts.app')
   

@section('content')
		<h1>customers</h1>
@can('create',App\Customer::class)
	<center>	<a href="{{route('customers.create')}}">add new customer</a></center>
@endcan
		<hr>
		   


		   <table>
		   	<tr>
		   		<th>id</th>
		   		<th>name</th>
		   		<th>company name</th>
		   		<th>statues</th>
		   		<th>profile picture</th>
		   	</tr>
		   	@foreach($customers as $customer)
		   	<tr>
		   		<td>{{$customer->id}}</td>
		   		@can('view',$customer)
		   		<td>
		   		<a href="{{route('customers.show',['customer'=>$customer])}}">{{$customer->name}}</a>
		   		</td>
		   		@endcan
		   		@cannot('view',$customer)
		   		<td>{{$customer->name}}</td>
		   		@endcannot
		   			
		   		<td>{{$customer->company->name}}</td>
		
                 
                   @if ($customer->active == "Active")
                   	<td class="alert alert-success">{{$customer->active}}</td>

                   @elseif($customer->active == "in-progress")
                   	<td class="alert alert-primary"> {{$customer->active}}</td>

                   	@else
                   	<td class="alert alert-danger"> {{$customer->active}}</td>
                   	
                   @endif

                  
                   <td>
                   	
                   	<img src="{{asset('storage/'.$customer->image)}}" width="150px" height="50" alt="no profile picture for this customer"></img>
                   	
                   </td>
		   	</tr>
		   	@endforeach

		   </table>
		   	<div class="row">
		   		<div class="col-12 d-flex justify-content-center mt-3">
		   			
		   	{{$customers->links()}}
		   		</div>
		   		
		   	</div>
		   
         
		   
  
   
 
   
@endsection

</body>
</html>