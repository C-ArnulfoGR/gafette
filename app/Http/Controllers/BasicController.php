<?php

namespace App\Http\Controllers;

use App\Basic;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index()
    {
        $data = Basic::all()->last();
        return view('index', compact('data'));
    }

    public function about_us()
    {
        $data = Basic::all()->last();
        return view('about_us', compact('data'));
    }

    public function contact_us()
    {
        $data = Basic::all()->last();
        return view('contact_us', compact('data'));
    }

}
