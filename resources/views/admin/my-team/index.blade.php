@extends('admin.admin-master')

@section('title')
    Manage Team Info
@endsection

@section('body')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Team Info Table</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h4 class="card-title">Manage Team Info Table</h4>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ route('team.create') }}" class="btn btn-info">Add Team Info</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>His/Her Name</th>
                                            <th>Designation</th>
                                            <th>Website URL</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($teams as $team)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $team->t_name }}
                                                </td>
                                                <td style="width: 80px">{{ $team->designation }}</td>
                                                <td style="width: 80px">{{ $team->web_url }}</td>
                                                <td><img src="{{ asset($team->image) }}" height="50" width="50" alt="Image"></td>
                                                <td>{{ $team->status == 1 ? 'Active' : 'Inactive' }}</td>
                                                <td class="justify-content-center">
                                                    <a href="{{ route('team.edit', $team->id) }}" class="btn btn-outline-secondary btn-sm me-2 float-md-start edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>

                                                    @if($team->status == 1)
                                                        <a href="{{ route('team.show', $team->id) }}" class="btn btn-outline-success btn-sm me-2 float-md-start status-info" title="Inactive">
                                                            <i class="fas fa-eye-slash"></i>
                                                        </a>
                                                    @else
                                                        <a href="{{ route('team.show', $team->id) }}" class="btn btn-outline-warning btn-sm me-2 float-md-start status-info" title="Active">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    @endif

                                                    <form action="{{ route('team.destroy', $team->id) }}" method="post">
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
