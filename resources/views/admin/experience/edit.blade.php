@extends('admin.admin-master')

@section('title')
    Edit Experience
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
                                    <li class="breadcrumb-item active">Experience Form</li>
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
                                        <h4 class="card-title">Edit Experience Form</h4>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-center text-success">{{session('message')}}</p>
                                        <a href="{{ route('experience.index') }}" class="btn btn-info">Back</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="" action="{{ route('experience.update',$experience->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Job Title</label>
                                        <input class="form-control" name="title" value="{{ $experience->title }}" type="text" id="default-input" placeholder="Input Job Title">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Subject</label>
                                        <input class="form-control" name="subject" value="{{ $experience->subject }}" type="text" id="default-input" placeholder="Input Job Post">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Institute Name</label>
                                        <input class="form-control" name="institute" value="{{ $experience->institute }}" type="text" id="default-input" placeholder="Institute Name">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Job Duration</label>
                                        <input class="form-control" name="duration" value="{{ $experience->duration }}" type="text" id="default-input" placeholder="Input Course Duration">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Experience Description</label>
                                        <textarea class="form-control form-control-sm" id="ckeditor-classic" type="text" name="description" placeholder="Write Description....">value="{{ $experience->description }}"</textarea>
                                    </div>
                                    <div class="mb-4">
                                        <button class="btn btn-primary ms-auto" type="submit">Update Experience Info</button>
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
