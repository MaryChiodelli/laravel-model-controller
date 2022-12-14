<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('metaTitle')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    
    <header>
        <h1>Movies & Series</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; 2022 Movies & Series, Inc.
    </footer>

</body>
</html>