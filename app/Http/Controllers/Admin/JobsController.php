<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobListings;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        $jobs = JobListings::all();
        return view('admin.jobs.index', compact('jobs'));
    }



    public function create()
    {
        return view('admin.jobs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'job_nature' => 'required|string|max:255',
            'vacancy' => 'required|integer|min:1',
            'salary' => 'nullable|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'benefits' => 'nullable|string',
            'responsibility' => 'nullable|string',
            'qualifications' => 'nullable|string',
            'keywords' => 'required|string',
        ]);

        JobListings::create($validatedData);
        // Redirect to the list-jobs route with a success message
        return redirect()->route('list-jobs')->with('success', 'Job Created Successfully.');
    }

    public function edit($id)
    {
        $job = JobListings::findOrFail($id);
        return view('admin.jobs.edit', compact('job'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'job_nature' => 'required|string|max:255',
            'vacancy' => 'required|integer|min:1',
            'salary' => 'nullable|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'benefits' => 'nullable|string',
            'responsibility' => 'nullable|string',
            'qualifications' => 'nullable|string',
            'keywords' => 'required|string',
        ]);

        $job = JobListings::findOrFail($id);
        $job->update($validatedData);

        return redirect()->route('list-jobs')->with('success', 'Job updated successfully.');
    }
    public function destroy(JobListings $job)
    {
        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Job deleted successfully.');
    }
}
