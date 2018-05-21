</<!doctype html>
<html class="has-navbar-fixed-top">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('scripts-before')
    
    <script src="{{mix('js/app.js')}}"></script>
    @stack('scripts-after')
    <link href="{{asset('css/lightbox.css')}}" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <title>Hochzeitsfotos</title>
</head>
<body>
    @include('layouts.nav')
    <div class="container">
        @yield('content')
    </div>

    <script src="{{asset('js/lightbox-plus-jquery.js')}}"></script>
    <script src="{{asset('js/upload.js')}}"></script>
</body>
<footer class="footer">
        <div class="container">
          <div class="content has-text-centered is-fixed-bottom">
            <p>
                <label class="label is-small"> © by Samantha Howlett and Kevin Schaefer</label>
            </p>
          </div>
        </div>
      </footer>
</html>