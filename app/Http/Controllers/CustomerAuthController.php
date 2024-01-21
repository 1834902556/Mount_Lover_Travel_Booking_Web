<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CustomerAuthController extends Controller
{
   public $customer;
   public function loginView(){
    return view('customer.login');
   }
   public function registerView(){
    return view('customer.register');
   }
   public function cusDashboard(){
    return view('customer.dashboard');
   }

   public function register(Request $request){
    $this->validate($request,[
        'name'          => 'required',
        'email'         => 'required|unique:customers,email',
        'phone'         => 'required|unique:customers,phone',
        'password'      => 'required'
    ]);
      Customer::newCustomer($request);
      return redirect('/customer-login');
   }
   public function login(Request $request){
    $this->customer = Customer::where('email',$request->email)->first();
    if($this->customer){
        if(password_verify($request->password,$this->customer->password)){
            Session::put('customer_id',$this->customer->id);
            Session::put('customer_name',$this->customer->name);
            // Session::put('customer_email',$this->customer->name);
            return redirect('/');
        }
        else{
            return back()->with('msg','Invalid Password');
        }
    }
    else{
        return back()->with('msg','Invalid Email');
    }

   }
   public function logout(){
    Session::forget('customer_id');
    Session::forget('customer_name');
    return redirect('/');
   }
}
