<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="/" class="p-3">Home</a>
            </li>
            <li>
                <a href="/notes" class="p-3">Notes</a>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth
            <li>
                <a href="" class="p-3">{{ auth()->user()->email }}</a>
            </li>
            <li>
                <a href="/logout">Logout</a>
            </li>
            @endauth

            @guest
            <li>
                <a href="/login" class="p-3">Login</a>
            </li>
            <li>
                <a href="/register" class="p-3 rounded">Register</a>
            </li>
            @endguest
        </ul>
    </nav>

    @yield('content')
</body>
</html>
