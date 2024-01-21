<?php

namespace App\Http\Controllers;

use App\Models\Tour;

class MountLoverController extends Controller
{
    public function index(){
        return view('website.index',['tours'=>Tour::all()]);
    }
    public function about(){
        return view('website.about.index');
    }
    public function contact(){
        return view('website.contact.index');
    }
    public function package(){
        return view('website.package.index',['tours'=>Tour::all()]);
    }
    public function service(){
        return view('website.service.index');
    }
    public function destination(){
        return view('website.pages.destination');
    }
    public function team(){
        return view('website.pages.team');
    }
    public function booking(){
        return view('website.pages.booking');
    }


}
