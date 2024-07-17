<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\JobListings;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        $jobs = JobListings::all();
        return view('frontend.jobs', compact('jobs'));
    }


}
