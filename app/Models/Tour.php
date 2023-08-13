<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    public static $tour,$image,$imageName,$directory,$imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/tour-image/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl  = self::$directory.self::$imageName;
        return self::$imageUrl;

    }

    public static function createTour($request){
        self::$tour = new Tour();
        self::$tour->place_id               = $request->place_id;
        self::$tour->spot_id                = $request->spot_id;
        self::$tour->title                  = $request->title;
        self::$tour->category               = $request->category;
        self::$tour->person                 = $request->person;
        self::$tour->duration               = $request->duration;
        self::$tour->total_cost             = $request->total_cost;
        self::$tour->sort_description       = $request->sort_description;
        self::$tour->long_description       = $request->long_description;
        self::$tour->image                  = self::getImageUrl($request);
        self::$tour->status                 = $request->status;
        self::$tour->save();
    }


    public function place(){
        return $this->belongsTo(Place::class);
    }
    public function spot(){
        return $this->belongsTo(Spot::class);
    }
}
