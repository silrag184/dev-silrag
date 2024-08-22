@extends('admin.admin-master')

@section('title')
    Add Category
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
                                    <li class="breadcrumb-item active">Category Form</li>
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
                                        <h4 class="card-title">Add Category Form</h4>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ route('category.index') }}" class="btn btn-info">Manage Category</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="" action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Category Name</label>
                                        <input class="form-control" name="name" type="text" id="default-input" placeholder="Input Category">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="form-sm-input">Write Some Description About This Category</label>
                                        <textarea class="form-control form-control-sm" type="text" name="description" placeholder="Input Category Description"></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label for="image" class="col-md-3 form-label">Category Image</label>
                                        <input class="form-control" id="image" name="image" type="file">
                                    </div>
                                    <div class="mb-4">
                                        <button class="btn btn-primary ms-auto" type="submit">Save Category</button>
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
