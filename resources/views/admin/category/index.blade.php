@extends('admin.admin-master')

@section('title')
    Manage Category
@endsection

@section('body')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Category Table</h4>
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
                                        <h4 class="card-title">Manage Category Table</h4>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ route('category.create') }}" class="btn btn-info">Add Category</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td style="width: 80px">{{ $category->name }}</td>
                                            <td>{{ $category->description }}</td>
                                            <td><img src="{{ asset($category->image) }}" height="50" width="50" alt="Image"></td>
                                            <td>{{ $category->status == 1 ? 'published' : 'unpublished' }}</td>
                                            <td class="justify-content-center">
                                                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-outline-secondary btn-sm me-2 float-md-start edit" title="Edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>

                                                @if($category->status == 1)
                                                    <a href="{{ route('category.show', $category->id) }}" class="btn btn-outline-success btn-sm me-2 float-md-start status-info" title="Unpublish">
                                                        <i class="fas fa-eye-slash"></i>
                                                    </a>
                                                @else
                                                    <a href="{{ route('category.show', $category->id) }}" class="btn btn-outline-warning btn-sm me-2 float-md-start status-info" title="Publish">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                @endif

                                                <form action="{{ route('category.destroy', $category->id) }}" method="post">
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
