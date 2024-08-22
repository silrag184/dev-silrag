@extends('admin.admin-master')

@section('title')
    Add Projects Info
@endsection

@section('body')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Basic Elements</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">My projects Info Form</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <!-- end row -->

                <!-- Start row -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h4 class="card-title">Add Project Info Form</h4>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-center text-success">{{session('message')}}</p>
                                        <a href="{{ route('myProject.index') }}" class="btn btn-info">Back</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="" action="{{ route('myProject.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Project Category Name</label>
                                        <select name="category_id" class="form-control">
                                            <option value="">Select A Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Project Title</label>
                                        <input class="form-control" name="project_title" type="text" id="default-input" placeholder="Input Project Title">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="form-sm-input">Project Short Description</label>
                                        <textarea class="form-control form-control-sm" id="ckeditor-classic" type="text" name="short_desc" placeholder="Write Desc...."></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Project GitHub URL</label>
                                        <input class="form-control" name="project_github" type="text" id="default-input" placeholder="Input Project GitHub URl">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Live Demo URL</label>
                                        <input class="form-control" name="live_demo" type="text" id="default-input" placeholder="Input Live Demo URl">
                                    </div>
                                    <div class="mb-4">
                                        <label for="image" class="col-md-3 form-label">Image</label>
                                        <input class="form-control" id="image" name="image" type="file">
                                    </div>
                                    <div class="mb-4">
                                        <label for="image" class="col-md-3 form-label">Project Modal Picture</label>
                                        <input class="form-control" id="image" name="picture" type="file">
                                    </div>
                                    <div class="mb-4">
                                        <button class="btn btn-primary ms-auto" type="submit">Save Project Info</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- End row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
@endsection
