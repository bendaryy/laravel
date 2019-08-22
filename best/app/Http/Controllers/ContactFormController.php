<?php

namespace App\Http\Controllers;

use  App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
   public function create(){

   	return view('contact.create');

   }


   public function store(){

   $data = Request()->validate([
   		'name' =>'required',
   		'email' =>'required|email',
   		'message' =>'required'

   ]);

   Mail::to('hamada22bendary@gmail.com')->send(new ContactFormMail($data));


   // session()->flash('message','thanks for your message we will be in touch');

   
   return redirect('/contact')->with('message','thanks for your message we will be in touch');
   }

}
