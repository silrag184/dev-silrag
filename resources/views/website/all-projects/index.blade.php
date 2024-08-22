@extends('website.website-master2')
@section('title')
    All Projects
@endsection

@section('body')
    <!-- Start Popup Mobile Menu  -->
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="menu-top">
                <div class="menu-header">
                    <a class="logo" href="{{ route('home') }}">
                        <img src="{{ asset($profiles->main_logo) }}" style="height: 80px; width: 80px;" alt="Personal Portfolio">
                    </a>
                    <div class="close-button">
                        <button class="close-menu-activation close"><i data-feather="x"></i></button>
                    </div>
                </div>
                <p class="discription">{{ $profiles->note }}</p>
            </div>
            <div class="content">
                <div class="py-0">
                    <a class="rn-btn text-center d-block" target="_blank" href=""><span>Download CV</span></a>
                </div>

                <!-- social sharea area -->
                <div class="social-share-style-1 mt--40">
                    <span class="title">find with me</span>
                    <ul class="social-share d-flex liststyle">
                        <li class="facebook"><a href="{{ $profiles->fb_url }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg></a>
                        </li>
                        <li class="github"><a href="{{ $profiles->git_url }}"><i data-feather="github"></i></a>
                        </li>
                        <li class="linkedin"><a href="{{ $profiles->linked_in_url }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg></a>
                        </li>
                    </ul>
                </div>
                <!-- end -->
            </div>
        </div>
    </div>
    <!-- End Popup Mobile Menu  -->




    <main class="main-page-wrapper">

        <!-- Start Portfolio Area -->
        <div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Feel free to see my projects</span>
                            <h2 class="title">My Projects</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--10 mt_md--10 mt_sm--10">
                    <!-- Start Single Portfolio -->

                    @foreach($myProjects as $myProject)
                        <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                            <div class="rn-portfolio" data-bs-toggle="modal" data-bs-target="#exampleModalCenters{{ $myProject->id }}">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="javascript:void(0)">
                                            <img src="{{ asset($myProject->image) }}" alt="Personal Portfolio Images" style="height: 300px; width: 350px;">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="category-info">
                                            <div class="category-list">
                                                <a href="javascript:void(0)">{{ $myProject->category->name }}</a>
                                            </div>
                                            {{--                                    <div class="meta">--}}
                                            {{--                                            <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>600</span>--}}
                                            {{--                                    </div>--}}
                                        </div>
                                        <h4 class="title"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalCenters{{ $myProject->id }}">{{ $myProject->project_title }} <i class="feather-arrow-up-right"></i></a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Portfolio Body area Start -->
                        <div class="modal fade" id="exampleModalCenters{{ $myProject->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i data-feather="x"></i></span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row align-items-center">

                                            <div class="col-lg-6">
                                                <div class="portfolio-popup-thumbnail">
                                                    <div class="image">
                                                        <img class="w-100" src="{{ asset($myProject->picture) }}" alt="slide">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="text-content">
                                                    <h3>
                                                        <span>Featured - {{ $myProject->category->name }}</span> {{ $myProject->project_title }}
                                                    </h3>
                                                    <p class="mb--30">{!! $myProject->short_desc  !!}</p>
                                                    <div class="button-group mt--20">
                                                        <a href="{{ $myProject->project_github }}" class="rn-btn thumbs-icon">
                                                            <span>View GitHub File</span>
                                                            <i data-feather="github"></i>
                                                        </a>
                                                        <a href="{{ $myProject->live_demo }}" class="rn-btn">
                                                            <span>Live Demo</span>
                                                            <i data-feather="globe"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                                <!-- End of .text-content -->
                                            </div>
                                        </div>
                                        <!-- End of .row Body-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal Portfolio area -->
                @endforeach
                <!-- End Single Portfolio -->


                </div>
            </div>
        </div>
        <!-- End portfolio Area -->

        <!-- Back to  top Start -->
        <div class="backto-top">
            <div>
                <i data-feather="arrow-up"></i>
            </div>
        </div>
        <!-- Back to top end -->


    </main>

@endsection
