<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    public static $place,$image,$imageName,$directory,$imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/place-image/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl  = self::$directory.self::$imageName;
        return self::$imageUrl;

    }
    public static function createPlace($request){
        self::$place = new Place();
        self::$place->name          = $request->name;
        self::$place->address       = $request->address;
        self::$place->description   = $request->description;
        self::$place->image         = self::getImageUrl($request);
        self::$place->status        = $request->status;
        self::$place->save();
    }

    public static function updatePlace($id,$request){
        {
            self::$place = Place::find($id);
            if($request->file('image')){
                if(file_exists(self::$place->image)){
                    unlink(self::$place->image);
                }
                self::$imageUrl = self::getImageUrl($request);
            }
            else{
                self::$imageUrl = self::$place->image;
            }
            self::$place->name	            = $request->name;
            self::$place->address	        = $request->address;
            self::$place->description	    = $request->description;
            self::$place->image	            = self::$imageUrl;
            self::$place->status	        = $request->status;
            self::$place->save();

        }
    }
    public static function deletePlace($id){
        self::$place = Place::find($id);
        if(file_exists(self::$place->image)){
            unlink(self::$place->image);
        }
        self::$place->delete();
    }
 }
