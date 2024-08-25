@extends('website.website-master')
@section('title')
    Home
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
            <ul class="primary-menu nav nav-pills onepagenav">
                <li class="nav-item current"><a class="nav-link smoth-animation active" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link smoth-animation" href="#portfolio">Projects</a></li>
                <li class="nav-item"><a class="nav-link smoth-animation" href="#features">Services</a></li>
                <li class="nav-item"><a class="nav-link smoth-animation" href="#resume">Resume</a></li>
                <li class="nav-item"><a class="nav-link smoth-animation" href="#testimonial">Testimonial</a></li>
                <li class="nav-item"><a class="nav-link smoth-animation" href="#blog">Blog</a></li>
                <li class="nav-item"><a class="nav-link smoth-animation" href="#team">My Team</a></li>
                <li class="nav-item"><a class="nav-link smoth-animation" href="#contacts">Contact</a></li>
            </ul>
            <div class="py-0">
                <a class="rn-btn text-center d-block" target="_blank" href="{{ $docDownload->file }}"><span>Download CV</span></a>
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

    <!-- Start Slider Area -->
    <div id="home" class="rn-slider-area">
        <div class="slide slider-style-1">
            <div class="container">
                <div class="row row--30 align-items-center">
                    <div class="order-2 order-lg-1 col-lg-7 mt_md--50 mt_sm--50 mt_lg--30">
                        <div class="content">
                            <div class="inner">
                                <span class="subtitle">Welcome to my website</span>
                                <h1 class="title">Hi, I’m <span>{{ $profiles->m_name }}</span><br>
                                    <span class="header-caption" id="page-top">
                                            <!-- type headline start-->
                                            <span class="cd-headline clip is-full-width">
                                                <span>a </span>
                                                <!-- ROTATING TEXT -->
                                        <span class="cd-words-wrapper">
                                                    <b class="is-visible">{{ $profiles->designation }}</b>
                                                    <b class="is-hidden">{{ $profiles->f_designation }}</b>
                                                    <b class="is-hidden">{{ $profiles->s_designation }}</b>
                                                </span>
                                        </span>
                                        <!-- type headline end -->
                                        </span>
                                </h1>

                                <div>
                                    <p class="description">{!! $profiles->m_description !!}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12">
                                    <div class="social-share-inner-left">
                                        <span class="title">find with me</span>
                                        <ul class="social-share d-flex liststyle">
                                            <li class="facebook"><a href="{{ $profiles->fb_url }}"><i data-feather="facebook"></i></a>
                                            </li>
                                            <li class="github"><a href="{{ $profiles->git_url }}"><i data-feather="github"></i></a>
                                            </li>
                                            <li class="linkedin"><a href="{{ $profiles->linked_in_url }}"><i data-feather="linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12 mt_mobile--30">
                                    <div class="skill-share-inner">
                                        <span class="title">best skill on</span>
                                        <ul class="skill-share d-flex liststyle">
                                            <li><img src="{{ asset( $profiles->logo_icon ) }}" alt="Icons Images"></li>
                                            <li><img src="{{ asset( $profiles->logo_icon1 ) }}" alt="Icons Images"></li>
                                            <li><img src="{{ asset( $profiles->logo_icon2 ) }}" alt="Icons Images"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="order-1 order-lg-2 col-lg-5">
                        <div class="thumbnail">
                            <div class="inner">
                                <img src="{{ asset($profiles->pic_logo) }}" alt="Personal Portfolio Images">
{{--                                <img src="{{ asset('/') }}website/assets/images/slider/banner-01.png" alt="Personal Portfolio Images">--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->

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
            <br>
            <br>
            <div class="more-blog-footer">
                <a href="{{ route('all.projects') }}" class="rn-btn d-inline-block position-absolute start-50 translate-middle mt-1 bi bi-caret-down-fill">
                    <span>More Blogs</span>
                    <i data-feather="arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- End portfolio Area -->

    <!-- Start Service Area -->
    <div class="rn-service-area rn-section-gap section-separator" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-left" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true">
                        <span class="subtitle">Features</span>
                        <h2 class="title">What I Do</h2>
                    </div>
                </div>
            </div>
            <div class="row row--25 mt_md--10 mt_sm--10">

                <!-- Start Single Service -->
                @foreach($myServices as $myService)
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-service">
                        <div class="inner">
                            <div class="icon">
                                <i data-feather="{{ $myService->icon_name }}"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">{{ $myService->service_title }}</h4>
                                <p class="description">{!! $myService->description !!}</p>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
                <!-- End SIngle Service -->
            </div>
        </div>
    </div>
    <!-- End Service Area  -->
    <!-- Start Resume Area -->
    <div class="rn-resume-area rn-section-gap section-separator" id="resume">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="title">My Resume</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--45">
                <div class="col-lg-12">
                    <ul class="rn-nav-list nav nav-tabs" id="myTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="education-tab" data-bs-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="true">education</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="professional-tab" data-bs-toggle="tab" href="#professional" role="tab" aria-controls="professional" aria-selected="false">professional
                                Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="experience-tab" data-bs-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">experience</a>
                        </li>
                    </ul>

                    <!-- Start Tab Content Wrapper  -->
                    <div class="rn-nav-content tab-content" id="myTabContents">
                        <!-- Start Single Tab  -->
                        <div class="tab-pane show active fade single-tab-area" id="education" role="tabpanel" aria-labelledby="education-tab">
                            <div class="personal-experience-inner mt--40">
                                <div class="row">
                                    <!-- Start Skill List Area  -->
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="content">
                                            <h4 class="maintitle">Education Quality</h4>
                                            <div class="experience-list">


                                                <!-- Start Single List  -->
                                                @foreach($educations as $education)
                                                <div class="resume-single-list">
                                                    <div class="inner">
                                                        <div class="heading">
                                                            <div class="title">
                                                                <h4>{{ $education->course }}</h4>
                                                                <span>{{ $education->institute }} ({{ $education->duration }})</span>
                                                            </div>
                                                            <br>
                                                            <div class="date-of-time">
                                                                <span>{{ $education->result }}</span>
                                                            </div>
                                                        </div>
                                                        <p class="description">Department : {{ $education->department }}</p>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <!-- End Single List  -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Skill List Area  -->
                                </div>
                            </div>
                        </div>
                        <!-- End Single Tab  -->

                        <!-- Start Single Tab  -->
                        <div class="tab-pane fade " id="professional" role="tabpanel" aria-labelledby="professional-tab">
                            <div class="personal-experience-inner mt--40">
                                <div class="row row--40">

                                    <!-- Start Single Progressbar  -->
                                    <div class="col-lg-6 col-md-6 col-6 col-sm-6">
                                        <div class="progress-wrapper">
                                            <div class="content">
                                                <span class="subtitle">Features</span>
                                                <h4 class="maintitle">Design Skill</h4>
                                                <!-- Start Single Progress Charts -->
                                                @foreach($designs as $design)
                                                <div class="progress-charts">
                                                    <h6 class="heading heading-h6">{{ $design->name }}</h6>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: {{ $design->value }}%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">{{ $design->number }}%</span></div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <!-- End Single Progress Charts -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Progressbar  -->

                                    <!-- Start Single Progressbar  -->
                                    <div class="col-lg-6 col-md-6 col-6 mt_sm--60">
                                        <div class="progress-wrapper">
                                            <div class="content">
                                                <span class="subtitle">Features</span>
                                                <h4 class="maintitle">Development Skill</h4>
                                                <!-- Start Single Progress Charts -->
                                                @foreach($developments as $development)
                                                <div class="progress-charts">
                                                    <h6 class="heading heading-h6">{{ $development->name }}</h6>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: {{ $development->value }}%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">{{ $development->number }}%</span></div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <!-- End Single Progress Charts -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Progressbar  -->

                                </div>
                            </div>
                        </div>
                        <!-- End Single Tab  -->

                        <!-- Start Single Tab  -->
                        <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                            <div class="personal-experience-inner mt--40">
                                <div class="row">
                                    <!-- Start Skill List Area  -->
                                    <div class="col-lg-6 col-md-6 col-12">
                                    </div>
                                    <!-- End Skill List Area  -->

                                    <!-- Start Skill List Area 2nd  -->
                                    <div class="col-lg-6 col-md-6 col-12 mt_md--60 mt_sm--60">
                                        <div class="content">
                                            <h4 class="maintitle">Experience</h4>
                                            <div class="experience-list">

                                                <!-- Start Single List  -->
                                                @foreach($experiences as $experience)
                                                <div class="resume-single-list">
                                                    <div class="inner">
                                                        <div class="heading">
                                                            <div class="title">
                                                                <span>{{ $experience->title }}</span>
                                                                <h4>{{ $experience->subject }}</h4>
                                                                <span>{{ $experience->institute }} ({{ $experience->duration }})</span>
                                                            </div>
                                                        </div>
                                                        <p class="description">{!! $experience->description !!}</p>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <!-- End Single List  -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Skill List Area  -->
                                </div>
                            </div>
                        </div>
                        <!-- End Single Tab  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Resume Area -->
    <!-- Start Testimonia Area  -->
    <div class="rn-testimonial-area rn-section-gap section-separator" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle">What Clients Say</span>
                        <h2 class="title">Testimonial</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-activation testimonial-pb mb--30">
                        <!-- Start Single testiminail -->
                        @foreach($testimonials as $testimonial)
                        <div class="testimonial mt--50 mt_md--40 mt_sm--40">
                            <div class="inner">
                                <div class="card-info">
                                    <div class="card-thumbnail">
                                        <img src="{{ asset($testimonial->image) }}" style="height: 400px; width: 500px;" alt="Testimonial-image">
                                    </div>
                                    <div class="card-content">
                                        <span class="subtitle mt--10">{{ $testimonial->work_category }}</span>
                                        <h3 class="title">{{ $testimonial->client_name }}</h3>
                                        <span class="designation">{{ $testimonial->client_designation }}</span>
                                    </div>
                                </div>
                                <div class="card-description">
                                    <div class="title-area">
                                        <div class="title-info">
                                            <h3 class="title">{{ $testimonial->project_title }}</h3>
                                            <span class="date">via {{ $testimonial->work_platform }} - {{$testimonial->starting_date}} - {{$testimonial->ending_date}}</span>
                                        </div>
                                        <div class="rating">
                                            <img src="{{ asset('/') }}website/assets/images/icons/rating.png" alt="rating-image">
                                            <img src="{{ asset('/') }}website/assets/images/icons/rating.png" alt="rating-image">
                                            <img src="{{ asset('/') }}website/assets/images/icons/rating.png" alt="rating-image">
                                            <img src="{{ asset('/') }}website/assets/images/icons/rating.png" alt="rating-image">
                                            <img src="{{ asset('/') }}website/assets/images/icons/rating.png" alt="rating-image">
                                        </div>
                                    </div>
                                    <div class="seperator"></div>
                                    <p class="discription">
                                        {!!  $testimonial->message  !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!--End Single testiminail -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonia Area  -->
    <!-- Pricing Area -->

    <!-- pricing area -->
    <!-- Start News Area -->
    <div class="rn-blog-area rn-section-gap section-separator" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="section-title text-center">
                        <span class="subtitle">Feel free to visit my blog</span>
                        <h2 class="title">My Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row row--25 mt--30 mt_md--10 mt_sm--10">

                <!-- Start Single blog -->
                @foreach($blogs as $blog)
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-blog">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalCenterss{{ $blog->id }}">
                                        <img src="{{ asset($blog->image) }}" class="mob-img" alt="Blog Image" style="height: 250px; width: 350px;" >
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">
                                                @if($blogCategory->contains('id',$blog->blogCategory_id))
                                                    {{ $blogCategory->where('id', $blog->blogCategory_id)->first()->name }}
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                    <h4 class="title">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalCenterss{{ $blog->id }}">
                                            {{ substr($blog->b_title,0,50) }} <i class="feather-arrow-up-right"></i>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for each blog -->
                    <div class="modal fade" id="exampleModalCenterss{{ $blog->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-news" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i data-feather="x"></i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset($blog->image) }}" alt="Blog Image" class="img-fluid modal-feat-img">
                                    <div class="news-details">
                                        <span class="date">{{ $blog->created_at->format('j F, Y') }}</span>
                                        <h2 class="title">{{ $blog->b_title }}</h2>
                                        <p>{!! $blog->b_description !!}</p>
                                    </div>
                                    <!-- Comment Section Area Start -->
{{--                                    <div class="comment-inner">--}}
{{--                                        <h3 class="title mb--40 mt--50">Leave a Reply</h3>--}}
{{--                                        <form action="#">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-lg-6 col-md-12 col-12">--}}
{{--                                                    <div class="rnform-group">--}}
{{--                                                        <input type="text" name="r_name" placeholder="Name">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="rnform-group">--}}
{{--                                                        <input type="email" name="r_email" placeholder="Email">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="rnform-group">--}}
{{--                                                        <input type="text" name="r_number" placeholder="Number">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-6 col-md-12 col-12">--}}
{{--                                                    <div class="rnform-group">--}}
{{--                                                        <textarea placeholder="Comment" name="comment"></textarea>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <a class="rn-btn" href="#"><span>SUBMIT NOW</span></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
                                    <!-- Comment Section End -->
                                </div>
                                <!-- End of .modal-body -->
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- End Single blog -->
            </div>
            <br>
            <br>
            <div class="more-blog-footer">
                <a href="{{ route('all.blogs') }}" class="rn-btn d-inline-block position-absolute start-50 translate-middle mt-1 bi bi-caret-down-fill">
                    <span>More Blogs</span>
                    <i data-feather="arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- ENd Mews Area -->

    <!-- Start Team Area  -->
    <div class="rn-testimonial-area rn-section-gap section-separator" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle">Visit my team members website to see their info</span>
                        <h2 class="title">My Team Members</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-activation testimonial-pb mb--30">
                        <!-- Start Single testiminail -->
                        @foreach($teams as $team)
                        <div class="testimonial mt--50 mt_md--40 mt_sm--40">
                            <div class="inner">
                                <div class="card-info">
                                    <div class="card-thumbnail">
                                        <a href="{{ $team->web_url }}"><img src="{{ asset($team->image) }}" style="height: 335px; width: 365px;" alt="Testimonial-image"></a>
                                    </div>
                                    <div class="card-content">
                                        <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12">
                                            <div class="social-share-inner-right">
                                                <ul class="social-share d-flex gap-3 liststyle">
                                                    <li class="facebook"><a href="{{ $team->t_fburl }}"><i data-feather="facebook"></i></a>
                                                    </li>
                                                    <li class="github"><a href="{{ $team->t_github }}"><i data-feather="github"></i></a>
                                                    </li>
                                                    <li class="linkedin"><a href="{{ $team->t_linked }}"><i data-feather="linkedin"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="{{ $team->web_url }}"><h3 class="title">{{ $team->t_name }}</h3></a>
                                        <span class="designation">{{ $team->designation }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!--End Single testiminail -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area  -->

    <!-- Start Contact section -->
    <div class="rn-contact-area rn-section-gap section-separator" id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle">Contact</span>
                        <h2 class="title">Contact With Me</h2>
                    </div>
                </div>
            </div>

            <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                <div class="col-lg-5">
                    <div class="contact-about-area">
                        <div class="thumbnail">
                            <img src="{{ asset($profiles->sec_logo) }}">
                        </div>
                        <div class="title-area">
                            <h4 class="title">{{ $profiles->m_name }}</h4>
                            <span>Web Developer</span>
                        </div>
                        <div class="description">
                            <p>I am available for freelance work. Connect with me via and call in to my account.
                            </p>
                            <span class="phone">Phone: <a href="tel:01710223184">{{ $profiles->phone }}</a></span>
                            <span class="mail">Email: <a href="mailto:msilrag@gmail.com">{{ $profiles->email }}</a></span>
                        </div>
                        <div class="social-area">
                            <div class="name">FIND WITH ME</div>
                            <div class="social-icone">
                                <a href="{{ $profiles->fb_url }}"><i data-feather="facebook"></i></a>
                                <a href="{{ $profiles->linked_in_url }}"><i data-feather="linkedin"></i></a>
                                <a href="{{ $profiles->git_url }}"><i data-feather="github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos-delay="600" class="col-lg-7 contact-input">
                    <div class="contact-form-wrapper">
                        <div class="introduce">

                            <form class="row"  action="{{ route('client.contact') }}" id="contact-form" method="post">
                                @csrf
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-name">Your Name</label>
                                        <input class="form-control form-control-lg" name="c_name" id="contact-name" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-phone">Phone Number</label>
                                        <input class="form-control" name="c_number" id="contact-phone" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-email">Email</label>
                                        <input class="form-control form-control-sm" id="contact-email" name="c_email" type="email">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="subject">subject</label>
                                        <input class="form-control form-control-sm" id="subject" name="subject" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-message">Your Message</label>
                                        <textarea name="c_message" id="summernote"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="rn-btn">
                                        <span>SEND MESSAGE</span>
                                        <i data-feather="arrow-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact section -->
    <!-- Back to  top Start -->
    <div class="backto-top">
        <div>
            <i data-feather="arrow-up"></i>
        </div>
    </div>
    <!-- Back to top end -->


</main>

@endsection
