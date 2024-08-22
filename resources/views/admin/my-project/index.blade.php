@extends('admin.admin-master')

@section('title')
    Manage Projects Info
@endsection

@section('body')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Projects Info Table</h4>
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
                                        <h4 class="card-title">Manage Projects Table</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center text-success">{{session('message')}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{ route('myProject.create') }}" class="btn btn-info">Add Projects Info</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Project Category</th>
                                            <th>Project Title</th>
                                            <th>Short Description</th>
                                            <th>Project GiHub URL</th>
                                            <th>Project Live URL</th>
                                            <th>Project Image</th>
                                            <th>Modal Picture</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($myProjects as $myProject)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $myProject->category->name }}
                                                </td>
                                                <td style="width: 80px">{{ $myProject->project_title }}</td>
                                                <td>{!! substr($myProject->short_desc,0,20) !!} </td>
                                                <td><img src="{{ asset($myProject->image) }}" height="50" width="50" alt="Image"></td>
                                                <td><img src="{{ asset($myProject->picture) }}" height="50" width="50" alt="Picture"></td>
                                                <td style="width: 80px">{{ $myProject->project_github }}</td>
                                                <td style="width: 80px">{{ $myProject->live_demo }}</td>
                                                <td>{{ $myProject->status == 1 ? 'Active' : 'Inactive' }}</td>
                                                <td class="justify-content-center">
                                                    <a href="{{ route('myProject.edit', $myProject->id) }}" class="btn btn-outline-secondary btn-sm me-2 float-md-start edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>

                                                    @if($myProject->status == 1)
                                                        <a href="{{ route('myProject.show', $myProject->id) }}" class="btn btn-outline-success btn-sm me-2 float-md-start status-info" title="Inactive">
                                                            <i class="fas fa-eye-slash"></i>
                                                        </a>
                                                    @else
                                                        <a href="{{ route('myProject.show', $myProject->id) }}" class="btn btn-outline-warning btn-sm me-2 float-md-start status-info" title="Active">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    @endif

                                                    <form action="{{ route('myProject.destroy', $myProject->id) }}" method="post">
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
