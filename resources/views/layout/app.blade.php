<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('images/Logo.svg') }}">
</head>

<body class="bg-[#fcf9f4] text-gray-900 !important">

    @include('layout.navbar')

    <main class="container px-4 py-10 mx-auto bg-bg_primary">
        @yield('content')
    </main>

    @include('layout.footer')

</body>

</html>
