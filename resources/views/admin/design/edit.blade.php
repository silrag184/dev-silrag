@extends('admin.admin-master')

@section('title')
    Edit Design Skill
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
                                    <li class="breadcrumb-item active">Design Skill Form</li>
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
                                        <h4 class="card-title">Edit Design Skill Info Form</h4>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-center text-success">{{session('message')}}</p>
                                        <a href="{{ route('design.index') }}" class="btn btn-info">Back</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="" action="{{ route('design.update', $design->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Design Name</label>
                                        <input class="form-control" name="name" value="{{ $design->name }}" type="text" id="default-input" placeholder="Input Name">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Skill Number</label>
                                        <input class="form-control" name="number" value="{{ $design->number }}" type="text" id="default-input" placeholder="Input Number">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Skill Value</label>
                                        <input class="form-control" name="value" value="{{ $design->value }}" type="text" id="default-input" placeholder="Input Value">
                                    </div>
                                    <div class="mb-4">
                                        <button class="btn btn-primary ms-auto" type="submit">Update Design Skill Info</button>
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
