@component('mail::message')
# Introduction

	 name :{{$data['name']}} <br>
     Email : {{$data['email']}} <br>
	 The body of your message.<br>
	 message :{{$data['message']}} 

@endcomponent
