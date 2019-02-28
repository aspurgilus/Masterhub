<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
        <header>
            @include('layouts.header')
        </header>

        <div class="row app-content">
            <div class="col-md-2">
                <aside class="w-100">
                    @include('layouts.aside')
                </aside>
            </div>
            <div class="col-md-10">
                <main class="app-content py-4">
                    @include('/layouts.flash')
                    @yield('content')

                </main>
            </div>
        </div>
        <footer>
            @include('layouts.footer')
        </footer>

</body>
</html>


