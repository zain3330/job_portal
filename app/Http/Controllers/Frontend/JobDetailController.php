<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobDetailController extends Controller
{
    //this show home page
    public function index()
    {
        return view('frontend.job-detail');
    }
}
