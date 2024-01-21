<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Spot;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function getSpotByPlace(){
        return response()->json(Spot::where('place_id',$_GET['id'])->get());
    }
    public function add(){
        return view('admin.tour.add',
        ['places' => Place::all(),
                'spots' => Spot::all()
        ]);
    }
    public function manage(){
        return view('admin.tour.manage',['tours' => Tour::all()]);
    }
    public function create(Request $request){
        Tour::createTour($request);
        return back()->with('msg','Tour added successfully');

    }
    public function edit($id){
        return view('admin.tour.edit',[
            'tour'      => Tour::find($id),
            'places'    =>Place::all(),
            'spots'     => Spot::all()
        ]);
    }

    public function update(Request $request,$id){
        Tour::updateTour($request,$id);
        return redirect('/manage-tour')->with('msg','Tour updated succesfully');
    }
    public function delete($id){
        Tour::deleteTour($id);
        return redirect('/manage-tour')->with('msg','Tour deleted succesfully');
    }
}
