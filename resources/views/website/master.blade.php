<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    @include('website.include.link')
</head>

<body>

    @include('website.include.header')

    @include('website.include.navbar')

    @yield('content')

    @include('website.include.footer')

    <a href="#" class="btn btn-lg btn-danger btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include('website.include.script')
</body>

</html>
