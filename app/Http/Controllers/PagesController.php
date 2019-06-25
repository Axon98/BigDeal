<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function information()
    {
        return view('pages.information');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function terms()
    {
        return view('pages.terms');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function policy()
    {
        return view('pages.policy');
    }

}
