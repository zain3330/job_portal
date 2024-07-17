@extends('admin.layout.layout')

<!-- Content Wrapper. Contains page content -->
@section('content-section')
    <div class="content-wrapper" style="min-height: 1302.12px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">  <div class="card-header d-flex justify-content-between align-items-center">
                                <h3 class="card-title">DataTable with default features</h3>
                                <a href="{{ route('jobs.create') }}" class="btn btn-success ml-auto">Add Job</a>
                            </div>
                            <div class="card-body">
                                <table id="jobs-table" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Job Nature</th>
                                        <th>Vacancy</th>
                                        <th>Location</th>
                                        <th>Actions</th> <!-- New column for action buttons -->
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($jobs as $job)
                                        <tr>
                                            <td>{{ $job->title }}</td>
                                            <td>{{ $job->category }}</td>
                                            <td>{{ $job->job_nature }}</td>
                                            <td>{{ $job->vacancy }}</td>
                                            <td>{{ $job->location }}</td>
                                            <td>
                                                <a href="{{ route('jobs.show', $job->id) }}" class="btn btn-primary btn-sm">View</a>
                                                <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection

@section('script') <script>
    $(document).ready(function() {
        $('#jobs-table').DataTable({      dom: 'Bfrtip',
            buttons: [
                'excel'
            ]
        });
    });
</script>


@endsection
