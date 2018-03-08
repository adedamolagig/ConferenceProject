<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aim()
    {
    	return view('aim');
    }

    public function subThemes()
    {
    	return view('subThemes');
    }

    public function downloads()
    {
    	return view('downloads');
    }

    public function objectives()
    {
        return view('objectives');
    }

    public function gallery()
    {
        return view('gallery');
    }

}
