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

    <!-- Custom -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    <title>Document</title>
</head>
<!-- Form Centering -->
<body style="height: 100vh">
    <div class="container" style="height: 100%">
        <div class="row" style="height: 100%">
            <!-- Form Body -->
            <div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-10 offset-1">
                <div class="form-container">
                    <h2>@yield('header')</h2>
                    <hr>
                    <!-- Content: Scrollable -->
                    <div class="form-scrollable">
                        @yield('content')
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <!-- Scripts -->
    <script src="/js/app.js"></script>
    @yield('script')
</body>
</html>