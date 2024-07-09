<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //this show home page
    public function index()
    {
       return view('frontend.home');
    }
}
