@extends('admin.admin-master')

@section('title')
    Add Education
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
                                    <li class="breadcrumb-item active">Education Form</li>
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
                                        <h4 class="card-title">Add Education Form</h4>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-center text-success">{{session('message')}}</p>
                                        <a href="{{ route('education.index') }}" class="btn btn-info">Back</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="" action="{{ route('education.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Course Title</label>
                                        <input class="form-control" name="course" type="text" id="default-input" placeholder="Input Course Title">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Department</label>
                                        <input class="form-control" name="department" type="text" id="default-input" placeholder="Input Department Name">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Institute Name</label>
                                        <input class="form-control" name="institute" type="text" id="default-input" placeholder="Institute Name">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Course Duration</label>
                                        <input class="form-control" name="duration" type="text" id="default-input" placeholder="Input Course Duration">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Result</label>
                                        <input class="form-control" name="result" type="text" id="default-input" placeholder="Input Your Result">
                                    </div>
                                    <div class="mb-4">
                                        <button class="btn btn-primary ms-auto" type="submit">Save Education Info</button>
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
