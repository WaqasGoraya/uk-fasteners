<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UK FASTENERS') }}</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body id="top">
    <!-- Page Header -->
    @include('frontend.partials.header')

    <!-- Page Content -->
    @yield('main_content')

    <!-- Page Footer -->
    @include('frontend.partials.footer')

    <!-- custom scripts -->
    @yield('custom_scripts')
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>