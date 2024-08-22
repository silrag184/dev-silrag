@extends('admin.admin-master')

@section('title')
    Manage Education
@endsection

@section('body')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Education Table</h4>
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
                                        <h4 class="card-title">Manage Education Table</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center text-success">{{session('message')}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{ route('education.create') }}" class="btn btn-info">Add Education Info</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Course Title</th>
                                            <th>Department</th>
                                            <th>Institute Name</th>
                                            <th>Course Duration</th>
                                            <th>Result</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($educations as $education)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $education->course }}</td>
                                                <td>{{ $education->department }}</td>
                                                <td>{{ $education->institute }}</td>
                                                <td>{{ $education->duration }} </td>
                                                <td>{{ $education->result }}</td>
                                                <td class="justify-content-center">
                                                    <a href="{{ route('education.edit', $education->id) }}" class="btn btn-outline-secondary btn-sm me-2 float-md-start edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <form action="{{ route('education.destroy', $education->id) }}" method="post">
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
