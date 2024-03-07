<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageContoller extends Controller
{
    public function about(){
        return view('pages.about');
    }

    public function available(){
        return view('pages.available');
    }

    public function blog(){
        return view('pages.blog');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function gallery(){
        return view('pages.gallery');
    }

    public function room(){
        return view('pages.room');
    }



}
