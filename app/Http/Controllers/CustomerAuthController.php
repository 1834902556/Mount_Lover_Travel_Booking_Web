<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerAuthController extends Controller
{
   public function login(){
    return view('customer.login');
   }
   public function register(){
    return view('customer.register');
   }
}
