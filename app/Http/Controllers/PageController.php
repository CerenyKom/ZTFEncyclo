<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function student()
    {
        return view('ECSD.student');
    }


    public function session()
    {
        return view('ECSD.session');
    }


    public function activity()
    {
        return view('ECSD.activity');
    }


    public function testimonial()
    {
        return view('ECSD.testimonial');
    }


    public function message()
    {
        return view('ECSD.message');
    }
}
