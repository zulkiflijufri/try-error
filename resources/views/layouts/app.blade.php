<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        <div class="row py-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Menu
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="/">Semua Tugas</a></li>
                        <li class="list-group-item"><a href="/create-task">Buat Tugas</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
