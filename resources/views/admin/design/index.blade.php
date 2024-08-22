@extends('admin.admin-master')

@section('title')
    Manage Design Skills
@endsection

@section('body')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Design Skill Table</h4>
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
                                        <h4 class="card-title">Manage Design Skill Table</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center text-success">{{session('message')}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{ route('design.create') }}" class="btn btn-info">Add Design Skill Info</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Design Skill Name</th>
                                            <th>Design Skill Number %</th>
                                            <th>Design Skill value %</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($designs as $design)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $design->name }}</td>
                                                <td>{{ $design->number }}</td>
                                                <td>{{ $design->value }}</td>
                                                <td class="justify-content-center">
                                                    <a href="{{ route('design.edit', $design->id) }}" class="btn btn-outline-secondary btn-sm me-2 float-md-start edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>

                                                    @if($design->status == 1)
                                                        <a href="{{ route('design.show', $design->id) }}" class="btn btn-outline-success btn-sm me-2 float-md-start status-info" title="Inactive">
                                                            <i class="fas fa-eye-slash"></i>
                                                        </a>
                                                    @else
                                                        <a href="{{ route('design.show', $design->id) }}" class="btn btn-outline-warning btn-sm me-2 float-md-start status-info" title="Active">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    @endif

                                                    <form action="{{ route('design.destroy', $design->id) }}" method="post">
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
