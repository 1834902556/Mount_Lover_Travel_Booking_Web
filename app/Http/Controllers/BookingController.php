<?php

namespace App\Http\Controllers;

use App\Models\Tour;

class BookingController extends Controller
{
    public function index($id){
        return view('website.book_now.index',['tour' => Tour::find($id)]);
    }
}
