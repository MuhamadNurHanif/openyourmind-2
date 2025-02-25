<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#fcf9f4] text-gray-900 !important">

    @include('layout.navbar')

    <main class="container mx-auto bg-bg_primary px-4 py-10">
        @yield('content')
    </main>

    @include('layout.footer')

</body>
</html>
