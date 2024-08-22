@extends('admin.admin-master')

@section('title')
    Add Profile Info
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
                                    <li class="breadcrumb-item active">Profile Info Form</li>
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
                                        <h4 class="card-title">Add Profile Form</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="" action="{{ route('profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">My name</label>
                                        <input class="form-control" name="m_name" value="{{ $profile->m_name }}" type="text" id="default-input" placeholder="Input Name">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Designation</label>
                                        <input class="form-control" name="designation" value="{{ $profile->designation }}" type="text" id="default-input" placeholder="Input Author Name">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Designation-2</label>
                                        <input class="form-control" name="f_designation" value="{{ $profile->f_designation }}" type="text" id="default-input" placeholder="Input Author Name">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Designation-3</label>
                                        <input class="form-control" name="s_designation" value="{{ $profile->s_designation }}" type="text" id="default-input" placeholder="Input Author Name">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="form-sm-input">Short Description</label>
                                        <textarea class="form-control form-control-sm" type="text" name="s_description" placeholder="Write Desc....">{{ $profile->s_description }}</textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="form-sm-input">Description</label>
                                        <textarea class="form-control form-control-sm" id="ckeditor-classic" type="text" name="m_description" placeholder="Write Desc....">{{ $profile->m_description }}</textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Note</label>
                                        <input class="form-control" name="note" value="{{ $profile->note }}" type="text" id="default-input" placeholder="Input NOte">
                                    </div>
                                    <div class="mb-4">
                                        <label for="image_one" class="col-md-3 form-label">Main Logo</label>
                                        <input class="form-control" id="image_one" name="main_logo" type="file">
                                        <img src="{{ asset($profile->main_logo) }}" alt="" style="height: 80px; width: 80px;">
                                    </div>
                                    <div class="mb-4">
                                        <label for="image_two" class="col-md-3 form-label">Secondary Logo</label>
                                        <input class="form-control" id="image_two" name="sec_logo" type="file">
                                        <img src="{{ asset($profile->sec_logo) }}" alt="" style="height: 80px; width: 80px;">
                                    </div>
                                    <div class="mb-4">
                                        <label for="image_three" class="col-md-3 form-label">My Picture</label>
                                        <input class="form-control" id="image_three" name="pic_logo" type="file">
                                        <img src="{{ asset($profile->pic_logo) }}" alt="" style="height: 80px; width: 80px;">
                                    </div>
                                    <div class="mb-4">
                                        <label for="image_four" class="col-md-3 form-label">Social media Icon 1</label>
                                        <input class="form-control" id="image" name="logo_icon" type="file">
                                        <img src="{{ asset($profile->logo_icon) }}" alt="" style="height: 80px; width: 80px;">
                                    </div>
                                    <div class="mb-4">
                                        <label for="image" class="col-md-3 form-label">Social Media Icon 2</label>
                                        <input class="form-control" id="image_four" name="logo_icon1" type="file">
                                        <img src="{{ asset($profile->logo_icon1) }}" alt="" style="height: 80px; width: 80px;">
                                    </div>
                                    <div class="mb-4">
                                        <label for="image_five" class="col-md-3 form-label">Social Media Icon 3</label>
                                        <input class="form-control" id="image_five" name="logo_icon2" type="file">
                                        <img src="{{ asset($profile->logo_icon2) }}" alt="" style="height: 80px; width: 80px;">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Facebook URL</label>
                                        <input class="form-control" name="fb_url" type="text" value="{{ $profile->fb_url }}" id="default-input" placeholder="Input Slug">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">LinkedIn URL</label>
                                        <input class="form-control" name="linked_in_url" value="{{ $profile->linked_in_url }}" type="text" id="default-input" placeholder="Input Slug">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">GitHub URL</label>
                                        <input class="form-control" name="git_url" type="text" value="{{ $profile->git_url }}" id="default-input" placeholder="Input Slug">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Phone</label>
                                        <input class="form-control" name="phone" type="text" value="{{ $profile->phone }}" id="default-input" placeholder="Input Slug">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">Email</label>
                                        <input class="form-control" name="email" type="text" value="{{ $profile->email }}" id="default-input" placeholder="Input Slug">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="default-input">CopyRight</label>
                                        <input class="form-control" name="copy_right" type="text" value="{{ $profile->copy_right }}" id="default-input" placeholder="Input Slug">
                                    </div>
                                    <div class="mb-4">
                                        <button class="btn btn-primary ms-auto" type="submit">Update Profile</button>
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

