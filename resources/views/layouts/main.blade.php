<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap -->
    <link href="/css/app.css" rel="stylesheet">
    
    
    <title>@yield('title')</title>
</head>
<body>
    <!-- header here-->
    @include('inc.navbar')

    <!-- content here-->
    <main class="py-4">
        @yield('content')
    </main>
    
    <!-- footer here-->

    
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>