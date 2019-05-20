<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        // recuperamos links
        $links = \App\link::all();
        // le pasamos el array
        return view('welcome')->withLinks($links);
        //return view('home', compact('links'));
    }
}
