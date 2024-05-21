<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuxuryController extends Controller
{
    public function index()
    {
        return view('luxury.index');
    }

    public function index1()
    {

        return view('luxury.partials.about');
    }

    public function index2()
    {

        return view('luxury.partials.contact');
    }

    public function index3()
    {

        return view('luxury.partials.booknow');
    }

    //     public function index4()
    //     {

    //         return view('luxury.partials.');
    //     }

    //     public function index5()
    //     {

    //         return view('luxury.partials.');
    //     }
}
