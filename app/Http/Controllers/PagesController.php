<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	// to load the view from the controller than from the route
    public function getHome()
    {
    	return view('home');
    }

    public function getAbout()
    {
    	return view('about');
    }

    public function getContact()
    {
    	return view('contact');
    }
}
