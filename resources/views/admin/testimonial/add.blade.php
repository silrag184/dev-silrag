@extends('admin.admin-master')

@section('title')
    Add Testimonial Info
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
                                    <li class="breadcrumb-item active">My Testimonial Info Form</li>
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
                                        <h4 class="card-title">Add Testimonial Info Form</h4>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-center text-success">{{session('message')}}</p>
                                        <a href="{{ route('testimonial.index') }}" class="btn btn-info">Back</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="" action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Project Title</label>
                                        <input class="form-control" name="project_title" type="text" id="default-input" placeholder="Input Project Title">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Working Platform</label>
                                        <input class="form-control" name="work_platform" type="text" id="default-input" placeholder="Input Project GitHub URl">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Working Category</label>
                                        <input class="form-control" name="work_category" type="text" id="default-input" placeholder="Input Live Demo URl">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Client_name</label>
                                        <input class="form-control" name="client_name" type="text" id="default-input" placeholder="Input Live Demo URl">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Client Designation</label>
                                        <input class="form-control" name="client_designation" type="text" id="default-input" placeholder="Input Live Demo URl">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="form-sm-input">Client Message</label>
                                        <textarea class="form-control form-control-sm" id="ckeditor-classic" type="text" name="message" placeholder="Write Desc...."></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Work Start Date</label>
                                        <input type="datetime-local" class="form-control" name="starting_date">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Work End Date</label>
                                        <input type="datetime-local" class="form-control" name="ending_date">
                                    </div>
                                    <div class="mb-4">
                                        <label for="image" class="col-md-3 form-label">Image</label>
                                        <input class="form-control" id="image" name="image" type="file">
                                    </div>
                                    <div class="mb-4">
                                        <button class="btn btn-primary ms-auto" type="submit">Save Testimonial Info</button>
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
