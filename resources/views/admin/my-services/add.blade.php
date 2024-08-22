@extends('admin.admin-master')

@section('title')
    Add Services Info
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
                                    <li class="breadcrumb-item active">My Services Info Form</li>
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
                                        <h4 class="card-title">Add Service Info Form</h4>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-center text-success">{{session('message')}}</p>
                                        <a href="{{ route('myService.index') }}" class="btn btn-info">Back</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="" action="{{ route('myService.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Service Title</label>
                                        <input class="form-control" name="service_title" type="text" id="default-input" placeholder="Input Service Title">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Bootstrap Icon Name</label>
                                        <input class="form-control" name="icon_name" type="text" id="default-input" placeholder="Input Bootstrap Icon Name">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="form-sm-input">Service Description</label>
                                        <textarea class="form-control form-control-sm" id="ckeditor-classic" type="text" name="description" placeholder="Write Desc...."></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <button class="btn btn-primary ms-auto" type="submit">Save Service Info</button>
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
