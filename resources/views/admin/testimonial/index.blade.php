@extends('admin.admin-master')

@section('title')
    Manage Testimonial Info
@endsection

@section('body')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Testimonial Info Table</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="card-title">Manage Testimonial Table</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center text-success">{{session('message')}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{ route('testimonial.create') }}" class="btn btn-info">Add Testimonial Info</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Project Title</th>
                                            <th>Working Platform</th>
                                            <th>Working Category</th>
                                            <th>Client Name</th>
                                            <th>Client Message</th>
                                            <th>Client Designation</th>
                                            <th>Client Picture</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($testimonials as $testimonial)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $testimonial->project_title }}</td>
                                                <td style="width: 80px">{{ $testimonial->work_platform }}</td>
                                                <td style="width: 80px">{{ $testimonial->work_category }}</td>
                                                <td style="width: 80px">{{ $testimonial->client_name }}</td>
                                                <td style="width: 80px">{{ $testimonial->client_designation }}</td>
                                                <td>{!! substr($testimonial->message,0,20) !!} </td>
                                                <td><img src="{{ asset($testimonial->image) }}" height="50" width="50" alt="Image"></td>
                                                <td>{{ $testimonial->status == 1 ? 'Active' : 'Inactive' }}</td>
                                                <td class="justify-content-center">
                                                    <a href="{{ route('testimonial.edit', $testimonial->id) }}" class="btn btn-outline-secondary btn-sm me-2 float-md-start edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>

                                                    @if($testimonial->status == 1)
                                                        <a href="{{ route('testimonial.show', $testimonial->id) }}" class="btn btn-outline-success btn-sm me-2 float-md-start status-info" title="Inactive">
                                                            <i class="fas fa-eye-slash"></i>
                                                        </a>
                                                    @else
                                                        <a href="{{ route('testimonial.show', $testimonial->id) }}" class="btn btn-outline-warning btn-sm me-2 float-md-start status-info" title="Active">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    @endif

                                                    <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger btn-sm me-2 float-md-start" onclick="return confirm('Are Your Sure Delete This!!')">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
@endsection
