@extends('admin.layout.layout')

<!-- Content Wrapper. Contains page content -->
@section('content-section')
    <div class="content-wrapper" style="min-height: 1345.31px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Job</h1>
                    </div>
{{--                    <div class="col-sm-6">--}}
{{--                        <ol class="breadcrumb float-sm-right">--}}
{{--                            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                            <li class="breadcrumb-item active">General Form</li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Quick Example</h3>
                            </div>

                            <form action="{{ route('jobs.store') }}" method="POST" id="jobForm">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Title and Category -->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="title">Title*</label>
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter job title" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="category">Category*</label>
                                                <select class="form-control" id="category" name="category" required>
                                                    <option value="">Select a Category</option>
                                                    <option value="IT">IT</option>
                                                    <option value="HR">HR</option>
                                                    <option value="Marketing">Marketing</option>
                                                    <option value="Finance">Finance</option>
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
                                                    <option value="Full-time">Full-time</option>
                                                    <option value="Part-time">Part-time</option>
                                                    <option value="Contract">Contract</option>
                                                    <option value="Temporary">Temporary</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="vacancy">Vacancy*</label>
                                                <input type="number" class="form-control" id="vacancy" name="vacancy" placeholder="Enter number of vacancies" min="1" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Salary and Location -->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="salary">Salary</label>
                                                <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter salary">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="location">Location*</label>
                                                <select class="form-control" id="location" name="location" required>
                                                    <option value="">Select Location</option>
                                                    <option value="New York">New York</option>
                                                    <option value="Los Angeles">Los Angeles</option>
                                                    <option value="Chicago">Chicago</option>
                                                    <option value="Houston">Houston</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="form-group">
                                        <label for="description">Description*</label>
                                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter job description" required></textarea>
                                    </div>

                                    <!-- Benefits -->
                                    <div class="form-group">
                                        <label for="benefits">Benefits</label>
                                        <textarea class="form-control" id="benefits" name="benefits" rows="3" placeholder="Enter job benefits"></textarea>
                                    </div>

                                    <!-- Responsibility -->
                                    <div class="form-group">
                                        <label for="responsibility">Responsibility</label>
                                        <textarea class="form-control" id="responsibility" name="responsibility" rows="3" placeholder="Enter job responsibility"></textarea>
                                    </div>

                                    <!-- Qualifications -->
                                    <div class="form-group">
                                        <label for="qualifications">Qualifications</label>
                                        <textarea class="form-control" id="qualifications" name="qualifications" rows="3" placeholder="Enter job qualifications"></textarea>
                                    </div>

                                    <!-- Keywords -->
                                    <div class="form-group">
                                        <label for="keywords">Keywords*</label>
                                        <textarea class="form-control" id="keywords" name="keywords" rows="3" placeholder="Enter job keywords" required></textarea>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit"  class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                        </div>


                    </div>


                </div>

            </div>
        </section>

    </div>

@endsection
@section('script')
    @if (\Illuminate\Support\Facades\Session::has('success'))
        <script>
            $(document).ready(function() {
                toastr.success('{{ \Illuminate\Support\Facades\Session::get('success') }}');
            });
        </script>
    @endif
@endsection
