<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home(){

        return view('welcome');
    }

    public function index()
    {
        return view('SKSG.welcome');
    }

    public function student()
    {
        return view('SKSG.student');
    }


    public function session()
    {
        return view('SKSG.session');
    }


    public function activity()
    {
        return view('SKSG.activity');
    }


    public function testimonial()
    {
        return view('SKSG.testimonial');
    }


    public function message()
    {
        return view('SKSG.message');
    }
}
