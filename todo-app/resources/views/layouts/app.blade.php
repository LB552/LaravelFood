<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>The Food Store</title>
</head>

<body>
    <header>
        <a href="{{ route('home') }}">
            <h1>The Food Store</h1>
        </a>
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>