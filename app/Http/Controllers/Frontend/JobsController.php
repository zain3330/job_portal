<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    //this show home page
    public function index()
    {
       return view('frontend.jobs');
    }
}
