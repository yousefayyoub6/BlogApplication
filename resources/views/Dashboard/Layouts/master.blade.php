<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('Dashboard.Layouts.Bootstrap')
    @include('Dashboard.Layouts.head')
    @yield('css')
</head>

<body>
    <!-- Sidebar Start -->
    @include('Dashboard.Layouts.sidebar')
    <!-- Sidebar End -->

    <!-- header Start -->

    @include('Dashboard.Layouts.header')
    <!-- header End -->
    <main id="main" class="main">
        @yield('content')
    </main>

    @include('Dashboard.Layouts.footer')
    @include('Dashboard.Layouts.script')

</body>

</html>
