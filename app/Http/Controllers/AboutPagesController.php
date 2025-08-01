<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutPagesController extends Controller
{
    public function about_pages()
    {
        return view('frontEnd.about');
    }

    public function services()
    {
        return view('frontEnd.services');
    }

    public function agreement()
    {
        return view('frontEnd.agreement');
    }

    public function investment()
    {
        return view('frontEnd.invest');
    }


    public function blog()
    {
        return view('frontEnd.blog');
    }
     public function blog_details()
    {
        return view('frontEnd.blog_details');
    }

    public function events()
    {
        return view('frontEnd.event');
    }

    public function contact()
    {
        return view('frontEnd.contact');
    }
}
