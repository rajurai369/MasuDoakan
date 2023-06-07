<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home(){
       $home=Home::first();
        return view('frontend.pages.home',compact('home'));

    }

    public function about(){

        return view('frontend.pages.about');

    }


    public function service(){

        return view('frontend.pages.service');

    }

    public function blog(){

        return view('frontend.pages.blog');

    }


    public function contact(){

        return view('frontend.pages.contact');

    }
}
