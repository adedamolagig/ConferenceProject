<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

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

        // $downloads = Redis::incr("\images.{1234.jpg}");
    	return view('downloads')->withDownloads($downloads);
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
