<?php

namespace App\Http\Controllers;

use App\Models\Tour;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home.index');
    }
    public function detail($id){
        return view('website.detail.index',['tour'=>Tour::find($id)]);
    }
}
