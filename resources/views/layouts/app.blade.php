<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CSCQC') }}</title>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/red/pace-theme-minimal.min.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!-- Styles -->
    <style>
        body {
          display: flex;
          min-height: 100vh;
          flex-direction: column;
        }

        main {
          flex: 1 0 auto;
        }
    </style>
</head>
<body>
    <header>
        @include ('partials.nav')
    </header>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    @include ('partials.footer')
    <script src="/js/app.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            M.updateTextFields();
            M.AutoInit();

            $('.dropdown-trigger').dropdown({
                hover:true,
                constrainWidth:false
            });

            $('.parallax').parallax();
            $('.sidenav').sidenav();
        })
    </script>
</body>
</html>
