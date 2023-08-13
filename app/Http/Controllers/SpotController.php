<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Spot;
use Illuminate\Http\Request;

class SpotController extends Controller
{
    public function add(){
        return view('admin.spot.add',['places' => Place::all()]);
    }
    public function create(Request $request){
        Spot::createSpot($request);
        return back()->with('msg','Spot added successfully');
    }
    public function manage(){
        return view('admin.spot.manage',['spots'=> Spot::all()]);
    }
    public function edit($id){
        return view('admin.spot.edit',['spot' =>Spot::find($id),'places' => Place::all()]);
    }
    public function update($id, Request $request){
        Spot::updateSpot($id,$request);
        return redirect('/manage-spot')->with('msg','Your Spot Updated Successfully');
    }
    public function delete($id){
        Spot::deleteSpot($id);
        return redirect('/manage-spot')->with('msg','Your Spot Deleted Successfully');

    }
}
