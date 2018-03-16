<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $title = 'Panel de Administracion';

        return view('admin.index', compact('title'));
    }

    public function basic()
    {
        $title = 'Configuracion Basica';

        return view('admin.basic', compact('title'));
    }
}
