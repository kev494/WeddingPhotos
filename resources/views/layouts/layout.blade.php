</<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('scripts-before')
    
    <script src="{{mix('js/app.js')}}"></script>
    @stack('scripts-after')
    <!-- flash css -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- lightbox css -->
    <link href="{{asset('css/lightbox.css')}}" rel="stylesheet">
    <!-- default (bulma) css -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- noelboss gallery css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css" type="text/css" rel="stylesheet" />
    <link href="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.gallery.min.css" type="text/css" rel="stylesheet" />    <title>Hochzeitsfotos</title>
</head>
<body>
    
    @include('layouts.nav')
    <div class="container">

        @include('flash::message')
        @yield('content')
    </div>
    <!-- laracast flash includes -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
        $('#flash-overlay-modal').modal();
    </script>
    <!-- lightbox includes -->
    <script src="{{asset('js/lightbox-plus-jquery.js')}}"></script>
    <script>
            lightbox.option({
              'wrapAround': true 
              //'fitImagesInViewport' : false
            })
        </script>
    <!-- upload js for not submitting form to upload -->
    <script src="{{asset('js/upload.js')}}"></script>

    <!-- noelboss lightbox js -->
    <script src="//code.jquery.com/jquery-latest.js"></script>
	<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.gallery.min.js" type="text/javascript" charset="utf-8"></script>
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