@extends('admin.admin-master')

@section('title')
    Manage CV Info
@endsection

@section('body')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">CV Info Table</h4>
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
                                        <h4 class="card-title">Manage CV Table</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center text-success">{{session('message')}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{ route('docDownload.create') }}" class="btn btn-info">Add CV Info</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Service Title</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($docDownloads as $docDownload)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $docDownload->file }}
                                                </td>

                                                <td>{{ $docDownload->status == 1 ? 'Active' : 'Inactive' }}</td>
                                                <td class="justify-content-center">
                                                    <a href="{{ route('docDownload.edit', $docDownload->id) }}" class="btn btn-outline-secondary btn-sm me-2 float-md-start edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>

{{--                                                    @if($docDownload->status == 1)--}}
{{--                                                        <a href="{{ route('docDownload.show', $docDownload->id) }}" class="btn btn-outline-success btn-sm me-2 float-md-start status-info" title="Inactive">--}}
{{--                                                            <i class="fas fa-eye-slash"></i>--}}
{{--                                                        </a>--}}
{{--                                                    @else--}}
{{--                                                        <a href="{{ route('docDownload.show', $docDownload->id) }}" class="btn btn-outline-warning btn-sm me-2 float-md-start status-info" title="Active">--}}
{{--                                                            <i class="fas fa-eye"></i>--}}
{{--                                                        </a>--}}
{{--                                                    @endif--}}

                                                    <form action="{{ route('docDownload.destroy', $docDownload->id) }}" method="post">
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
