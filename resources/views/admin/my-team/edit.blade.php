@extends('admin.admin-master')

@section('title')
    Add Team Info
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
                                    <li class="breadcrumb-item active">Team Info Form</li>
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
                                        <h4 class="card-title">Add Team Info Form</h4>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ route('team.index') }}" class="btn btn-info">Manage Team Info</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="" action="{{ route('team.update',$team->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Team Member Name</label>
                                        <input class="form-control" name="t_name" value="{{ $team->t_name }}" type="text" id="default-input" placeholder="Input Team Member name">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Team Member Designation</label>
                                        <input class="form-control" name="designation" value="{{ $team->designation }}" type="text" id="default-input" placeholder="Input His/Her Designation">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">His/her Facebook URL</label>
                                        <input class="form-control" name="t_fburl" value="{{ $team->t_fburl }}" type="text" id="default-input" placeholder="Input His/Her Facebook URl">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">His/her GitHub URL</label>
                                        <input class="form-control" name="t_github" value="{{ $team->t_github }}" type="text" id="default-input" placeholder="Input His/Her GitHub URl">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">His/her LinkedIn URL</label>
                                        <input class="form-control" name="t_linked" value="{{ $team->t_linked }}" type="text" id="default-input" placeholder="Input His/Her LinkedIn URl">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">His/her Website URL</label>
                                        <input class="form-control" name="web_url" value="{{ $team->web_url }}" type="text" id="default-input" placeholder="Input His/Her Website URl">
                                    </div>
                                    <div class="mb-4">
                                        <label for="image" class="col-md-3 form-label">His/Her Image</label>
                                        <input class="form-control" id="image" name="image" type="file">
                                        <img src="{{ asset($team->image) }}" alt="" style="height: 50px; width: 50px;">
                                    </div>
                                    <div class="mb-4">
                                        <button class="btn btn-primary ms-auto" type="submit">Update Team Info</button>
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
