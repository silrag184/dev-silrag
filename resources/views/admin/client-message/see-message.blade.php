@extends('admin.admin-master')

@section('title')
    Message
@endsection

@section('body')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Messages</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <!-- Right Sidebar -->
                        <div class="email-rightbar">

                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="flex-grow-1">
                                            <h5 class="font-size-18 mb-0">{{ $client->c_name }}</h5>
                                            <h6 class="text-muted">{{ $client->c_number }}</h6>
                                            <h6 class="text-muted">{{ $client->c_email }}</h6>
                                        </div>
                                    </div>

                                    <h4 class="font-size-16">{{ $client->subject }}</h4>

                                    {!! $client->c_message !!}
                                    <hr/>
                                    <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" class="btn btn-secondary waves-effect mt-4"><i class="mdi mdi-reply me-1"></i> Reply</a>
                                </div>
                            </div> <!-- card -->
                        </div> <!-- end Col-9 -->

                    </div>
                </div>
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
@endsection
