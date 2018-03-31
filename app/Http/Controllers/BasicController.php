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
}
