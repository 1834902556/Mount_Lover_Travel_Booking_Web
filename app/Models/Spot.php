<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;
    public static $spot,$image,$imageName,$directory,$imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/spot-image/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl  = self::$directory.self::$imageName;
        return self::$imageUrl;

    }
    public static function createSpot($request){
        self::$spot = new Spot();
        self::$spot->place_id      = $request->place_id;
        self::$spot->name          = $request->name;
        self::$spot->description   = $request->description;
        self::$spot->image         = self::getImageUrl($request);
        self::$spot->status        = $request->status;
        self::$spot->save();
    }

    public static function updateSpot($id,$request){
        {
            self::$spot = Spot::find($id);
            if($request->file('image')){
                if(file_exists(self::$spot->image)){
                    unlink(self::$spot->image);
                }
                self::$imageUrl = self::getImageUrl($request);
            }
            else{
                self::$imageUrl = self::$spot->image;
            }
            self::$spot->name	            = $request->name;
            self::$spot->description	    = $request->description;
            self::$spot->image	            = self::$imageUrl;
            self::$spot->status	        = $request->status;
            self::$spot->save();

        }
    }
    public static function deleteSpot($id){
        self::$spot = Spot::find($id);
        if(file_exists(self::$spot->image)){
            unlink(self::$spot->image);
        }
        self::$spot->delete();
    }

    public function place(){
        return $this->belongsTo(Place::class);
    }
}
