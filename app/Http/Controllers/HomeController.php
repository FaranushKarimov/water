<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('home');
    }

    public function history()
    {
        return view('home.history');
    }

    public function news()
    {
        return view('home.news');
    }

    public function databaseCharacteristics()
    {
        return view('home.database_characteristics');
    }
}
