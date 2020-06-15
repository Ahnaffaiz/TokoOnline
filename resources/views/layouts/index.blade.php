<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @include('includes.homepage.style')
</head>
<body>
    @include('includes.homepage.navbar')
    @yield('content')
    @include('includes.homepage.footer')
    @include('includes.homepage.script') 
</body>
</html>