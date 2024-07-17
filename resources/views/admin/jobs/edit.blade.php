@extends('admin.layout.layout')
<!-- Content Wrapper. Contains page content -->
@section('content-section')



    <div class="content-wrapper"  style="min-height: 1345.31px;">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Job</h1>
                    </div>
{{--                    <div class="col-sm-6">--}}
{{--                        <ol class="breadcrumb float-sm-right">--}}
{{--                            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                            <li class="breadcrumb-item active">Edit Job</li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Job</h3>
                            </div>
                            <form action="{{ route('jobs.update', $job->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                            <div class="card-body">


                                    <div class="row">
                                        <!-- Title and Category -->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="title">Title*</label>
                                                <input type="text" class="form-control" id="title" name="title" value="{{ $job->title }}" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="category">Category*</label>
                                                <select class="form-control" id="category" name="category" required>
                                                    <option value="">Select a Category</option>
                                                    <!-- Add category options here -->
                                                    <option value="IT" {{ $job->category == 'IT' ? 'selected' : '' }}>IT</option>
                                                    <option value="HR" {{ $job->category == 'HR' ? 'selected' : '' }}>HR</option>
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Job Nature and Vacancy -->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="job_nature">Job Nature*</label>
                                                <select class="form-control" id="job_nature" name="job_nature" required>
                                                    <option value="">Select Job Nature</option>
                                                    <!-- Add job nature options here -->
                                                    <option value="Full-time" {{ $job->job_nature == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                                                    <option value="Part-time" {{ $job->job_nature == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="vacancy">Vacancy*</label>
                                                <input type="number" class="form-control" id="vacancy" name="vacancy" value="{{ $job->vacancy }}" min="1" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Salary and Location -->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="salary">Salary</label>
                                                <input type="text" class="form-control" id="salary" name="salary" value="{{ $job->salary }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="location">Location*</label>
                                                <select class="form-control" id="location" name="location" required>
                                                    <option value="">Select Location</option>
                                                    <!-- Add location options here -->
                                                    <option value="New York" {{ $job->location == 'New York' ? 'selected' : '' }}>New York</option>
                                                    <option value="Los Angeles" {{ $job->location == 'Los Angeles' ? 'selected' : '' }}>Los Angeles</option>
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="form-group">
                                        <label for="description">Description*</label>
                                        <textarea class="form-control" id="description" name="description" rows="3" required>{{ $job->description }}</textarea>
                                    </div>

                                    <!-- Benefits -->
                                    <div class="form-group">
                                        <label for="benefits">Benefits</label>
                                        <textarea class="form-control" id="benefits" name="benefits" rows="3">{{ $job->benefits }}</textarea>
                                    </div>

                                    <!-- Responsibility -->
                                    <div class="form-group">
                                        <label for="responsibility">Responsibility</label>
                                        <textarea class="form-control" id="responsibility" name="responsibility" rows="3">{{ $job->responsibility }}</textarea>
                                    </div>

                                    <!-- Qualifications -->
                                    <div class="form-group">
                                        <label for="qualifications">Qualifications</label>
                                        <textarea class="form-control" id="qualifications" name="qualifications" rows="3">{{ $job->qualifications }}</textarea>
                                    </div>

                                    <!-- Keywords -->
                                    <div class="form-group">
                                        <label for="keywords">Keywords*</label>
                                        <textarea class="form-control" id="keywords" name="keywords" rows="3" required>{{ $job->keywords }}</textarea>
                                    </div>
                            </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Job</button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>


















@endsection
