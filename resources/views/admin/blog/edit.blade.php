@extends('admin.admin-master')

@section('title')
    Edit Blog
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
                                    <li class="breadcrumb-item active">Blog Form</li>
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
                                        <h4 class="card-title">Edit BLog Form</h4>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ route('blog.index') }}" class="btn btn-info">Manage Blog</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="" action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Blog Category Name</label>
                                        <select name="blogCategory_id" class="form-control">
                                            <option value="">Select A Category</option>
                                            @foreach($blogCategories as $blogCategory)
                                                <option value="{{ $blogCategory->id }}" {{ $blog->blogCategory_id == $blogCategory->id ? 'selected':' '}}>{{ $blogCategory->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Blog Title</label>
                                        <input class="form-control" name="b_title" value="{{ $blog->b_title }}" type="text" id="default-input" placeholder="Input Blog Title">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Author Name</label>
                                        <input class="form-control" name="a_name" value="{{ $blog->a_name }}" type="text" id="default-input" placeholder="Input Author Name">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Slug</label>
                                        <input class="form-control" name="slug" value="{{ $blog->slug }}" type="text" id="default-input" placeholder="Input Category">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="form-sm-input">Blog Description</label>
                                        <textarea class="form-control form-control-sm" id="ckeditor-classic" type="text" name="b_description" placeholder="Write Blog....">{{ $blog->b_description }}</textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label for="image" class="col-md-3 form-label">Blog Image</label>
                                        <input class="form-control" id="image" name="image" type="file">
                                        <img src="{{ asset($blog->image) }}" alt="" style="height: 50px; width: 50px;">
                                    </div>
                                    <div class="mb-4">
                                        <button class="btn btn-primary ms-auto" type="submit">Update Blog</button>
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
