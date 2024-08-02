<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PestnClean</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('fontend/plugins/fontawesome/css/all.min.css') }}">

    <script src="{{ asset('fontend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('fontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('fontend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js"></script>

    <link rel="stylesheet" href="{{ asset('fontend/plugins/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('fontend/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/components/header.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/components/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/components/authentication.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/components/user.css') }}">

    {{-- Render css của các trang đang cần hiện --}}
    @stack('css')
</head>

<body>

    @include('layouts.include.client.header')
    @yield('content')
    @include('layouts.include.client.footer')

    @include('layouts.include.client.model')

    {{-- <script src="{{ asset('fontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('fontend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js"></script> 
    <script src="{{ asset('fontend/js/components/details.js') }}"></script> --}}
</body>

</html>
