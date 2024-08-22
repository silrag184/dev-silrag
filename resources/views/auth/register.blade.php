{{--<!doctype html>--}}
{{--<html lang="en">--}}


{{--<!-- Mirrored from themesbrand.com/minia/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jun 2024 17:13:00 GMT -->--}}
{{--<head>--}}

{{--    <meta charset="utf-8" />--}}
{{--    <title>Register | Minia - Minimal Admin & Dashboard Template</title>--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />--}}
{{--    <meta content="Themesbrand" name="author" />--}}
{{--    <!-- App favicon -->--}}
{{--    <link rel="shortcut icon" href="{{ asset('/') }}admin/assets/images/favicon.ico">--}}

{{--    <!-- preloader css -->--}}
{{--    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/preloader.min.css" type="text/css" />--}}

{{--    <!-- Bootstrap Css -->--}}
{{--    <link href="{{ asset('/') }}admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />--}}
{{--    <!-- Icons Css -->--}}
{{--    <link href="{{ asset('/') }}admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />--}}
{{--    <!-- App Css-->--}}
{{--    <link href="{{ asset('/') }}admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />--}}

{{--</head>--}}

{{--<body>--}}

{{--<!-- <body data-layout="horizontal"> -->--}}
{{--<div class="auth-page">--}}
{{--    <div class="container-fluid p-0">--}}
{{--        <div class="row g-0">--}}
{{--            <div class="col-xxl-3 col-lg-4 col-md-5">--}}
{{--                <div class="auth-full-page-content d-flex p-sm-5 p-4">--}}
{{--                    <div class="w-100">--}}
{{--                        <div class="d-flex flex-column h-100">--}}
{{--                            <div class="mb-4 mb-md-5 text-center">--}}
{{--                                <a href="index.html" class="d-block auth-logo">--}}
{{--                                    <img src="{{ asset('/') }}admin/assets/images/logo-sm.svg" alt="" height="28"> <span class="logo-txt">Minia</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="auth-content my-auto">--}}
{{--                                <div class="text-center">--}}
{{--                                    <h5 class="mb-0">Register Account</h5>--}}
{{--                                    <p class="text-muted mt-2">Who are you? Do I know you?</p>--}}
{{--                                </div>--}}
{{--                                <form class="needs-validation mt-4 pt-2" method="POST" action="{{ route('register') }}">--}}
{{--                                    @csrf--}}
{{--                                    <div class="mb-3">--}}
{{--                                        <label for="username" class="form-label">Username</label>--}}
{{--                                        <input type="text" class="form-control" name="name" :value="old('name)" id="username" placeholder="Enter username" required autofocus autocomplete="name">--}}
{{--                                        <div class="invalid-feedback">--}}
{{--                                            Please Enter Username--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="useremail" class="form-label">Email</label>--}}
{{--                                        <input type="email" class="form-control" id="useremail" name="email" :value="old('email)" placeholder="Enter email" required autocomplete="username">--}}
{{--                                        <div class="invalid-feedback">--}}
{{--                                            Please Enter Email--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="userpassword" class="form-label">Password</label>--}}
{{--                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password" required autocomplete="new-password">--}}
{{--                                        <div class="invalid-feedback">--}}
{{--                                            Please Enter Password--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="passwordConfirmation" class="form-label">Confirm Password</label>--}}
{{--                                        <input type="password" class="form-control" name="password_confirmation" id="passwordConfirmation" placeholder="Confirm password" required autocomplete="new-password">--}}
{{--                                        <div class="invalid-feedback">--}}
{{--                                            Please Confirm Password--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    @if(Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())--}}
{{--                                        <div class="mb-4">--}}
{{--                                            <p class="mb-0">By registering you agree to the Minia <a href="#" class="text-primary">Terms of Use</a></p>--}}
{{--                                        </div>--}}
{{--                                    @endif--}}
{{--                                    <div class="mb-3">--}}
{{--                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">{{ __('Register') }}</button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}

{{--                                <div class="mt-4 pt-2 text-center">--}}
{{--                                    <div class="signin-other-title">--}}
{{--                                        <h5 class="font-size-14 mb-3 text-muted fw-medium">- Sign up using -</h5>--}}
{{--                                    </div>--}}

{{--                                    <ul class="list-inline mb-0">--}}
{{--                                        <li class="list-inline-item">--}}
{{--                                            <a href="javascript:void()"--}}
{{--                                               class="social-list-item bg-primary text-white border-primary">--}}
{{--                                                <i class="mdi mdi-facebook"></i>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li class="list-inline-item">--}}
{{--                                            <a href="javascript:void()"--}}
{{--                                               class="social-list-item bg-info text-white border-info">--}}
{{--                                                <i class="mdi mdi-twitter"></i>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li class="list-inline-item">--}}
{{--                                            <a href="javascript:void()"--}}
{{--                                               class="social-list-item bg-danger text-white border-danger">--}}
{{--                                                <i class="mdi mdi-google"></i>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}

{{--                                <div class="mt-5 text-center">--}}
{{--                                    <p class="text-muted mb-0">Already have an account ?--}}
{{--                                        <a href="{{ route('silragm3184') }}" class="text-primary fw-semibold"> Login </a>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="mt-4 mt-md-5 text-center">--}}
{{--                                <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Minia   . Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- end auth full page content -->--}}
{{--            </div>--}}
{{--            <!-- end col -->--}}
{{--            <div class="col-xxl-9 col-lg-8 col-md-7">--}}
{{--                <div class="auth-bg pt-md-5 p-4 d-flex">--}}
{{--                    <div class="bg-overlay bg-primary"></div>--}}
{{--                    <ul class="bg-bubbles">--}}
{{--                        <li></li>--}}
{{--                        <li></li>--}}
{{--                        <li></li>--}}
{{--                        <li></li>--}}
{{--                        <li></li>--}}
{{--                        <li></li>--}}
{{--                        <li></li>--}}
{{--                        <li></li>--}}
{{--                        <li></li>--}}
{{--                        <li></li>--}}
{{--                    </ul>--}}
{{--                    <!-- end bubble effect -->--}}
{{--                    <div class="row justify-content-center align-items-center">--}}
{{--                        <div class="col-xl-7">--}}
{{--                            <div class="p-0 p-sm-4 px-xl-0">--}}
{{--                                <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">--}}
{{--                                    <div class="carousel-indicators carousel-indicators-rounded justify-content-start ms-0 mb-0">--}}
{{--                                        <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>--}}
{{--                                        <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
{{--                                        <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>--}}
{{--                                    </div>--}}
{{--                                    <!-- end carouselIndicators -->--}}
{{--                                    <div class="carousel-inner">--}}
{{--                                        <div class="carousel-item active">--}}
{{--                                            <div class="testi-contain text-white">--}}
{{--                                                <i class="bx bxs-quote-alt-left text-success display-6"></i>--}}

{{--                                                <h4 class="mt-4 fw-medium lh-base text-white">“I feel confident--}}
{{--                                                    imposing change--}}
{{--                                                    on myself. It's a lot more progressing fun than looking back.--}}
{{--                                                    That's why--}}
{{--                                                    I ultricies enim--}}
{{--                                                    at malesuada nibh diam on tortor neaded to throw curve balls.”--}}
{{--                                                </h4>--}}
{{--                                                <div class="mt-4 pt-3 pb-5">--}}
{{--                                                    <div class="d-flex align-items-start">--}}
{{--                                                        <div class="flex-shrink-0">--}}
{{--                                                            <img src="{{ asset('/') }}admin/assets/images/users/avatar-1.jpg" class="avatar-md img-fluid rounded-circle" alt="...">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="flex-grow-1 ms-3 mb-4">--}}
{{--                                                            <h5 class="font-size-18 text-white">Richard Drews--}}
{{--                                                            </h5>--}}
{{--                                                            <p class="mb-0 text-white-50">Web Designer</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="carousel-item">--}}
{{--                                            <div class="testi-contain text-white">--}}
{{--                                                <i class="bx bxs-quote-alt-left text-success display-6"></i>--}}

{{--                                                <h4 class="mt-4 fw-medium lh-base text-white">“Our task must be to--}}
{{--                                                    free ourselves by widening our circle of compassion to embrace--}}
{{--                                                    all living--}}
{{--                                                    creatures and--}}
{{--                                                    the whole of quis consectetur nunc sit amet semper justo. nature--}}
{{--                                                    and its beauty.”</h4>--}}
{{--                                                <div class="mt-4 pt-3 pb-5">--}}
{{--                                                    <div class="d-flex align-items-start">--}}
{{--                                                        <div class="flex-shrink-0">--}}
{{--                                                            <img src="{{ asset('/') }}admin/assets/images/users/avatar-2.jpg" class="avatar-md img-fluid rounded-circle" alt="...">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="flex-grow-1 ms-3 mb-4">--}}
{{--                                                            <h5 class="font-size-18 text-white">Rosanna French--}}
{{--                                                            </h5>--}}
{{--                                                            <p class="mb-0 text-white-50">Web Developer</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="carousel-item">--}}
{{--                                            <div class="testi-contain text-white">--}}
{{--                                                <i class="bx bxs-quote-alt-left text-success display-6"></i>--}}

{{--                                                <h4 class="mt-4 fw-medium lh-base text-white">“I've learned that--}}
{{--                                                    people will forget what you said, people will forget what you--}}
{{--                                                    did,--}}
{{--                                                    but people will never forget--}}
{{--                                                    how donec in efficitur lectus, nec lobortis metus you made them--}}
{{--                                                    feel.”</h4>--}}
{{--                                                <div class="mt-4 pt-3 pb-5">--}}
{{--                                                    <div class="d-flex align-items-start">--}}
{{--                                                        <img src="{{ asset('/') }}admin/assets/images/users/avatar-3.jpg"--}}
{{--                                                             class="avatar-md img-fluid rounded-circle" alt="...">--}}
{{--                                                        <div class="flex-1 ms-3 mb-4">--}}
{{--                                                            <h5 class="font-size-18 text-white">Ilse R. Eaton</h5>--}}
{{--                                                            <p class="mb-0 text-white-50">Manager--}}
{{--                                                            </p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- end carousel-inner -->--}}
{{--                                </div>--}}
{{--                                <!-- end review carousel -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- end col -->--}}
{{--        </div>--}}
{{--        <!-- end row -->--}}
{{--    </div>--}}
{{--    <!-- end container fluid -->--}}
{{--</div>--}}


{{--<!-- JAVASCRIPT -->--}}
{{--<script src="{{ asset('/') }}admin/assets/libs/jquery/jquery.min.js"></script>--}}
{{--<script src="{{ asset('/') }}admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
{{--<script src="{{ asset('/') }}admin/assets/libs/metismenu/metisMenu.min.js"></script>--}}
{{--<script src="{{ asset('/') }}admin/assets/libs/simplebar/simplebar.min.js"></script>--}}
{{--<script src="{{ asset('/') }}admin/assets/libs/node-waves/waves.min.js"></script>--}}
{{--<script src="{{ asset('/') }}admin/assets/libs/feather-icons/feather.min.js"></script>--}}
{{--<!-- pace js -->--}}
{{--<script src="{{ asset('/') }}admin/assets/libs/pace-js/pace.min.js"></script>--}}

{{--<!-- validation init -->--}}
{{--<script src="{{ asset('/') }}admin/assets/js/pages/validation.init.js"></script>--}}

{{--</body>--}}


{{--<!-- Mirrored from themesbrand.com/minia/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jun 2024 17:13:01 GMT -->--}}
{{--</html>--}}




{{--error page--}}
    <!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>404 Error | Minia - Minimal Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}admin/assets/images/gmpic.jpeg">

    <!-- preloader css -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{asset('/')}}admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('/')}}admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('/')}}admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

<!-- <body data-layout="horizontal"> -->

<div class="my-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mb-5">
                    <h1 class="display-1 fw-semibold">4<span class="text-primary mx-2">0</span>4</h1>
                    <h4 class="text-uppercase">Sorry, page not found</h4>
                    <div class="mt-5 text-center">
                        <h1 class="text-primary">Behind this mask there is more than just flesh.
                            Beneath this mask there is an idea...
                            and ideas are bulletproof.</h1>
                        <a class="btn btn-primary waves-effect waves-light" href="{{ route('home') }}">Go Back to Main Page You Asshole <h3>😠😠</h3></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 col-xl-8">
                <div>
                    <img src="{{asset('/')}}admin/assets/images/gmpic.jpeg" alt="" class="img-fluid">
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end content -->

<!-- JAVASCRIPT -->
<script src="{{asset('/')}}admin/assets/libs/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/node-waves/waves.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/feather-icons/feather.min.js"></script>
<!-- pace js -->
<script src="{{asset('/')}}admin/assets/libs/pace-js/pace.min.js"></script>

</body>

</html>
{{--error page--}}
