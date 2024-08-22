@extends('website.website-master2')
@section('title')
    All Blogs
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
                        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-6 col-12 mt--30">
                            <div class="rn-blog">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalCenters{{ $blog->id }}">
                                            <img src="{{ asset($blog->image) }}" class="mob-img" alt="Blog Image" style="height: 250px; width: 350px;">
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
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalCenters{{ $blog->id }}">
                                                {{ substr($blog->b_title,0,14) }} <i class="feather-arrow-up-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal for each blog -->
                        <div class="modal fade" id="exampleModalCenters{{ $blog->id }}" tabindex="-1" role="dialog" aria-hidden="true">
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
            </div>
        </div>
        <!-- ENd Mews Area -->

        <!-- Back to  top Start -->
        <div class="backto-top">
            <div>
                <i data-feather="arrow-up"></i>
            </div>
        </div>
        <!-- Back to top end -->


    </main>

@endsection
