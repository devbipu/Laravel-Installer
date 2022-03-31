{{-- 
    
    This is laravel installer page   
    
--}}

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel Installer') }}</title>
    
    
    {{-- Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .installer_wrapper{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgb(241 245 249);
        }
        .installerInner{
            max-width: 500px;
        }
        .installerInner .steps{
            list-style: none;
        }
        .installerInner .steps li {
            display: inline-block;
            padding: 2px 12px;
            border-radius: 40px;
            background-color: grey;
            color: white;
            margin: 0px 5px;
            vertical-align: middle;
        }
        li.step-item i {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 12px 4px;
            font-size: 20px;
            color: white;
        }
        .installerInner .steps li.active {
            background: green;
            color: white;
        }
        .installerInner .steps li.active a{
            color: white;
        }
        .form-control:focus{
            box-shadow: none;
        }
    </style>
</head>
<body>

    <main>
        <div class="installer_wrapper">
            @yield('installerBox')
        </div>
    </main>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('installer-js')
</body>
</html>
