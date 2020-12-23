<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="/" class="p-3">Home</a>
            </li>
            <li>
                <a href="/dashboard" class="p-3">Dashboard</a>
            </li>
            <li>
                <a href="#" class="p-3">Notes</a>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth
            <li>
                <a href="" class="p-3">#</a>
            </li>
            <li>
                <form action="#" method="post" class="p-3 inline">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
            @endauth

            @guest
            <li>
                <a href="#" class="p-3">Login</a>
            </li>
            <li>
                <a href="#" class="p-3">Register</a>
            </li>
            @endguest
        </ul>
    </nav>

    @yield('content')
</body>
</html>
