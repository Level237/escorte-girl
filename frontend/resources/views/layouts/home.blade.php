<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="escortes girl,annonces,cameroon,plaisir">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="viens-yamo.com">
    <meta name="twitter:title" content="@yield('meta_title')">
    <meta name="twitter:description" content="@yield('meta_description')">
    <meta name="twitter:image" content="@yield('meta_image')">
    <title>@yield('title', 'Viens Yamo')</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,560;12..96,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @stack('head')
</head>
<body class="min-h-screen bg-paper font-sans text-ink antialiased">
    @include('home.header')
    <main>
        @yield('content')
    </main>
    @include('home.footer')
    @stack('scripts')
</body>
</html>
