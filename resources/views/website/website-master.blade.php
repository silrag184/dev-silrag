<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Silrag || @yield('title')</title>
    @include('website.includes.meta')
    <!-- Favicon -->
    @include('website.includes.style')
</head>

<body class="template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">
@include('website.includes.header')


@yield('body')


@include('website.includes.footer')


@include('website.includes.script')
</body>

</html>
