<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    @yield('head')
</head>



<body>

    @include('navbar')
    {{-- @include('tampilan.sidebar.menu-item') --}}

    <div class="py-4">

        @yield('content')

    </div>

</body>

</html>
