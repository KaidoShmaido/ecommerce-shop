<!doctype html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> 

  <!--styles -->

  <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet" />
  <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

  <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">
  <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
  <link href="https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.min.css" rel="stylesheet">
<script src="https://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js">
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.min.css">
  <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
  <link href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel ="Stylesheet">
  <script src="bootstrap-autocomplete.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/xcash/bootstrap-autocomplete@v2.3.7/dist/latest/bootstrap-autocomplete.min.js"></script>
   <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield(('title'))
    </title>

 <!--     Fonts and icons     -->

    <style>
        a{
            text-decoration: none !important;
             color: #000 !important;
        }

        
    </style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<script>
    $( function() {
      var availableTags = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
      ];
      $( "#search_product" ).autocomplete({
        source: availableTags
      });
    } );
    </script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
     
                @include('layouts.inc.frontnavbar')
                <div class="content">
                    @yield('content')
                </div>
       



         

<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('frontend/js/jquery.min.js') }}" defer></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}" defer></script>
<script src="{{ asset('frontend/js/custom.js') }}" defer></script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 @if(session ('status'))
        <script>
            swal("{{session('status')}}")
        </script>
 @endif
@yield('scripts')

    
</body>
</html>
