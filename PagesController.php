<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome()
    {
        return view('pages.day101');
    }

    public function getvideos2($id = null, $number = null)
    {
        if (!($id == null && $number == null))
//            return "number is :$number <br> id is :$id";
            return view('pages.videos', compact('id', 'number'));
        else
            return view('pages.videos');
    }

//    public function getvideos()
//    {
//        return view('pages.videos');
//    }

    public function getabout()
    {
        $var = false;
        $var2 = "HELLO ";
        $names = ['Ali', "sabri", 'jasim'];
        return view('about', compact('var', 'var2', 'names'));
    }


}
