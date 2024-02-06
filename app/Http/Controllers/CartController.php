<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public $tour;
    public function cart(){
        return view('website.cart.index');
    }
    public function addCart(Request $request,$id){
        $this->tour = Tour::find($id);
        return view('website.cart.index',[
            'id' => $this->tour->id,
            'tour_name' => $this->tour->name,
            'total_person' => $request->total_person,
            'image' => $this->tour->image,
            'total_cost' => $this->tour->total_cost,
            'place_name'=> $this->tour->place->name
        ]);
    }
}
