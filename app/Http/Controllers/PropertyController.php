<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function home()
    {
        $blogs = \App\Models\Blog::latest()->take(3)->get();
        return view('client.home', compact('blogs'));
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
