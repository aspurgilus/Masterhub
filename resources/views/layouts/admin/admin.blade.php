<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Masterhub') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js','build') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ mix('css/app.css','build') }}" rel="stylesheet">
    <link href="{{ asset('build/css/main.css') }}" rel="stylesheet">

</head>
<body id="app">
    <div class="row app-content">
        <div class="col-md-2">
            @include('layouts.admin.aside')
        </div>
        <div class="col-md-10">
            <main>
                @include('layouts.admin.header')
                @include('layouts.flash')
                @yield('content')
                <div class="adminFooter mx-auto">
                    @include('layouts.admin.footer')
                </div>
            </main>
        </div>
    </div>


</body>
</html>


