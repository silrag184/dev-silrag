<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>@yield('title') | Silrag</title>
    @include('admin.includes.meta')

    @include('admin.includes.style')

</head>

<body>

<!-- <body data-layout="horizontal"> -->

<!-- Begin page -->
<div id="layout-wrapper">
    @include('admin.includes.header')

    <!-- ========== Left Sidebar Start ========== -->
    @include('admin.includes.left-sidebar')
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    @yield('body')
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right Sidebar -->
@include('admin.includes.right-sidebar')
<!-- /Right-bar -->

@include('admin.includes.footer')

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>


@include('admin.includes.script')

</body>

</html>
