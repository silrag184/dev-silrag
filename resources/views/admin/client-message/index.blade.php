@extends('admin.admin-master')

@section('title')
    See Messages
@endsection

@section('body')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Messages Table</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <!-- Left sidebar -->
                        <!-- End Left sidebar -->


                        <!-- Right Sidebar -->
                        <div class="email-rightbar">

                            <div class="card">
                                <div class="btn-toolbar gap-2 p-3" role="toolbar">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-inbox"></i></button>
                                        <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-exclamation-circle"></i></button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-folder"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Team Manage</a>
                                        </div>
                                    </div>


                                </div>
                                <ul class="message-list">
                                    @foreach($clients as $client)
                                    <li>
                                        <div class="col-mail col-mail-1">
                                            <div class="btn-group">
                                                <a href="{{ route('delete.message',['id'=>$client->id]) }}" class="btn btn-outline-primary waves-light waves-effect"><i class="far fa-trash-alt"></i></a>
                                            </div>
                                            <a href="{{ route('message.details',['id'=>$client->id]) }}" class="title"><b>{{ $client->c_name }}, me</b></a></span>
                                        </div>
                                        <div class="col-mail col-mail-2">
                                            <a href="{{ route('message.details',['id'=>$client->id]) }}" class="subject">{{ $client->subject }} – <span class="teaser">Click to See Message</span>
                                            </a>
                                            <div class="date">{{ $client->created_at->format('j F') }}</div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>

                            </div> <!-- card -->

                            <div class="row">
                                <div class="col-7">
                                    Showing 1 - 20 of 1,524
                                </div>
                                <div class="col-5">
                                    <div class="btn-group float-end">
                                        <button type="button" class="btn btn-sm btn-success waves-effect"><i class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btn btn-sm btn-success waves-effect"><i class="fa fa-chevron-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end Col-9 -->

                    </div>

                </div>

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
@endsection
