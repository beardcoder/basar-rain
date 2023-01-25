<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />

    <link rel="shortcut icon" href="/favicons/favicon.ico" />
    <link rel="icon" type="image/png" href="/favicons/favicon-32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/favicons/favicon-16.png" sizes="16x16" />

    @vite(['resources/css/app.css'])
</head>

<body>
    @yield('content')
    @vite(['resources/js/app.js'])
</body>

</html>
