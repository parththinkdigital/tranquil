<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function home()
    {
        return view('client.home');
    }

    public function index(Request $request)
    {
        return view('client.properties.index');
    }

    public function show($id)
    {
        return view('client.properties.show');
    }
}
