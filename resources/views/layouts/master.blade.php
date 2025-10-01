<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    @include('partials.navbar')

    <div class="container mx-auto mt-4">
        @yield('content')
    </div>
=======
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')')</title>
</head>
<body>
    @include('partials.navbar')

    @yield('content')
>>>>>>> fad412211e3c277afa85e7362af562cc22b67e20
</body>
</html>