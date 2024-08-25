<!-- Start Header -->
<header class="rn-header haeder-default black-logo-version header--fixed header--sticky">
    <div class="header-wrapper rn-popup-mobile-menu m--0 row align-items-center">
        <!-- Start Header Left -->
        <div class="col-lg-2 col-6">
            <div class="header-left">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset($profiles->main_logo) }}" style="height: 60px; width: 60px;" alt="logo">
                    </a>
                </div>
            </div>
        </div>
        <!-- End Header Left -->
        <!-- Start Header Center -->
        <div class="col-lg-10 col-6">
            <div class="header-center">
                <nav id="sideNav" class="mainmenu-nav navbar-example2 d-none d-xl-block onepagenav">
                    <!-- Start Mainmanu Nav -->
                    <ul class="primary-menu nav nav-pills">
                        <li class="nav-item current"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="#features">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#resume">Resume</a></li>
                        <li class="nav-item"><a class="nav-link" href="#testimonial">Testimonial</a></li>
                        <li class="nav-item"><a class="nav-link" href="#blog">blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">My Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contacts">Contact</a></li>
                    </ul>
                    <!-- End Mainmanu Nav -->
                </nav>
                <!-- Start Header Right  -->
                <div class="header-right">
                    <a class="rn-btn" target="_blank" href="{{ $docDownload->file }}"><span>Download CV</span></a>
                    <div class="hamberger-menu d-block d-xl-none">
                        <i id="menuBtn" class="feather-menu humberger-menu"></i>
{{--                        {{ route('document.download') }}--}}
                    </div>
                    <div class="close-menu d-block">
                            <span class="closeTrigger">
                            <i data-feather="x"></i>
                        </span>
                    </div>
                </div>
                <!-- End Header Right  -->

            </div>
        </div>
        <!-- End Header Center -->
    </div>
</header>
<!-- End Header Area -->
