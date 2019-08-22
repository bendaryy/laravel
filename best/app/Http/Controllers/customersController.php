<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;
use Intervention\Image\Facades\Image;

class customersController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->authorizeResource(Customer::class, 'customer');
    }


    public function index(){
        $customers = Customer::with('company')->paginate(10);
        // $companies = Company::all();

   return view('customers.index',compact('customers'));
    }

    public function create(Customer $customer){
        $companies = Company::all();
        return view('customers.create',compact('companies','customer'));
    }

    public function edit(Customer $customer){
        $companies = Company::all();
        return view('customers.edit',compact('customer','companies'));

    }

    public function update(Customer $customer){
        $customer->update($this->validateRequest());
        $this->storeImage($customer);
        return redirect('/customers/'.$customer->id);
    }
    public function show(Customer $customer){
        return view('customers.show',compact('customer'));
    }

    public function store(){
         $this->authorize('create',Customer::class);
         $customer = Customer::create($this->validateRequest());
    	// $customer = new Customer();
    	// $customer->name = Request('name');
        // $customer->email = Request('email');
    	// $customer->active = Request('active');
    	// $customer->save();
         $this->storeImage($customer);
    	return redirect('customers');
    }


    public function destroy(Customer $customer){

        $this->authorize('delete', $customer);
        $customer->delete();
       return redirect('/customers');
    }

    public function validateRequest(){
        return Request()->validate([
         'name'=> 'required|min:4',
         'email'=>'required|E-Mail',
         'active'=>'required',
         'company_id'=>'required',
         'image'=>'file|image|sometimes|max:5000',
        ]);
    }

    private function storeImage($customer){
        if(Request()->has('image')){
            $customer->update([
                'image'=>Request()->image->store('uploads','public'),
            ]);

        $image = Image::make(public_path('storage/'.$customer->image))->resize(300, 200);
        $image->save();
        }
    }
}
