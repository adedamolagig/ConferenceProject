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
}