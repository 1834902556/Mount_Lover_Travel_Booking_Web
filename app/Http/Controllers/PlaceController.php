<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function add(){
        return view('admin.place.add');
    }

    public function create(Request $request){
        Place::createPlace($request);
        return back()->with('msg','Place added successfully');
    }
    public function manage(){
        return view('admin.place.manage',['places'=> Place::all()]);
    }
    public function edit($id){
        return view('admin.place.edit',['place' =>Place::find($id)]);
    }
    public function update($id, Request $request){
        Place::updatePlace($id,$request);
        return redirect('/manage-place')->with('msg','Your Place Updated Successfully');
    }
    public function delete($id){
        Place::deletePlace($id);
        return redirect('/manage-place')->with('msg','Your Place Deleted Successfully');

    }
}
