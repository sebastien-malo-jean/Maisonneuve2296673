<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="author" content="Sebastien Malo Jean">
    <meta name="description" content="">
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        @include('layouts.components.navbar')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('layouts.components.footer')
    </footer>
</body>

</html>